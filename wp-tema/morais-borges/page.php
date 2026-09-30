<?php
/**
 * Página comum.
 *
 * Serve as páginas do site que não são a inicial nem a listagem de artigos —
 * política de privacidade, páginas institucionais, e qualquer página que já
 * exista no WordPress.
 *
 * Usa a mesma tipografia de leitura do artigo (.post__corpo), porque é o
 * mesmo problema: texto corrido para ser lido do começo ao fim.
 *
 * @package MoraisBorges
 */

get_header();
?>

<main id="conteudo" class="post">

	<?php
	while ( have_posts() ) :
		the_post();
		?>

		<article <?php post_class( 'post__artigo' ); ?>>

			<header class="post__head">
				<h1 class="post__title" data-reveal><?php the_title(); ?></h1>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<figure class="post__figura" data-reveal>
					<?php the_post_thumbnail( 'large', array( 'class' => 'post__foto', 'alt' => '', 'decoding' => 'async' ) ); ?>
				</figure>
			<?php endif; ?>

			<div class="post__corpo" data-reveal>
				<?php the_content(); ?>
			</div>

			<?php
			wp_link_pages(
				array(
					'before'    => '<nav class="post__paginas" aria-label="' . esc_attr__( 'Páginas', 'morais-borges' ) . '"><span>' . esc_html__( 'Continua em:', 'morais-borges' ) . '</span>',
					'after'     => '</nav>',
					'separator' => '',
				)
			);
			?>

		</article>

		<?php
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
		?>

	<?php endwhile; ?>

</main>

<?php
get_footer();
