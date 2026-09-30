<?php
/**
 * Página de um artigo.
 *
 * É este arquivo que passa a exibir os artigos que já existem no WordPress.
 * Nada precisa ser migrado: o texto, a data, o autor e a imagem destacada
 * continuam onde sempre estiveram, e aqui apenas ganham o desenho novo.
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
				<a class="post__voltar" href="<?php echo esc_url( morais_url_blog() ); ?>">
					<svg viewBox="0 0 16 16" aria-hidden="true" focusable="false"><path d="M10 2.5 4.5 8l5.5 5.5" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
					<?php esc_html_e( 'Todos os artigos', 'morais-borges' ); ?>
				</a>

				<p class="post__data" data-reveal>
					<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'j \d\e F \d\e Y' ) ); ?></time>
				</p>

				<h1 class="post__title" data-reveal><?php the_title(); ?></h1>

				<?php if ( has_excerpt() ) : ?>
					<p class="post__lede" data-reveal><?php echo esc_html( get_the_excerpt() ); ?></p>
				<?php endif; ?>

				<p class="post__assinatura" data-reveal>
					<?php
					printf(
						/* translators: %s: nome do autor do artigo. */
						esc_html__( 'Por %s', 'morais-borges' ),
						'<b>' . esc_html( get_the_author() ) . '</b>'
					);
					?>
				</p>
			</header>

			<?php if ( has_post_thumbnail() ) : ?>
				<figure class="post__figura" data-reveal>
					<?php
					the_post_thumbnail(
						'large',
						array(
							'class'    => 'post__foto',
							'alt'      => '',
							'decoding' => 'async',
						)
					);
					?>
					<?php if ( wp_get_attachment_caption( get_post_thumbnail_id() ) ) : ?>
						<figcaption class="post__legenda"><?php echo esc_html( wp_get_attachment_caption( get_post_thumbnail_id() ) ); ?></figcaption>
					<?php endif; ?>
				</figure>
			<?php endif; ?>

			<div class="post__corpo" data-reveal>
				<?php the_content(); ?>
			</div>

			<?php
			// Divisão de artigos longos em páginas, quando o autor usa o bloco
			// "Quebra de página". Sem ele, nada é impresso.
			wp_link_pages(
				array(
					'before'   => '<nav class="post__paginas" aria-label="' . esc_attr__( 'Páginas deste artigo', 'morais-borges' ) . '"><span>' . esc_html__( 'Continua em:', 'morais-borges' ) . '</span>',
					'after'    => '</nav>',
					'separator' => '',
				)
			);
			?>

		</article>

		<aside class="post__cta">
			<h2 class="post__cta-titulo"><?php esc_html_e( 'Este assunto afeta você ou a sua empresa?', 'morais-borges' ); ?></h2>
			<p class="post__cta-texto">
				<?php esc_html_e( 'Fale com a Morais Borges e explique o que você precisa. Nossa equipe analisará seu cenário para direcionar o atendimento ideal.', 'morais-borges' ); ?>
			</p>
			<a class="btn btn--ink btn--lg" href="<?php echo esc_url( morais_whatsapp() ); ?>" target="_blank" rel="noopener">
				<?php esc_html_e( 'Fale com a nossa equipe', 'morais-borges' ); ?>
				<?php morais_seta(); ?>
			</a>
		</aside>

		<?php
		// Artigo seguinte e anterior, quando existem.
		$anterior = get_previous_post();
		$proximo  = get_next_post();
		if ( $anterior || $proximo ) :
			?>
			<nav class="post__vizinhos" aria-label="<?php esc_attr_e( 'Outros artigos', 'morais-borges' ); ?>">
				<?php if ( $anterior ) : ?>
					<a class="vizinho vizinho--anterior" href="<?php echo esc_url( get_permalink( $anterior ) ); ?>" rel="prev">
						<span class="vizinho__rotulo"><?php esc_html_e( 'Artigo anterior', 'morais-borges' ); ?></span>
						<span class="vizinho__titulo"><?php echo esc_html( get_the_title( $anterior ) ); ?></span>
					</a>
				<?php endif; ?>
				<?php if ( $proximo ) : ?>
					<a class="vizinho vizinho--proximo" href="<?php echo esc_url( get_permalink( $proximo ) ); ?>" rel="next">
						<span class="vizinho__rotulo"><?php esc_html_e( 'Próximo artigo', 'morais-borges' ); ?></span>
						<span class="vizinho__titulo"><?php echo esc_html( get_the_title( $proximo ) ); ?></span>
					</a>
				<?php endif; ?>
			</nav>
		<?php endif; ?>

		<?php
		// Os comentários só aparecem onde estiverem abertos ou onde já houver
		// comentário aprovado. Num artigo sem nenhum dos dois, nada é impresso.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
		?>

	<?php endwhile; ?>

</main>

<?php
get_footer();
