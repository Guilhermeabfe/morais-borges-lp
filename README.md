# Morais Borges — landing page

Página única para o escritório de advocacia empresarial Morais Borges. HTML,
CSS e JavaScript estáticos: sem framework, sem build, sem dependências. Abrir o
`index.html` num servidor estático é tudo o que ela precisa para rodar.

## Rodar localmente

```bash
python3 -m http.server 8777
```

E abrir <http://127.0.0.1:8777>. Um servidor é necessário porque as fontes são
carregadas por `@font-face`, e o protocolo `file://` as bloqueia.

## Como está organizada

```
index.html              a página inteira
assets/css/styles.css   todo o estilo, com os tokens no :root
assets/css/fonts.css    @font-face das fontes locais
assets/fonts/           Archivo, variável, 6 subconjuntos
assets/img/             fotografias do advogado
assets/js/main.js       comportamento: entrada, carrossel, traço, formulário
```

Documentação do projeto:

- [DESIGN.md](DESIGN.md) — o sistema de design: paleta, escala tipográfica,
  regras nomeadas e componentes.
- [PRODUCT.md](PRODUCT.md) — o que é fato confirmado pelo cliente e o que ainda
  é provisório. Vale ler antes de escrever qualquer número na página.
- [FORMULARIO.md](FORMULARIO.md) — como ligar o formulário de contato a uma
  planilha do Google Sheets.

## As seções

1. **Hero** — o lockup vertical da marca sobre papel iluminado, com arcos
   concêntricos saindo do monograma; título em três linhas, subtítulo, selo
   de prova e o botão de ação. O grão do papel é gerado em CSS.
2. **Áreas de atuação** — faixa de tinta azul, cinco cartões numa progressão
   de luz, o quinto invertido para papel cheio.
3. **Quem conduz o trabalho** — foto no escritório e ficha com a trajetória.
4. **Avaliações** — carrossel horizontal com barra arrastável, em papel.
5. **Contato** — faixa de tinta, formulário validado no cliente.

A página alterna papel, azul, papel, papel, azul. A alternância não é
decorativa: é o que permite que cada emenda entre seções seja uma borda dura
intencional, sem precisar de filete ou degradê para disfarçar a costura.

## Decisões que valem saber antes de mexer

**Conteúdo nunca depende de JavaScript para existir.** O estado oculto das
animações de entrada só é armado depois que existe quem o revele, e três
gatilhos independentes podem revelá-lo. Falha de script custa a animação,
nunca a seção.

**As fontes têm faces de fallback com métricas casadas.** Os valores de
`size-adjust`, `ascent-override` e `descent-override` em `styles.css` foram
medidos neste projeto, não estimados. Mexer neles refluí o título.

**A paleta não tem cor de acento.** A ênfase vem de peso, escala e
profundidade. As seções escuras invertem remapeando os mesmos tokens, e não
com regras próprias — mudar um token muda a seção inteira de uma vez.

## Dados ainda provisórios

A página traz avisos visíveis onde falta informação real: os depoimentos, o
nome e a OAB do advogado, e o destino do formulário. Estão marcados na própria
página e listados em [PRODUCT.md](PRODUCT.md).
