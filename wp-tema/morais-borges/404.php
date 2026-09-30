<?php
/**
 * Endereço que não existe.
 *
 * O site tem mais de cem artigos e trocou de estrutura: endereço velho em
 * favorito ou em link de terceiro vai cair aqui. Por isso a página oferece
 * saída — a listagem e a busca —, e não só um aviso.
 *
 * @package MoraisBorges
 */

get_header();
?>

<main id="conteudo" class="blog">

	<header class="blog__head">
		<p class="blog__eyebrow" data-reveal><?php esc_html_e( 'Erro 404', 'morais-borges' ); ?></p>
		<h1 class="blog__title" data-reveal>
			<?php esc_html_e( 'Esta página não existe', 'morais-borges' ); ?>
			<span><?php esc_html_e( 'ou mudou de endereço.', 'morais-borges' ); ?></span>
		</h1>
		<p class="blog__lede" data-reveal>
			<?php esc_html_e( 'Procure pelo assunto ou volte para a lista de artigos. Se você chegou por um link nosso, avise a nossa equipe — vamos corrigir.', 'morais-borges' ); ?>
		</p>
		<?php get_search_form(); ?>
	</header>

	<section class="grupo">
		<div class="grupo__head">
			<h2 class="grupo__titulo" id="grupo-recentes"><?php esc_html_e( 'Artigos recentes', 'morais-borges' ); ?></h2>
			<span class="grupo__rule" aria-hidden="true"></span>
		</div>
		<ul class="cards">
			<?php
			$recentes = new WP_Query(
				array(
					'posts_per_page'      => 3,
					'ignore_sticky_posts' => true,
					'no_found_rows'       => true,
				)
			);
			while ( $recentes->have_posts() ) :
				$recentes->the_post();
				get_template_part( 'template-parts/card' );
			endwhile;
			wp_reset_postdata();
			?>
		</ul>
	</section>

</main>

<?php
get_footer();
