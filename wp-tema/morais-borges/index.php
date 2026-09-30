<?php
/**
 * Template de último recurso.
 *
 * O WordPress exige que todo tema tenha um index.php: é o arquivo que ele usa
 * quando nenhum outro se aplica. Na prática quase nunca é chamado, porque
 * home.php, single.php, page.php, archive.php, search.php e 404.php cobrem os
 * casos reais. Ele existe para que nenhum endereço do site caia no vazio.
 *
 * @package MoraisBorges
 */

get_header();
?>

<main id="conteudo" class="blog">

	<header class="blog__head">
		<h1 class="blog__title" data-reveal><?php esc_html_e( 'Artigos', 'morais-borges' ); ?></h1>
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
			<p class="blog__lede"><?php esc_html_e( 'Ainda não há artigos publicados.', 'morais-borges' ); ?></p>
		</section>
	<?php endif; ?>

</main>

<?php
get_footer();
