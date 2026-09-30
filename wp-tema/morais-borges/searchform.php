<?php
/**
 * Campo de busca.
 *
 * Um campo e um botão na mesma pílula, com os mesmos tokens do resto do
 * sistema. O rótulo é lido por leitor de tela e não ocupa espaço na tela.
 *
 * @package MoraisBorges
 */

?>
<form role="search" method="get" class="busca" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label class="u-sr" for="busca-campo"><?php esc_html_e( 'Buscar nos artigos', 'morais-borges' ); ?></label>
	<input class="busca__campo" id="busca-campo" type="search" name="s"
	       value="<?php echo esc_attr( get_search_query() ); ?>"
	       placeholder="<?php esc_attr_e( 'Buscar nos artigos', 'morais-borges' ); ?>">
	<button class="busca__botao" type="submit">
		<?php esc_html_e( 'Buscar', 'morais-borges' ); ?>
	</button>
</form>
