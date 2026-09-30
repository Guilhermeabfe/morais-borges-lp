<?php
/**
 * Resultados de busca.
 *
 * @package MoraisBorges
 */

get_header();
?>

<main id="conteudo" class="blog">

	<header class="blog__head">
		<p class="blog__eyebrow" data-reveal><?php esc_html_e( 'Busca', 'morais-borges' ); ?></p>
		<h1 class="blog__title" data-reveal>
			<?php
			printf(
				/* translators: %s: termo buscado. */
				esc_html__( 'Resultados para %s', 'morais-borges' ),
				'<span>' . esc_html( get_search_query() ) . '</span>'
			);
			?>
		</h1>
		<p class="blog__lede" data-reveal>
			<?php
			$total = (int) $GLOBALS['wp_query']->found_posts;
			printf(
				/* translators: %d: número de artigos encontrados. */
				esc_html( _n( '%d artigo encontrado.', '%d artigos encontrados.', $total, 'morais-borges' ) ),
				$total
			);
			?>
		</p>
		<?php get_search_form(); ?>
	</header>

	<?php if ( have_posts() ) : ?>
		<section class="grupo">
			<ul class="cards">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/card' );
				endwhile;
				?>
			</ul>
		</section>

		<?php
		the_posts_pagination(
			array(
				'mid_size'  => 1,
				'prev_text' => esc_html__( 'Anteriores', 'morais-borges' ),
				'next_text' => esc_html__( 'Próximos', 'morais-borges' ),
				'class'     => 'paginacao',
			)
		);
		?>
	<?php else : ?>
		<section class="grupo">
			<p class="blog__lede"><?php esc_html_e( 'Nada encontrado com esse termo. Tente outra palavra, ou veja todos os artigos.', 'morais-borges' ); ?></p>
			<p><a class="btn btn--ghost btn--lg" href="<?php echo esc_url( morais_url_blog() ); ?>"><?php esc_html_e( 'Ver todos os artigos', 'morais-borges' ); ?></a></p>
		</section>
	<?php endif; ?>

</main>

<?php
get_footer();
