<?php
/**
 * Página inicial.
 *
 * O WordPress usa este arquivo automaticamente como home do site. A marcação
 * abaixo é a landing page aprovada, com três diferenças e só três: os caminhos
 * de imagem saem de get_theme_file_uri(), o link do WhatsApp sai de
 * morais_whatsapp(), e o link do blog sai de morais_url_blog(). O texto, a
 * ordem das seções e as classes são os mesmos do desenho.
 *
 * Esta página NÃO usa footer.php: ela termina na faixa de tinta, que já é o
 * fecho do documento. Por isso chama wp_footer() por conta própria.
 *
 * @package MoraisBorges
 */

get_header();
?>

<main id="conteudo">

  <section class="hero" id="topo">
    <div class="hero__inner">

      <!-- Texto transcrito da imagem enviada pelo escritório. As três linhas do
           título são quebras autorais, não resultado de refluxo: a tríade se
           constrói uma linha por vez e precisa cair sempre assim. -->
      <div class="hero__lede">
        <h1 class="hero__title" data-reveal>
          <span class="hero__title-line">Seu patrimônio protegido.</span>
          <span class="hero__title-line">Sua empresa segura.</span>
          <em class="hero__title-line hero__title-line--accent">Seu futuro garantido.</em>
        </h1>

        <p class="hero__sub" data-reveal>
          Há mais de 14 anos defendendo empresários em Direito Tributário e
          Empresarial — presencialmente no Cariri e online em todo o Brasil.
        </p>

        <!-- As estrelas são desenhadas e ficam em tinta, não em ouro: esta
             página não tem cor de acento. O rótulo do role já diz a nota por
             extenso, então os cinco SVGs ficam fora da árvore acessível. -->
        <p class="hero__selo" data-reveal>
          <span class="hero__estrelas" role="img" aria-label="Nota cinco de cinco estrelas">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
          </span>
          <b class="hero__nota">5,0</b>
          <span>no Google</span>
          <span class="hero__sep" aria-hidden="true"></span>
          <span>o escritório mais avaliado do Cariri</span>
        </p>

        <a class="btn btn--ink btn--lg hero__cta" href="#agendar" data-reveal>
          Iniciar contato
          <svg class="btn__arrow" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
            <path d="M2.5 8h11M9.5 4l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>
      <!-- A marca ocupa a coluna da direita, e os arcos são o halo dentro dela: concêntricos
           com o monograma, que já é feito de molduras concêntricas. Ficando
           dentro da figura, o halo acompanha a marca em qualquer largura sem
           precisar ser reancorado a cada quebra.
           O alt é vazio de propósito: o cabeçalho logo acima já anuncia
           "Morais Borges Advocacia", e repetir o nome aqui só faria o leitor
           de tela dizer a mesma coisa duas vezes. -->
      <figure class="hero__crest">
        <svg class="hero__arcs" viewBox="0 0 1000 1000" aria-hidden="true" focusable="false" data-parallax="-0.25">
          <g fill="none" stroke="currentColor" stroke-width="1" vector-effect="non-scaling-stroke">
            <circle cx="500" cy="500" r="150"/>
            <circle cx="500" cy="500" r="238"/>
            <circle cx="500" cy="500" r="330"/>
            <circle cx="500" cy="500" r="428"/>
            <circle cx="500" cy="500" r="534"/>
            <circle cx="500" cy="500" r="648"/>
          </g>
        </svg>

        <!-- A entrada vai na imagem, não na figura: a animação `rise` termina
             num transform próprio e apagaria o transform da figura. Quem
             carrega data-reveal não pode depender de transform. -->
        <img class="hero__logo" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/logo-morais-borges-empilhado.webp' ) ); ?>" alt="" data-reveal
             width="1253" height="619" fetchpriority="high" decoding="async">
      </figure>
    </div>
  </section>

  <section class="areas" id="areas" aria-labelledby="areas-titulo">
    <div class="areas__inner">

      <header class="areas__head">
        <h2 class="areas__title" id="areas-titulo" data-reveal-scroll>
          Cinco frentes. <span>Um só perímetro.</span>
        </h2>
        <p class="areas__lede" data-reveal-scroll>
          O patrimônio de um empresário raramente vaza por um lugar só. Atuamos nas
          cinco áreas onde o risco costuma aparecer ao mesmo tempo.
        </p>
      </header>

      <ul class="areas__grid">
        <li class="area area--1" data-reveal-scroll>
          <h3 class="area__name">Tributário</h3>
          <span class="area__rule" aria-hidden="true"></span>
          <p class="area__text">Revisão da carga tributária, aproveitamento de créditos e defesa em autuações fiscais.</p>
        </li>
        <li class="area area--2" data-reveal-scroll>
          <h3 class="area__name">Empresarial</h3>
          <span class="area__rule" aria-hidden="true"></span>
          <p class="area__text">Estrutura societária, contratos, sucessão e a separação entre o patrimônio da empresa e o do sócio.</p>
        </li>
        <li class="area area--3" data-reveal-scroll>
          <h3 class="area__name">Trabalhista</h3>
          <span class="area__rule" aria-hidden="true"></span>
          <p class="area__text">Prevenção de passivo, revisão das rotinas de pessoal e defesa em reclamatórias.</p>
        </li>
        <li class="area area--4" data-reveal-scroll>
          <h3 class="area__name">Imobiliário</h3>
          <span class="area__rule" aria-hidden="true"></span>
          <p class="area__text">Aquisição, locação, regularização e disputas sobre imóveis da empresa e do sócio.</p>
        </li>
        <li class="area area--5" data-reveal-scroll>
          <h3 class="area__name">Consumidor</h3>
          <span class="area__rule" aria-hidden="true"></span>
          <p class="area__text">Adequação de contratos e práticas comerciais, e defesa em demandas de consumidores.</p>
        </li>
      </ul>

    </div>
  </section>

  <section class="profile" id="escritorio" aria-labelledby="escritorio-titulo">
    <div class="profile__inner">

      <h2 class="profile__title" id="escritorio-titulo" data-reveal-scroll>
        Quem conduz o trabalho.
        <span>E como o escritório chegou até aqui.</span>
      </h2>


      <div class="duo" data-reveal-scroll>

        <figure class="duo__photo">
          <img src="<?php echo esc_url( get_theme_file_uri( 'assets/img/retrato-advogado-cor.webp' ) ); ?>" alt="Retrato de João Borges Filho" width="754" height="1000" loading="lazy" decoding="async">
        </figure>

        <div class="duo__panel">

          <p class="duo__name">João Borges Filho</p>
          <p class="duo__oab">OAB CE/24.881</p>

          <ul class="checks">
            <li>
              <svg viewBox="0 0 22 22" aria-hidden="true" focusable="false">
                <circle cx="11" cy="11" r="8.4" fill="none" stroke="currentColor" stroke-width="1.3"/>
                <path d="M7.4 11.2 10 13.8l4.7-5.4" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Mais de 14 anos de atuação em direito empresarial
            </li>
            <li>
              <svg viewBox="0 0 22 22" aria-hidden="true" focusable="false">
                <circle cx="11" cy="11" r="8.4" fill="none" stroke="currentColor" stroke-width="1.3"/>
                <path d="M7.4 11.2 10 13.8l4.7-5.4" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Uma equipe multidisciplinar
            </li>
            <li>
              <svg viewBox="0 0 22 22" aria-hidden="true" focusable="false">
                <circle cx="11" cy="11" r="8.4" fill="none" stroke="currentColor" stroke-width="1.3"/>
                <path d="M7.4 11.2 10 13.8l4.7-5.4" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              Atendimento presencial no Cariri e online em todo o Brasil
            </li>
          </ul>

          <div class="duo__story">
            <article class="marco">
              <span class="marco__label">Fundação</span>
              <h3 class="marco__title">O início de uma trajetória</h3>
              <p class="marco__text">O escritório inicia sua atuação com o propósito de construir soluções jurídicas personalizadas, próximas e tecnicamente qualificadas.</p>
            </article>
            <article class="marco">
              <span class="marco__label">2018</span>
              <h3 class="marco__title">Prêmio CDL Joazeiro Empresarial</h3>
              <p class="marco__text">Reconhecimento da trajetória e da atuação junto ao ambiente empresarial da região.</p>
            </article>
            <article class="marco">
              <span class="marco__label">2019</span>
              <h3 class="marco__title">Participação na FENALAW</h3>
              <p class="marco__text">Presença em um dos principais eventos jurídicos da América Latina.</p>
            </article>
            <article class="marco">
              <span class="marco__label">Hoje</span>
              <h3 class="marco__title">Uma equipe multidisciplinar</h3>
              <p class="marco__text">Preparada para atender clientes presencialmente no Cariri e online em todo o Brasil.</p>
            </article>
          </div>

          <a class="btn btn--ink btn--lg duo__cta" href="#agendar">
            Iniciar contato
            <svg class="btn__arrow" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
              <path d="M2.5 8h11M9.5 4l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>

        </div>
      </div>


    </div>
  </section>

  <!-- Avaliações reais do perfil do Google, transcritas literalmente: grafia,
       pontuação, quebras de linha e emoji são de quem escreveu, e não foram
       corrigidos. Editar as palavras de um cliente é falsear o depoimento.
       Faltam quatro das dez pedidas — ao acrescentar, copiar a estrutura de um
       card e ajustar data-nota e o aria-label se a nota não for cinco.
       NÃO inventar depoimento, nome ou nota. -->
  <section class="reviews" id="avaliacoes" aria-labelledby="avaliacoes-titulo">
    <div class="reviews__inner">

      <header class="reviews__head">
        <h2 class="reviews__title" id="avaliacoes-titulo" data-reveal-scroll>
          A confiança <span>de quem já caminhou conosco</span>
        </h2>

        <p class="reviews__stat" data-reveal-scroll>
          <span class="reviews__stars" role="img" aria-label="Nota cinco de cinco">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
          </span>
          <b class="reviews__score">5,0</b>
          <span class="reviews__sep" aria-hidden="true"></span>
          <span>267 avaliações no Google</span>
        </p>
      </header>

      <div class="reviews__body">

        <aside class="reviews__aside" data-reveal-scroll>
          <span class="reviews__quote" aria-hidden="true">&ldquo;</span>
          <!-- As quebras são autorais: na coluna estreita o texto corrido
               partiria em "Avaliações de / clientes no / Google Meu". Cada
               linha aqui é uma unidade de sentido. No telefone a coluna é
               larga e o CSS desliga as quebras. -->
          <p class="reviews__label">Avaliações <br>de clientes <br>no Google <br>Meu Negócio</p>

          <div class="reviews__nav">
            <button class="reviews__arrow" type="button" data-scroll="prev" aria-controls="trilho-avaliacoes">
              <svg viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M10 2.5 4.5 8l5.5 5.5" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              <span class="u-sr">Avaliações anteriores</span>
            </button>
            <div class="reviews__progress" data-drag><span data-progress></span></div>
            <button class="reviews__arrow" type="button" data-scroll="next" aria-controls="trilho-avaliacoes">
              <svg viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M6 2.5 11.5 8 6 13.5" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
              <span class="u-sr">Próximas avaliações</span>
            </button>
          </div>
        </aside>

        <ul class="reviews__track" id="trilho-avaliacoes" data-track tabindex="0" aria-label="Avaliações de clientes">
          <li class="review" data-reveal-scroll>
            <div class="review__bubble">
              <p class="review__text">Fomos atendidos pela advogada Wyllyara e também pelo Judá, que junto com todo o escritório nos acolheram com muita atenção e profissionalismo. Minha mãe foi vítima de um golpe bancário de mais de R$ 10 mil, e eles não mediram esforços para nos ajudar. Sempre prestativos, claros nas orientações e comprometidos, conduziram o processo até conseguirmos recuperar o valor perdido. Somos muito gratos pelo excelente trabalho e pelo cuidado com que fomos tratados. Recomendo de olhos fechados!</p>
              <span class="review__stars" role="img" aria-label="Nota cinco de cinco estrelas" data-nota="5">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
              </span>
            </div>
            <div class="review__author">
              <span class="review__avatar" aria-hidden="true">
                <svg viewBox="0 0 24 24" focusable="false"><circle cx="12" cy="9" r="3.4" fill="none" stroke="currentColor" stroke-width="1.4"/><path d="M5.6 19.3c.7-3.3 3.3-5 6.4-5s5.7 1.7 6.4 5" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
              </span>
              <span class="review__who">
                <span class="review__name">Marcsuel Silva</span>
              </span>
            </div>
          </li>
          <li class="review" data-reveal-scroll>
            <div class="review__bubble">
              <p class="review__text">Atendimento excelente, de qualidade são muito claros, objetivos, e profissionais<br>
                Até o momento só tenho a agradecer essa equipe que tenho ctz foi Deus quem preparou eles na minha vida<br>
                Super recomendo eles atendem o Brasil todo pra terem uma ideia sou de São Paulo capital</p>
              <span class="review__stars" role="img" aria-label="Nota cinco de cinco estrelas" data-nota="5">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
              </span>
            </div>
            <div class="review__author">
              <span class="review__avatar" aria-hidden="true">
                <svg viewBox="0 0 24 24" focusable="false"><circle cx="12" cy="9" r="3.4" fill="none" stroke="currentColor" stroke-width="1.4"/><path d="M5.6 19.3c.7-3.3 3.3-5 6.4-5s5.7 1.7 6.4 5" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
              </span>
              <span class="review__who">
                <span class="review__name">Rosana Santos</span>
              </span>
            </div>
          </li>
          <li class="review" data-reveal-scroll>
            <div class="review__bubble">
              <p class="review__text">Só tenho agradecer primeiramente a Deus e Segundo ao trabalho de vocês quê trabalha muito bem nos traz uma segurança e uma cinceridade muito clara e Objetiva são poucos quê trabalha da forma correta como vocês mais uma vez eu quero deixar O meu agradecimento 🙏🏻 e quem tiver alguma causa quê não está sendo resolvida entre em contato com a recepcionista Karol e a Dr Pryscila quê elas vão te atender super bem com muito amor e carinho e acima disso tudo muito esforço e dedicação eu recomendo por isso estou deixando essas 5 estrelas pq eles(a) realmente merecem Deus Abençõe grandemente!!!!❤️😍🥰🙏🏻🤗</p>
              <span class="review__stars" role="img" aria-label="Nota cinco de cinco estrelas" data-nota="5">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
              </span>
            </div>
            <div class="review__author">
              <span class="review__avatar" aria-hidden="true">
                <svg viewBox="0 0 24 24" focusable="false"><circle cx="12" cy="9" r="3.4" fill="none" stroke="currentColor" stroke-width="1.4"/><path d="M5.6 19.3c.7-3.3 3.3-5 6.4-5s5.7 1.7 6.4 5" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
              </span>
              <span class="review__who">
                <span class="review__name">Beatriz Bezerra</span>
              </span>
            </div>
          </li>
          <li class="review" data-reveal-scroll>
            <div class="review__bubble">
              <p class="review__text">Escritório de excelência, com profissionais competentes, humanos e sensíveis, características fundamentais para nos ajudar a solucionar nossas questões que envolvam a justiça.<br>
                Um dos pontos principais que encontrei, ao precisar dos serviços do escritório Morais Borges Advocacia foi a maneira como fui acolhida e tive minha demanda ouvida com atenção e cuidado. Depois disso, me chamou a atenção a celeridade e o zelo dos profissionais, sempre prontos a tirar todas as minhas dúvidas.<br>
                Estão de parabéns. Recomendo sem pestanejar.</p>
              <span class="review__stars" role="img" aria-label="Nota cinco de cinco estrelas" data-nota="5">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
              </span>
            </div>
            <div class="review__author">
              <span class="review__avatar" aria-hidden="true">
                <svg viewBox="0 0 24 24" focusable="false"><circle cx="12" cy="9" r="3.4" fill="none" stroke="currentColor" stroke-width="1.4"/><path d="M5.6 19.3c.7-3.3 3.3-5 6.4-5s5.7 1.7 6.4 5" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
              </span>
              <span class="review__who">
                <span class="review__name">Sammyra Santana</span>
              </span>
            </div>
          </li>
          <li class="review" data-reveal-scroll>
            <div class="review__bubble">
              <p class="review__text">O advogado João Filho e sua equipe tem zelo e compromisso com o processo do cliente. Conseguem humanizar as relações e abraçam a causa mostrando o interesse pela totalidade dos fatos sem desconsiderar a carga emocional do cliente. Assumiu meu processo com muita humanização, prestou e presta o melhor serviço, buscando sempre a melhor opção. De uma receptividade ímpar acolhe e caminha sempre junto, sem dúvida alguma é o melhor escritório de advocacia da região.</p>
              <span class="review__stars" role="img" aria-label="Nota cinco de cinco estrelas" data-nota="5">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
              </span>
            </div>
            <div class="review__author">
              <span class="review__avatar" aria-hidden="true">
                <svg viewBox="0 0 24 24" focusable="false"><circle cx="12" cy="9" r="3.4" fill="none" stroke="currentColor" stroke-width="1.4"/><path d="M5.6 19.3c.7-3.3 3.3-5 6.4-5s5.7 1.7 6.4 5" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
              </span>
              <span class="review__who">
                <span class="review__name">Amanda Alves</span>
              </span>
            </div>
          </li>
          <li class="review" data-reveal-scroll>
            <div class="review__bubble">
              <p class="review__text">Atendimento exemplar, com profissionais de alto padrão, trabalhando de maneira responsável, justa e honrosa. O serviço prestado por vocês ajudam a nossa sociedade a transformar conhecimento em justiça, desafios em vitórias e, é claro, direitos em realidade! Parabéns a todos que compõem a Morais Borges Advocacia!</p>
              <span class="review__stars" role="img" aria-label="Nota cinco de cinco estrelas" data-nota="5">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.1l2.7 5.47 6.03.88-4.36 4.25 1.03 6.01L12 16.87l-5.4 2.84 1.03-6.01L3.27 9.45l6.03-.88z" fill="currentColor"/></svg>
              </span>
            </div>
            <div class="review__author">
              <span class="review__avatar" aria-hidden="true">
                <svg viewBox="0 0 24 24" focusable="false"><circle cx="12" cy="9" r="3.4" fill="none" stroke="currentColor" stroke-width="1.4"/><path d="M5.6 19.3c.7-3.3 3.3-5 6.4-5s5.7 1.7 6.4 5" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
              </span>
              <span class="review__who">
                <span class="review__name">Yuri Bezerra Rodrigues Martins</span>
              </span>
            </div>
          </li>
        </ul>

      </div>


    </div>
  </section>


  <!-- O botão abre o WhatsApp do escritório: 55 88 99247-1664. O link é o que
       o próprio WhatsApp gera, com os parâmetros dele. `text` está vazio de
       propósito — a conversa abre sem mensagem pronta. Para sugerir uma,
       basta preencher `text=` com o texto já codificado para URL. -->
  <section class="contact" id="agendar" aria-labelledby="agendar-titulo">
    <div class="contact__inner">

      <h2 class="contact__title" id="agendar-titulo" data-reveal-scroll>
        Entenda os seus direitos com quem domina o assunto.
      </h2>

      <p class="contact__text" data-reveal-scroll>
        Fale com a Morais Borges e explique o que você precisa. Nossa equipe
        analisará seu cenário para direcionar o atendimento ideal.
      </p>

      <a class="btn btn--ink btn--lg contact__cta" data-reveal-scroll
         href="<?php echo esc_url( morais_whatsapp() ); ?>"
         target="_blank" rel="noopener">
        Fale com a nossa equipe
        <svg class="btn__arrow" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
          <path d="M2.5 8h11M9.5 4l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>


      <img class="contact__mark" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/logo-morais-borges.webp' ) ); ?>" alt=""
           width="856" height="143" loading="lazy" decoding="async">

    </div>
  </section>

</main>

<?php wp_footer(); ?>
</body>
</html>
