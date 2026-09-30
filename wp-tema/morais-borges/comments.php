<?php
/**
 * Comentários de um artigo.
 *
 * O desenho original não previa comentários — eles vieram do site que já
 * existia. Em vez de inventar um componente novo, esta lista reusa a gramática
 * de balão das avaliações: o texto num balão de papel, a assinatura fora dele.
 * Quem assina não faz parte da mensagem.
 *
 * @package MoraisBorges
 */

if ( post_password_required() ) {
	return;
}
?>

<section id="comentarios" class="comentarios" aria-labelledby="comentarios-titulo">
	<div class="comentarios__inner">

		<?php if ( have_comments() ) : ?>
			<h2 class="comentarios__titulo" id="comentarios-titulo">
				<?php
				$total = (int) get_comments_number();
				printf(
					/* translators: %d: número de comentários. */
					esc_html( _n( '%d comentário', '%d comentários', $total, 'morais-borges' ) ),
					$total
				);
				?>
			</h2>

			<ol class="comentarios__lista">
				<?php
				wp_list_comments(
					array(
						'style'       => 'ol',
						'short_ping'  => true,
						'avatar_size' => 30,
					)
				);
				?>
			</ol>

			<?php
			the_comments_pagination(
				array(
					'mid_size'  => 1,
					'prev_text' => esc_html__( 'Anteriores', 'morais-borges' ),
					'next_text' => esc_html__( 'Próximos', 'morais-borges' ),
					'class'     => 'paginacao',
				)
			);
			?>
		<?php endif; ?>

		<?php
		if ( ! comments_open() && get_comments_number() ) :
			?>
			<p class="comentarios__fechado"><?php esc_html_e( 'Os comentários deste artigo estão encerrados.', 'morais-borges' ); ?></p>
			<?php
		endif;

		comment_form(
			array(
				'class_form'         => 'comentarios__form',
				'class_submit'       => 'btn btn--ink btn--lg',
				'title_reply'        => esc_html__( 'Deixe um comentário', 'morais-borges' ),
				'title_reply_before' => '<h2 class="comentarios__titulo">',
				'title_reply_after'  => '</h2>',
				'comment_notes_before' => '<p class="comentarios__aviso">' . esc_html__( 'Seu e-mail não será publicado. Este espaço é para comentários sobre o artigo — para tratar do seu caso, fale com a nossa equipe.', 'morais-borges' ) . '</p>',
			)
		);
		?>

	</div>
</section>
