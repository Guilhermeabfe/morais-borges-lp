<?php
/**
 * Listagem de artigos.
 *
 * O WordPress usa este arquivo para a página de posts definida em
 * Configurações → Leitura.
 *
 * O desenho aprovado agrupa os artigos por ano, com o mais recente ocupando
 * uma faixa larga sozinho no topo. O agrupamento é feito aqui, percorrendo a
 * consulta uma vez e abrindo uma seção nova toda vez que o ano muda — não há
 * consulta por ano, que seria uma ida ao banco por grupo.
 *
 * @package MoraisBorges
 */

get_header();
?>

<main id="conteudo" class="blog">

	<header class="blog__head">
		<p class="blog__eyebrow" data-reveal><?php esc_html_e( 'Notícias', 'morais-borges' ); ?></p>
		<h1 class="blog__title" data-reveal>
			<?php esc_html_e( 'O que muda no direito de quem', 'morais-borges' ); ?>
			<span><?php esc_html_e( 'decide com o patrimônio em jogo.', 'morais-borges' ); ?></span>
		</h1>
		<p class="blog__lede" data-reveal>
			<?php esc_html_e( 'Acompanhamos as mudanças em direito tributário e empresarial e escrevemos sobre o que elas significam na prática — não sobre o que dizem na lei.', 'morais-borges' ); ?>
		</p>
	</header>

	<?php if ( have_posts() ) : ?>

		<?php
		$primeiro   = true;
		$ano_atual  = null;
		$lista_viva = false; // Há um <ul> aberto esperando fechamento?

		while ( have_posts() ) :
			the_post();

			$ano = (int) get_the_date( 'Y' );

			/*
			 * O primeiro artigo da consulta é o destaque: seção própria,
			 * rótulo "Mais recente" e um card só, na largura inteira.
			 */
			if ( $primeiro ) {
				echo '<section class="grupo" aria-labelledby="grupo-recente">';
				echo '<div class="grupo__head">';
				echo '<h2 class="grupo__titulo" id="grupo-recente">' . esc_html__( 'Mais recente', 'morais-borges' ) . '</h2>';
				echo '<span class="grupo__rule" aria-hidden="true"></span>';
				echo '</div>';
				echo '<ul class="cards cards--destaque">';
				$lista_viva = true;
			} elseif ( $ano !== $ano_atual ) {
				// Mudou o ano: fecha o grupo anterior e abre o novo.
				if ( $lista_viva ) {
					echo '</ul></section>';
				}
				printf(
					'<section class="grupo" aria-labelledby="grupo-%1$d"><div class="grupo__head"><h2 class="grupo__titulo" id="grupo-%1$d">%1$d</h2><span class="grupo__rule" aria-hidden="true"></span></div><ul class="cards">',
					$ano
				);
				$lista_viva = true;
			}

			get_template_part( 'template-parts/card', null, array( 'destaque' => $primeiro ) );

			if ( $primeiro ) {
				// O destaque fecha a própria seção: o ano dele recomeça no grupo seguinte.
				echo '</ul></section>';
				$lista_viva = false;
				$primeiro   = false;
				$ano_atual  = null;
			} else {
				$ano_atual = $ano;
			}

		endwhile;

		if ( $lista_viva ) {
			echo '</ul></section>';
		}
		?>

		<?php
		/*
		 * A paginação só aparece se houver mais de uma página. Com a listagem
		 * configurada para trazer todos os artigos, ela nunca aparece — fica
		 * aqui para o caso de o limite voltar em Configurações → Leitura.
		 */
		the_posts_pagination(
			array(
				'mid_size'           => 1,
				'prev_text'          => esc_html__( 'Anteriores', 'morais-borges' ),
				'next_text'          => esc_html__( 'Próximos', 'morais-borges' ),
				'screen_reader_text' => esc_html__( 'Navegação entre páginas', 'morais-borges' ),
				'class'              => 'paginacao',
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
