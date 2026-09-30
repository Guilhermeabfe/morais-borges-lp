<?php
/**
 * Arquivos: categoria, tag, autor e data.
 *
 * Mesma grade de cards da listagem, sem o agrupamento por ano — aqui o recorte
 * já é o próprio filtro, e um segundo agrupamento competiria com ele.
 *
 * @package MoraisBorges
 */

get_header();
?>

<main id="conteudo" class="blog">

	<header class="blog__head">
		<p class="blog__eyebrow" data-reveal><?php esc_html_e( 'Artigos', 'morais-borges' ); ?></p>
		<h1 class="blog__title" data-reveal><?php the_archive_title(); ?></h1>
		<?php if ( get_the_archive_description() ) : ?>
			<div class="blog__lede" data-reveal><?php the_archive_description(); ?></div>
		<?php endif; ?>
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
			<p class="blog__lede"><?php esc_html_e( 'Não há artigos neste recorte.', 'morais-borges' ); ?></p>
		</section>
	<?php endif; ?>

</main>

<?php
get_footer();
