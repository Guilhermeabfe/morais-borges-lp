<?php
/**
 * Um card da listagem de artigos.
 *
 * Usado pela home dos posts, pelos arquivos de categoria e pela busca, para
 * que o card exista num lugar só.
 *
 * O card inteiro é um link: por isso o conteúdo interno usa <span> e <time>,
 * e não <div> e <h3>. Um bloco dentro de <a> é marcação inválida, e o
 * navegador quebra o link ao corrigi-la.
 *
 * @package MoraisBorges
 *
 * @var array $args {
 *     @type bool $destaque Se é o card largo do topo.
 * }
 */

$destaque = ! empty( $args['destaque'] );
$tamanho  = $destaque ? 'morais-destaque' : 'morais-card';
?>

<li class="card" data-reveal>
	<a class="card__link" href="<?php the_permalink(); ?>">
		<span class="card__foto">
			<?php
			if ( has_post_thumbnail() ) {
				the_post_thumbnail(
					$tamanho,
					array(
						// O alt fica vazio porque o título vem logo abaixo, dentro
						// do mesmo link: repeti-lo faria o leitor de tela anunciar
						// o artigo duas vezes.
						'alt'           => '',
						'loading'       => $destaque ? 'eager' : 'lazy',
						'decoding'      => 'async',
						'fetchpriority' => $destaque ? 'high' : 'auto',
					)
				);
			}
			// Sem imagem destacada, o próprio .card__foto é um campo de papel
			// com o monograma em marca d'água. Não há retângulo cinza.
			?>
		</span>
		<span class="card__corpo">
			<time class="card__data" datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date( 'j \d\e F \d\e Y' ) ); ?></time>
			<span class="card__titulo"><?php the_title(); ?></span>
			<span class="card__sub"><?php echo esc_html( morais_resumo( $destaque ? 200 : 160 ) ); ?></span>
		</span>
	</a>
</li>
