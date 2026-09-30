<?php
/**
 * Rodapé.
 *
 * A página inicial não usa este rodapé: ela termina na faixa de tinta, que já
 * é o fecho do documento. Aqui ele serve às páginas internas — listagem,
 * artigo, busca e erro.
 *
 * @package MoraisBorges
 */

?>

<footer class="rodape">
	<div class="rodape__inner">
		<img class="rodape__mark" src="<?php echo esc_url( get_theme_file_uri( 'assets/img/logo-morais-borges.webp' ) ); ?>" alt=""
		     width="856" height="143" loading="lazy" decoding="async">
		<p class="rodape__texto">
			<?php esc_html_e( 'Advocacia empresarial preventiva. Atendimento presencial no Cariri e online em todo o Brasil.', 'morais-borges' ); ?>
		</p>
		<a class="btn btn--ink btn--lg" href="<?php echo esc_url( morais_whatsapp() ); ?>" target="_blank" rel="noopener">
			<?php esc_html_e( 'Falar com nossa equipe', 'morais-borges' ); ?>
			<?php morais_seta(); ?>
		</a>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
