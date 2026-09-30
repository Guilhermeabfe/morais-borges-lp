<?php
/**
 * Morais Borges — funções do tema.
 *
 * Tudo o que o WordPress precisa saber sobre o tema mora aqui: o que ele
 * suporta, que arquivos carrega e os poucos auxiliares que os templates usam.
 *
 * O prefixo das funções é `morais_`, e não `mb_`: `mb_` é o prefixo das
 * funções de string multibyte do próprio PHP (mb_strlen, mb_substr), e
 * misturar os dois torna ilegível qual função é de quem.
 *
 * @package MoraisBorges
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Sem acesso direto ao arquivo.
}

define( 'MORAIS_VERSAO', '1.0.1' );

/**
 * Recursos do tema.
 */
function morais_suporte() {
	// O <title> passa a ser responsabilidade do WordPress: é o que permite ao
	// All in One SEO reescrevê-lo por página.
	add_theme_support( 'title-tag' );

	// Imagem destacada: é ela que aparece no card da listagem e no topo do artigo.
	add_theme_support( 'post-thumbnails' );

	// Marcação moderna nos formulários e comentários que o WordPress gera.
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );

	// O logotipo não é campo editável: o lockup tem proporção e recorte
	// próprios, e um upload arbitrário quebraria a barra flutuante.

	// Tamanhos usados pelos cards da listagem. O card comum é 2:1; o destaque
	// do topo é mais largo porque ocupa a linha inteira.
	add_image_size( 'morais-card', 640, 320, true );
	add_image_size( 'morais-destaque', 1200, 600, true );

	register_nav_menus(
		array(
			'principal' => __( 'Barra flutuante', 'morais-borges' ),
		)
	);
}
add_action( 'after_setup_theme', 'morais_suporte' );

/**
 * Folhas de estilo e script.
 *
 * A ordem importa: fonts.css declara as @font-face e precisa vir antes de
 * styles.css, que as usa. O style.css do tema entra por último e só carrega o
 * cabeçalho exigido pelo WordPress.
 */
function morais_recursos() {
	wp_enqueue_style(
		'morais-fontes',
		get_theme_file_uri( 'assets/css/fonts.css' ),
		array(),
		MORAIS_VERSAO
	);

	wp_enqueue_style(
		'morais-estilo',
		get_theme_file_uri( 'assets/css/styles.css' ),
		array( 'morais-fontes' ),
		MORAIS_VERSAO
	);

	// O que existe porque o site virou WordPress: paginação, comentários,
	// busca, navegação entre artigos e a marcação que o editor gera. Fica
	// separado para que styles.css continue idêntico ao do projeto.
	wp_enqueue_style(
		'morais-wordpress',
		get_theme_file_uri( 'assets/css/wordpress.css' ),
		array( 'morais-estilo' ),
		MORAIS_VERSAO
	);

	wp_enqueue_style(
		'morais-tema',
		get_stylesheet_uri(),
		array( 'morais-wordpress' ),
		MORAIS_VERSAO
	);

	wp_enqueue_script(
		'morais-principal',
		get_theme_file_uri( 'assets/js/main.js' ),
		array(),
		MORAIS_VERSAO,
		true // no rodapé: o conteúdo não depende dele para existir.
	);

	// Respostas aninhadas nos comentários, quando o post os tem abertos.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'morais_recursos' );

/**
 * Pré-carrega a fonte do título e declara os ícones.
 *
 * O primeiro texto que a página pinta é o título da hero. Sem o preload ele
 * espera o CSS descobrir a fonte, e o salto de fallback aparece.
 */
function morais_cabeca() {
	printf(
		'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n",
		esc_url( get_theme_file_uri( 'assets/fonts/archivo-0186fb75.woff2' ) )
	);
	printf(
		'<link rel="icon" href="%s" sizes="32x32">' . "\n",
		esc_url( get_theme_file_uri( 'assets/img/favicon-32.png' ) )
	);
	printf(
		'<link rel="apple-touch-icon" href="%s">' . "\n",
		esc_url( get_theme_file_uri( 'assets/img/favicon-180.png' ) )
	);
	echo '<meta name="theme-color" content="#ffffff">' . "\n";
}
add_action( 'wp_head', 'morais_cabeca', 1 );

/**
 * Remove os atalhos do Divi que ficaram gravados dentro dos artigos.
 *
 * Os artigos foram escritos num construtor anterior, o Divi, que guarda a
 * estrutura da página como atalhos dentro do próprio texto do post —
 * [et_pb_section], [et_pb_row], [et_pb_text] e afins. Enquanto o Divi estava
 * ativo ele os interpretava; sem ele, o WordPress imprime cada um como texto
 * cru, no meio do artigo.
 *
 * A limpeza é feita na exibição e NÃO no banco: o conteúdo original continua
 * gravado, intacto. Se um dia o Divi voltar, ou se este tema sair, os artigos
 * seguem como estavam. Remover este filtro desfaz tudo.
 *
 * O padrão casa só o que começa com `et_pb_`. Atalhos legítimos — galeria,
 * legenda, formulário — passam sem ser tocados. As aspas podem estar retas ou
 * curvas (o WordPress encurva as de um atalho que não processou), e o padrão
 * não depende delas: ele vai até o `]` que fecha.
 *
 * @param string $conteudo Texto do post.
 * @return string
 */
function morais_limpa_divi( $conteudo ) {
	if ( ! is_string( $conteudo ) || false === strpos( $conteudo, '[et_pb_' ) ) {
		return $conteudo;
	}
	return preg_replace( '/\[\/?et_pb_[a-z0-9_]*(?:[^\]]*)?\]/i', '', $conteudo );
}
// Prioridade 5: antes do wptexturize (10) e do do_shortcode (11), para pegar o
// conteúdo como está gravado, e não depois de o WordPress mexer nas aspas.
add_filter( 'the_content', 'morais_limpa_divi', 5 );
add_filter( 'the_excerpt', 'morais_limpa_divi', 5 );
add_filter( 'get_the_excerpt', 'morais_limpa_divi', 5 );

/**
 * Endereço de uma âncora da página inicial.
 *
 * Na própria home o link é só a âncora, e o navegador rola. Em qualquer outra
 * página ele precisa do endereço completo, senão aponta para uma seção que
 * não existe ali.
 *
 * @param string $ancora Âncora com o '#', por exemplo '#areas'.
 * @return string
 */
function morais_ancora( $ancora ) {
	if ( is_front_page() ) {
		return $ancora;
	}
	return home_url( '/' ) . $ancora;
}

/**
 * Endereço da listagem de artigos.
 *
 * Usa a página definida em Configurações → Leitura como "página de posts".
 * Sem ela, cai no endereço do próprio site, que é onde os posts aparecem.
 *
 * @return string
 */
function morais_url_blog() {
	$id = (int) get_option( 'page_for_posts' );
	if ( $id > 0 ) {
		return get_permalink( $id );
	}
	return home_url( '/' );
}

/**
 * Resumo curto para o card da listagem.
 *
 * Prefere o resumo escrito à mão; sem ele, corta o texto do post. O limite é
 * de caracteres e não de palavras porque o card tem altura definida no
 * desenho, e uma palavra longa a estoura.
 *
 * As funções mb_* dependem da extensão mbstring. Ela costuma estar presente,
 * mas não é garantida: sem ela o corte cai para as funções de byte, que
 * partiriam um caractere acentuado ao meio — por isso o texto só é cortado
 * quando mbstring existe.
 *
 * @param int $limite Número máximo de caracteres.
 * @return string
 */
function morais_resumo( $limite = 160 ) {
	// get_the_content() devolve o conteúdo cru, sem passar pelos filtros de
	// exibição — por isso a limpeza do Divi é chamada aqui de novo. Sem ela,
	// o resumo do card começaria com "[et_pb_section fb_built=…".
	$texto = has_excerpt() ? get_the_excerpt() : wp_strip_all_tags( morais_limpa_divi( get_the_content() ) );
	$texto = trim( preg_replace( '/\s+/u', ' ', $texto ) );

	if ( ! function_exists( 'mb_strlen' ) ) {
		return wp_html_excerpt( $texto, $limite, '…' );
	}

	if ( mb_strlen( $texto ) <= $limite ) {
		return $texto;
	}

	$corte  = mb_substr( $texto, 0, $limite );
	$espaco = mb_strrpos( $corte, ' ' );
	if ( false !== $espaco ) {
		$corte = mb_substr( $corte, 0, $espaco );
	}

	return rtrim( $corte, ",.;:–—- " ) . '…';
}

/**
 * A seta que acompanha os botões.
 *
 * Um único desenho, repetido em todos os templates. Está aqui para que mudar
 * a seta seja uma edição só.
 */
function morais_seta() {
	echo '<svg class="btn__arrow" viewBox="0 0 16 16" aria-hidden="true" focusable="false">'
		. '<path d="M2.5 8h11M9.5 4l4 4-4 4" fill="none" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round"/>'
		. '</svg>';
}

/**
 * O link do WhatsApp do escritório.
 *
 * Fica numa função só para que trocar o número seja uma edição só, e não uma
 * busca por todos os templates.
 *
 * @return string
 */
function morais_whatsapp() {
	return 'https://api.whatsapp.com/send/?phone=5588992471664&text&type=phone_number&app_absent=0';
}

/**
 * A listagem traz todos os artigos, sem paginar.
 *
 * O desenho aprovado agrupa os artigos por ano, do mais recente ao mais
 * antigo, e esse agrupamento só faz sentido se o ano inteiro estiver na
 * página: partido em dez por vez, um grupo começaria numa página e terminaria
 * na seguinte.
 *
 * As imagens dos cards carregam sob demanda (loading="lazy"), então o custo é
 * de marcação, não de rede. Se um dia a lista crescer a ponto de pesar, basta
 * remover este filtro: home.php já imprime a paginação quando ela existe.
 */
function morais_listagem_completa( $consulta ) {
	if ( is_admin() || ! $consulta->is_main_query() ) {
		return;
	}
	if ( $consulta->is_home() ) {
		$consulta->set( 'posts_per_page', -1 );
	}
}
add_action( 'pre_get_posts', 'morais_listagem_completa' );

/**
 * Comprimento do resumo automático do WordPress, em palavras.
 */
function morais_tamanho_resumo() {
	return 28;
}
add_filter( 'excerpt_length', 'morais_tamanho_resumo' );

/**
 * O corte do resumo é reticência, não "[...]".
 */
function morais_fim_resumo() {
	return '…';
}
add_filter( 'excerpt_more', 'morais_fim_resumo' );
