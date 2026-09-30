/* Morais Borges — comportamento da hero
   Um único loop de rAF governa deriva e paralaxe; a entrada entrega os
   elementos direto para ele através de --px / --py. */

(function () {
  "use strict";

  var reduced = window.matchMedia("(prefers-reduced-motion: reduce)");

  /* ---- Entrada orquestrada ------------------------------------------- */

  var revealables = Array.prototype.slice.call(document.querySelectorAll("[data-reveal]"));
  revealables.forEach(function (el, i) {
    el.style.setProperty("--reveal-delay", 120 + i * 110 + "ms");
  });

  /* A classe is-ready é adicionada pelo script inline no <head>, não aqui:
     assim a entrada acontece mesmo que este arquivo nunca carregue. */

  /* ---- Cabeçalho ------------------------------------------------------ */

  var masthead = document.querySelector("[data-masthead]");
  var stuck = false;

  function onScroll() {
    var next = window.scrollY > 12;
    if (next !== stuck) {
      stuck = next;
      masthead.classList.toggle("is-stuck", stuck);
    }
  }
  onScroll();
  window.addEventListener("scroll", onScroll, { passive: true });

  /* ---- Menu móvel ----------------------------------------------------- */

  var toggle = document.querySelector("[data-menu-toggle]");
  var menu = document.querySelector("[data-mobile-menu]");

  if (toggle && menu) {
    toggle.addEventListener("click", function () {
      var open = toggle.getAttribute("aria-expanded") === "true";
      toggle.setAttribute("aria-expanded", String(!open));
      toggle.querySelector(".u-sr").textContent = open ? "Abrir menu" : "Fechar menu";
      menu.hidden = open;
    });

    menu.addEventListener("click", function (e) {
      if (e.target.closest("a")) {
        toggle.setAttribute("aria-expanded", "false");
        toggle.querySelector(".u-sr").textContent = "Abrir menu";
        menu.hidden = true;
      }
    });

    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && !menu.hidden) {
        toggle.setAttribute("aria-expanded", "false");
        menu.hidden = true;
        toggle.focus();
      }
    });
  }

  /* ---- Trilho de avaliações ------------------------------------------- */

  var track = document.querySelector("[data-track]");
  var progress = document.querySelector("[data-progress]");
  var arrows = Array.prototype.slice.call(document.querySelectorAll("[data-scroll]"));

  if (track) {
    // Um passo é a largura de um card mais o intervalo entre eles.
    function step() {
      var card = track.querySelector(".review");
      if (!card) return track.clientWidth;
      var gap = parseFloat(getComputedStyle(track).columnGap || "0") || 0;
      return card.getBoundingClientRect().width + gap;
    }

    function sync() {
      var max = track.scrollWidth - track.clientWidth;
      var visible = track.clientWidth / track.scrollWidth;
      var pos = max > 0 ? track.scrollLeft / max : 0;
      var atStart = track.scrollLeft <= 1;
      var atEnd = track.scrollLeft >= max - 1;

      if (progress) {
        // A largura do polegar é a fração visível; não uma posição fictícia.
        progress.style.width = Math.max(visible * 100, 12).toFixed(2) + "%";
        progress.style.transform =
          "translateX(" + (pos * (100 / Math.max(visible, 0.12) - 100)).toFixed(2) + "%)";
      }

      track.classList.toggle("is-end", atEnd);
      arrows.forEach(function (btn) {
        btn.disabled = btn.dataset.scroll === "prev" ? atStart : atEnd;
      });
    }

    arrows.forEach(function (btn) {
      btn.addEventListener("click", function () {
        track.scrollBy({
          left: (btn.dataset.scroll === "prev" ? -1 : 1) * step(),
          behavior: reduced.matches ? "auto" : "smooth"
        });
      });
    });

    // A barra arrasta o trilho.
    var rail = document.querySelector("[data-drag]");
    if (rail) {
      var dragging = false;

      function seek(clientX) {
        var box = rail.getBoundingClientRect();
        var thumb = progress ? progress.getBoundingClientRect().width : 0;
        var span = Math.max(box.width - thumb, 1);
        var ratio = Math.min(Math.max((clientX - box.left - thumb / 2) / span, 0), 1);
        track.scrollLeft = ratio * (track.scrollWidth - track.clientWidth);
      }

      rail.addEventListener("pointerdown", function (e) {
        dragging = true;
        rail.setPointerCapture(e.pointerId);
        seek(e.clientX);
      });
      rail.addEventListener("pointermove", function (e) { if (dragging) seek(e.clientX); });
      ["pointerup", "pointercancel"].forEach(function (evt) {
        rail.addEventListener(evt, function () { dragging = false; });
      });
    }

    track.addEventListener("scroll", function () {
      window.requestAnimationFrame(sync);
    }, { passive: true });
    window.addEventListener("resize", sync, { passive: true });
    sync();
  }

  /* ---- Entrada da segunda seção --------------------------------------- */

  /* Regra do projeto: conteúdo nunca depende de JS para existir na tela.
     O estado oculto só é armado depois de haver quem o revele, e três
     gatilhos independentes podem revelá-lo. Falha de animação custa a
     animação, nunca a seção. */
  document.querySelectorAll(".reviews, .areas, .profile, .contact").forEach(armReveal);

  function armReveal(reviews) {
    reviews.querySelectorAll("[data-reveal-scroll]").forEach(function (el, i) {
      el.style.setProperty("--reveal-delay", i * 85 + "ms");
    });

    var revealed = false;

    function showReviews() {
      if (revealed) return;
      revealed = true;
      reviews.classList.add("is-visible");
      window.removeEventListener("scroll", checkReviews);
    }

    function checkReviews() {
      if (reviews.getBoundingClientRect().top < window.innerHeight * 0.9) showReviews();
    }

    if ("IntersectionObserver" in window && !reduced.matches) {
      reviews.classList.add("reveal-armed");

      var io = new IntersectionObserver(function (entries) {
        for (var k = 0; k < entries.length; k++) {
          if (entries[k].isIntersecting) { showReviews(); io.disconnect(); return; }
        }
      }, { threshold: 0, rootMargin: "0px 0px -10% 0px" });
      io.observe(reviews);

      window.addEventListener("scroll", checkReviews, { passive: true });
      checkReviews();
      window.setTimeout(showReviews, 4000);
    } else {
      showReviews();
    }
  }

  /* ---- Deriva e paralaxe ---------------------------------------------- */

  var layers = Array.prototype.slice.call(document.querySelectorAll("[data-parallax]"));
  var floaters = Array.prototype.slice.call(document.querySelectorAll("[data-float]"));

  var pointerX = 0;
  var pointerY = 0;
  var easedX = 0;
  var easedY = 0;
  var running = false;
  var fine = window.matchMedia("(pointer: fine)");

  function onPointerMove(e) {
    pointerX = (e.clientX / window.innerWidth - 0.5) * 2;
    pointerY = (e.clientY / window.innerHeight - 0.5) * 2;
  }

  function frame(now) {
    if (reduced.matches) { running = false; return; }
    easedX += (pointerX - easedX) * 0.055;
    easedY += (pointerY - easedY) * 0.055;

    layers.forEach(function (el) {
      var depth = parseFloat(el.dataset.parallax) || 0;
      el.style.setProperty("--px", (easedX * depth * 14).toFixed(2) + "px");

      var drift = 0;
      if (el.dataset.float !== undefined) {
        var phase = parseFloat(el.dataset.float) || 0;
        drift = Math.sin(now / 3400 + phase * 2.1) * 6;
      }
      el.style.setProperty("--py", (easedY * depth * 9 + drift).toFixed(2) + "px");
    });

    floaters.forEach(function (el) {
      if (el.dataset.parallax !== undefined) return;
      var phase = parseFloat(el.dataset.float) || 0;
      el.style.setProperty("--py", (Math.sin(now / 3400 + phase * 2.1) * 6).toFixed(2) + "px");
    });

    requestAnimationFrame(frame);
  }

  function startMotion() {
    if (running || reduced.matches) return;
    running = true;
    if (fine.matches) {
      window.addEventListener("pointermove", onPointerMove, { passive: true });
    }
    requestAnimationFrame(frame);
  }

  if (!reduced.matches) startMotion();
  reduced.addEventListener("change", function () {
    if (reduced.matches) {
      layers.concat(floaters).forEach(function (el) {
        el.style.setProperty("--px", "0px");
        el.style.setProperty("--py", "0px");
      });
    } else {
      startMotion();
    }
  });
})();
