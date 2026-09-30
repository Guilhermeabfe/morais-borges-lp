<?php
/**
 * Cabeçalho: abertura do documento e a barra flutuante.
 *
 * A barra é a mesma em todas as páginas. Os itens do meio são âncoras da
 * página inicial, então passam por morais_ancora(): na home viram '#areas',
 * em qualquer outra página viram o endereço completo.
 *
 * @package MoraisBorges
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>

	<script>
		// A revelação não depende de main.js: se ele falhar, faltar ou for
		// bloqueado, o conteúdo ainda entra em vez de ficar num campo vazio.
		document.documentElement.classList.add("js");
		document.addEventListener("DOMContentLoaded", function () {
			requestAnimationFrame(function () {
				requestAnimationFrame(function () { document.body.classList.add("is-ready"); });
			});
		});
	</script>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="u-sr" href="#conteudo"><?php esc_html_e( 'Pular para o conteúdo', 'morais-borges' ); ?></a>

<header class="masthead" data-masthead>
	<div class="masthead__inner">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img class="brand__logo" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/logo-morais-borges.webp' ) ); ?>"
			     alt="<?php esc_attr_e( 'Morais Borges Advocacia — ir para o início', 'morais-borges' ); ?>"
			     width="856" height="143" fetchpriority="high" decoding="async">
		</a>

		<nav class="masthead__nav" aria-label="<?php esc_attr_e( 'Navegação principal', 'morais-borges' ); ?>">
			<ul>
				<li><a href="<?php echo esc_url( morais_ancora( '#topo' ) ); ?>"<?php echo is_front_page() ? ' aria-current="page"' : ''; ?>><?php esc_html_e( 'Início', 'morais-borges' ); ?></a></li>
				<li><a href="<?php echo esc_url( morais_ancora( '#escritorio' ) ); ?>"><?php esc_html_e( 'O Escritório', 'morais-borges' ); ?></a></li>
				<li><a href="<?php echo esc_url( morais_ancora( '#areas' ) ); ?>"><?php esc_html_e( 'Áreas de Atuação', 'morais-borges' ); ?></a></li>
				<li><a href="<?php echo esc_url( morais_url_blog() ); ?>"<?php echo ( is_home() || is_singular( 'post' ) || is_archive() ) ? ' aria-current="page"' : ''; ?>><?php esc_html_e( 'Blog', 'morais-borges' ); ?></a></li>
				<li><a href="<?php echo esc_url( morais_ancora( '#agendar' ) ); ?>"><?php esc_html_e( 'Contato', 'morais-borges' ); ?></a></li>
			</ul>
		</nav>

		<div class="masthead__actions">
			<a class="btn btn--ink btn--sm" href="<?php echo esc_url( morais_ancora( '#agendar' ) ); ?>">
				<?php esc_html_e( 'Falar com nossa equipe', 'morais-borges' ); ?>
				<?php morais_seta(); ?>
			</a>
			<button class="masthead__toggle" type="button" aria-expanded="false" aria-controls="menu-movel" data-menu-toggle>
				<span class="masthead__toggle-bars" aria-hidden="true"><i></i><i></i></span>
				<span class="u-sr"><?php esc_html_e( 'Abrir menu', 'morais-borges' ); ?></span>
			</button>
		</div>
	</div>

	<div class="mobile-menu" id="menu-movel" hidden data-mobile-menu>
		<ul>
			<li><a href="<?php echo esc_url( morais_ancora( '#topo' ) ); ?>"<?php echo is_front_page() ? ' aria-current="page"' : ''; ?>><?php esc_html_e( 'Início', 'morais-borges' ); ?></a></li>
			<li><a href="<?php echo esc_url( morais_ancora( '#escritorio' ) ); ?>"><?php esc_html_e( 'O Escritório', 'morais-borges' ); ?></a></li>
			<li><a href="<?php echo esc_url( morais_ancora( '#areas' ) ); ?>"><?php esc_html_e( 'Áreas de Atuação', 'morais-borges' ); ?></a></li>
			<li><a href="<?php echo esc_url( morais_url_blog() ); ?>"><?php esc_html_e( 'Blog', 'morais-borges' ); ?></a></li>
			<li><a href="<?php echo esc_url( morais_ancora( '#agendar' ) ); ?>"><?php esc_html_e( 'Contato', 'morais-borges' ); ?></a></li>
		</ul>
		<a class="btn btn--ink btn--block" href="<?php echo esc_url( morais_ancora( '#agendar' ) ); ?>"><?php esc_html_e( 'Falar com nossa equipe', 'morais-borges' ); ?></a>
	</div>
</header>
