---
name: Morais Borges
description: Institucional claro em papel branco e tinta azul #013D7D, sem acento cromático, com acabamento de produto premium.
colors:
  paper: "#ffffff"
  paper-2: "#faf9f6"
  paper-3: "#f4f2ed"
  paper-4: "#edeae3"
  paper-5: "#e5e1d8"
  accent: "#013d7d"
  accent-strong: "#044f9f"
  accent-soft: "#8ba2bb"
  accent-glow: "rgba(1, 61, 125, 0.05)"
  ink: "#013d7d"
  ink-2: "#3a5777"
  muted: "#435f7d"
  muted-deep: "#557190"
  rule: "rgba(1, 61, 125, 0.16)"
  rule-soft: "rgba(1, 61, 125, 0.08)"
  rule-cool: "rgba(1, 61, 125, 0.1)"
typography:
  display:
    fontFamily: "Archivo, Archivo Fallback, -apple-system, BlinkMacSystemFont, Segoe UI, sans-serif"
    fontSize: "clamp(1.75rem, 3.5vw, 3.125rem)"
    fontWeight: 600
    lineHeight: 1.04
    letterSpacing: "-0.032em"
  display-name:
    fontFamily: "Archivo, Archivo Fallback, -apple-system, BlinkMacSystemFont, Segoe UI, sans-serif"
    fontSize: "clamp(1.5rem, 2.4vw, 2.125rem)"
    fontWeight: 600
    lineHeight: 1.12
    letterSpacing: "-0.028em"
  display-hero:
    fontFamily: "Archivo, Archivo Fallback, -apple-system, BlinkMacSystemFont, Segoe UI, sans-serif"
    fontSize: "clamp(1.5rem, 2.9vw, 2.5rem)"
    fontWeight: 600
    lineHeight: 1.08
    letterSpacing: "-0.032em"
  display-hero-mobile:
    fontFamily: "Archivo, Archivo Fallback, -apple-system, BlinkMacSystemFont, Segoe UI, sans-serif"
    fontSize: "clamp(1.25rem, 5.6vw, 1.75rem)"
    fontWeight: 600
    lineHeight: 1.08
    letterSpacing: "-0.032em"
  display-accent:
    note: "mesmo passo do display; a ênfase é só a cor (ink-2 -> ink)"
    fontStyle: "normal"
  quote-mark:
    fontFamily: "Archivo, Archivo Fallback, -apple-system, BlinkMacSystemFont, Segoe UI, sans-serif"
    fontSize: "clamp(7rem, 11vw, 10rem)"
    fontWeight: 600
    lineHeight: 1
  score:
    fontFamily: "Archivo, Archivo Fallback, -apple-system, BlinkMacSystemFont, Segoe UI, sans-serif"
    fontSize: "1.25rem"
    fontWeight: 600
    letterSpacing: "-0.02em"
  title:
    fontFamily: "Archivo, Archivo Fallback, -apple-system, BlinkMacSystemFont, Segoe UI, sans-serif"
    fontSize: "1.0625rem"
    fontWeight: 600
    letterSpacing: "-0.01em"
  lede:
    fontFamily: "Archivo, Archivo Fallback, -apple-system, BlinkMacSystemFont, Segoe UI, sans-serif"
    fontSize: "clamp(0.9375rem, 1.05vw, 1.0625rem)"
    fontWeight: 400
    lineHeight: 1.66
  body:
    fontFamily: "Archivo, Archivo Fallback, -apple-system, BlinkMacSystemFont, Segoe UI, sans-serif"
    fontSize: "1rem"
    fontWeight: 400
    lineHeight: 1.6
  body-sm:
    fontFamily: "Archivo, Archivo Fallback, -apple-system, BlinkMacSystemFont, Segoe UI, sans-serif"
    fontSize: "0.8125rem"
    fontWeight: 400
    lineHeight: 1.62
  label:
    fontFamily: "Archivo, Archivo Fallback, -apple-system, BlinkMacSystemFont, Segoe UI, sans-serif"
    fontSize: "0.8125rem"
    fontWeight: 500
    letterSpacing: "0.13em"
    textTransform: "uppercase"
  label-micro:
    fontFamily: "Archivo, Archivo Fallback, -apple-system, BlinkMacSystemFont, Segoe UI, sans-serif"
    fontSize: "0.625rem"
    fontWeight: 500
    letterSpacing: "0.24em"
    textTransform: "uppercase"
  ui:
    fontFamily: "Archivo, Archivo Fallback, -apple-system, BlinkMacSystemFont, Segoe UI, sans-serif"
    fontSize: "0.875rem"
    fontWeight: 600
    letterSpacing: "0.005em"
rounded:
  pill: "999px"
  panel: "14px"
  bubble: "8px"
spacing:
  gutter: "clamp(1.25rem, 4vw, 3.5rem)"
  measure: "58ch"
  container: "84rem"
components:
  button-ink:
    backgroundColor: "{colors.accent}"
    textColor: "{colors.paper}"
    rounded: "{rounded.pill}"
    padding: "1.05rem 2rem"
    typography: "{typography.ui}"
  button-ink-hover:
    backgroundColor: "{colors.accent-strong}"
    textColor: "{colors.paper}"
  button-ink-sm:
    backgroundColor: "{colors.accent}"
    textColor: "{colors.paper}"
    rounded: "{rounded.pill}"
    padding: "0.7rem 1.25rem"
  button-ink-block:
    backgroundColor: "{colors.accent}"
    textColor: "{colors.paper}"
    rounded: "{rounded.pill}"
    padding: "0.95rem 1.5rem"
    width: "100%"
  button-ghost:
    backgroundColor: "transparent"
    textColor: "{colors.ink-2}"
    rounded: "{rounded.pill}"
    padding: "1.05rem 2rem"
  button-ghost-hover:
    backgroundColor: "rgba(11, 21, 36, 0.04)"
    textColor: "{colors.ink}"
  crest:
    note: "lockup vertical da marca abrindo a hero, com halo de arcos concêntricos"
    width: "min(27rem, 46vw)"
    widthMobile: "min(21rem, 70vw)"
    haloWidth: "min(calc(marca * 2.1), 64rem)"
    haloOrigin: "23% da altura da figura — o centro do monograma"
  nav-link:
    textColor: "{colors.muted}"
    typography: "{typography.ui}"
  nav-link-hover:
    textColor: "{colors.ink}"
  placeholder-pending:
    textColor: "{colors.accent}"
---

# Design System: Morais Borges

> **Este arquivo substitui integralmente a versão anterior**, que registrava um mundo escuro em marinho e dourado. O usuário instruiu, depois daquele registro: fundo branco e **remoção completa do dourado/amarelo da paleta**. O build foi invertido de acordo e este documento descreve o build. Onde a seção "Brand Commitments" do `PRODUCT.md` ainda registra a preferência antiga por marinho-e-dourado, **este DESIGN.md prevalece**: aquele texto é histórico, não é fonte de verdade visual.

## Overview

**Creative North Star: "O Dossiê em Papel"**

Este é o padrão institucional da advocacia — eixo central, filete gravado, hierarquia por peso — executado em papel branco e sem nenhum acento de cor. A serifa didone que ocupava o display saiu a pedido do usuário: hoje a página inteira é uma grotesca só. A escolha da convenção foi deliberada; a inversão do registro escuro para o claro foi instrução direta do usuário e é permanente. O escritório não quer parecer uma startup nem uma galeria: quer parecer a instituição que já existia antes do problema do visitante. O que diferencia não é a ideia, é o acabamento — nível de craft de produto aplicado a um vocabulário de escritório de advocacia.

O mundo é claro por definição. O fundo é branco puro (`paper`) com degraus de pedra quente descendo até `paper-5`, montados por gradientes radiais e lineares em vez de blocos chapados, para que a superfície tenha profundidade sem ganhar textura. Sobre esse campo, tudo é fino: filetes de 1px em tinta translúcida, arcos concêntricos gravados, painéis de vidro claro que deixam o papel atravessar. **Não existe acento cromático.** A tinta azul `#013D7D` (`accent`, idêntica à cor do texto) é ao mesmo tempo corpo de texto, fio, ícone, botão e único acento; a ênfase é produzida por profundidade de tinta, peso e tamanho, nunca por matiz.

A densidade é baixa e o eixo é central. O texto assenta em uma coluna medida (`58ch`), a tipografia de display carrega o argumento em três linhas, e a inflexão retórica é uma inversão de profundidade: as duas primeiras linhas em tinta rebaixada (`ink-2`) e a terceira em itálico de tinta cheia (`ink`). Essa inversão é o que substituiu o itálico dourado do registro anterior. O movimento existe, mas é subliminar: uma entrada orquestrada de ~1,5s e uma deriva contínua de poucos pixels. Nada pisca, nada salta, nada aparece depois que o visitante já leu.

**Key Characteristics:**
- Papel branco em cinco degraus de pedra quente; tinta azul #013D7D em quatro níveis de texto.
- Zero cromatismo: nenhum acento colorido em nenhuma superfície.
- **Uma família só:** Archivo, de display a UI, com face de fallback de métricas casadas. A hierarquia vem de peso, tamanho e entreletra — não de contraste entre famílias.
- Filete de 1px como material estrutural — bordas, divisores, grade de fundo e arcos.
- Vidro claro com `backdrop-filter`, não card opaco.
- Uma entrada, um loop de rAF, deriva de amplitude baixa; caminho completo para `prefers-reduced-motion`.
- Um único CTA em tinta sólida; todo o resto é fantasma ou filete.

## Colors

Sistema monocromático de tinta sobre papel: cinco degraus de papel constroem o espaço, quatro níveis de tinta constroem a hierarquia de texto, e não há uma família cromática de acento — o acento **é** a tinta.

### Primary
- **Tinta Marinho** (`accent` / `ink`): o mesmo valor cumpre os dois papéis. É a cor do corpo de texto, do botão primário preenchido, do itálico da segunda linha do título, dos ícones de painel, da marca, do sublinhado de navegação no hover, de `::selection` e do anel de foco. Em um sistema sem cor, o acento é a tinta em sua profundidade máxima.
- **Tinta Aberta** (`accent-strong`): exclusivamente o hover do botão de tinta. Um degrau mais claro, não mais colorido.
- **Tinta Recessiva** (`accent-soft`): cinza-azulado claro para cromo que precisa existir sem chamar — polegar da barra de rolagem, pontos separadores de 3px.
- **Halo de Tinta** (`accent-glow`): tinta a 5% de opacidade, usada apenas como gradiente radial de brilho baixo atrás do palco. Nunca como cor de texto ou de borda.

### Neutral
- **Papel Branco** (`paper`): fundo do documento e `theme-color`. Também é a cor do texto sobre o botão de tinta.
- **Papel Quente** (`paper-2`): primeiro degrau — base do gradiente da hero, trilho da barra de rolagem.
- **Pedra Clara** (`paper-3`): fundo da moldura do retrato e halo radial na base da hero.
- **Pedra Média** (`paper-4`): degrau de superfície disponível para blocos que precisam se destacar do papel sem borda.
- **Pedra Profunda** (`paper-5`): o degrau mais escuro do papel. É o limite inferior de claridade da rampa — nada no sistema é mais escuro que isso e ainda papel.
- **Tinta de Texto** (`ink`): texto padrão do corpo, títulos de painel, nome da marca, segunda linha do display.
- **Tinta Rebaixada** (`ink-2`): texto de segunda ordem que ainda precisa ser lido — primeira linha do display, itens do trilho de áreas, botão fantasma em repouso, links do menu móvel.
- **Cinza-Azulado** (`muted`): texto de apoio — subtítulo da hero, corpo dos painéis, links de navegação em repouso.
- **Cinza-Azulado Profundo** (`muted-deep`): o nível mais baixo de texto legível — descritor da marca, linha de credenciais, etiquetas micro.
- **Filete** (`rule`): borda de 1px padrão. Bordas de botão fantasma, botão de menu, filete do cabeçalho fixo.
- **Filete Suave** (`rule-soft`): divisores que só devem ser percebidos de perto — borda dos painéis de vidro, moldura do retrato, topo do trilho de áreas, separadores do menu móvel, grade vertical de fundo.
- **Filete Frio** (`rule-cool`): filete de reserva, degrau intermediário entre os dois anteriores.

### Named Rules
**A Regra Sem Ouro.** O dourado e o amarelo estão fora da paleta por instrução direta do usuário. Nenhuma superfície futura reintroduz ouro, âmbar, latão ou qualquer variação quente metálica — nem como fio, nem como selo, nem como halo. Se um valor amarelo aparecer em uma tela nova, ele é um defeito, não uma extensão.

**A Regra da Tinta Única.** O sistema não tem acento cromático. Ênfase se faz por profundidade de tinta (`muted-deep` → `muted` → `ink-2` → `ink`), peso e tamanho. Se uma tela nova precisar "destacar" algo, ela sobe na rampa de tinta; não inventa uma cor.

**A Regra dos Cinco Degraus.** Toda profundidade de fundo vem da rampa de papel, não de cinza neutro e não de preto sobreposto. Escurecer significa descer a rampa (`paper` → `paper-5`); clarear significa subir. Preto puro só aparece dentro de sombras e máscaras.

**A Regra da Área Cheia Única.** A única área de tinta sólida preenchida em qualquer tela é o botão primário. Se uma segunda superfície de tinta chapada aparecer, uma das duas está errada.

## Typography

**Display Font:** Archivo 600 (hospedada localmente), a mesma família do texto. Não há segunda família.
**Body Font:** Archivo (hospedada localmente, pesos 400, 500 e 600, mais itálico 400), com **"Archivo Fallback"** e a pilha de sistema.

**Faces de fallback com métricas casadas.** A família `Archivo Fallback` declarada no topo de `styles.css` é parte deliberada do sistema: mapeia o Arial local com `size-adjust`, `ascent-override`, `descent-override` e `line-gap-override` medidos neste projeto (99,3% da largura de Arial), de modo que a troca de fonte não reflua o texto. Qualquer nova família adicionada ao sistema precisa da mesma medição, ou não entra.

**Character:** Uma grotesca neutra levada do texto ao display. Antes o sistema opunha uma didone de alto contraste a uma grotesca sem opinião, e esse contraste era a estrutura editorial; o usuário pediu fonte sem serifa e a estrutura passou a ser outra. **A retórica agora é peso e entreletra:** display em 600 com tracking bem fechado (−0.032em), texto em 400 com tracking natural, rótulos em 500 caixa alta com tracking aberto. Os três não se confundem porque os extremos estão longe um do outro — é isso que substitui a diferença de família, e é o que precisa ser preservado.

### Hierarchy
- **Display** (Archivo 600, `clamp(1.75rem, 3.5vw, 3.125rem)`, altura 1.04, tracking −0.032em, cor `ink-2`): apenas o título da hero e futuros títulos de seção de mesma magnitude. Máximo de 30ch, quebra manual em linhas. O passo foi rebaixado do topo original de 4.375rem por decisão do usuário, para liberar altura ao retrato da hero — a figura tem precedência sobre a escala do display nesta página.
- **Display Mobile** (mesma face e métricas, `clamp(1.5rem, 6.4vw, 2.125rem)` abaixo de 640px, `max-width: none`): degrau de display do telefone. É parte da rampa, não uma exceção — todo display novo herda os dois passos.
- **Display Accent** (mesmo passo do display, cor `ink`): a última linha do título. A ênfase é só a subida de `ink-2` para `ink` — o itálico saiu com a didone, porque numa grotesca ele é uma inclinação e não uma voz. O elemento continua sendo `<em>`, com `font-style: normal` explícito.
- **Marca de Citação** (Archivo 600, `clamp(7rem, 11vw, 10rem)`, cor `paper-5`): o glifo `“` que abre a coluna de comando das avaliações. É tipografia, não ícone — a aspa do próprio display assina melhor que qualquer vetor desenhado. Ocupa uma fração pequena da caixa do em, então a escala tipográfica é muito maior que a ótica, e a caixa é recortada em altura (`line-height: 1`, `height: 0.34em`) para o glifo assentar junto do rótulo sem ser cortado.
- **Nota** (Archivo 600, 1.25rem, tracking −0.02em, algarismos tabulares, cor `ink`): a nota agregada (`5,0`) na linha de resultado. Único lugar onde um número recebe a face de display.
- **Wordmark**: não existe mais como passo tipográfico — o nome no cabeçalho passou a ser o arquivo do logotipo.
- **Title** (Archivo 600, 1.0625rem, tracking −0.01em, cor `ink`): títulos de card e nomes. É o menor passo que ainda conta como display.
- **Lede** (Archivo 400, `clamp(0.9375rem, 1.05vw, 1.0625rem)`, altura 1.66, cor `muted`, `text-wrap: pretty`): subtítulo abaixo do display, limitado a `58ch`.
- **Body** (Archivo 400, 1rem, altura 1.6): texto corrente padrão do documento.
- **Body Small** (Archivo 400, 0.8125rem, altura 1.62, cor `muted`): corpo dos painéis de vidro e linhas de apoio.
- **Label** (Archivo 500, 0.8125rem, tracking +0.13em, caixa alta, cor `ink-2`): rótulos institucionais legíveis — o trilho das cinco áreas de atuação. Abaixo de 640px cai para 0.625rem com tracking +0.2em.
- **Label Micro** (Archivo 500, 0.625rem, tracking +0.24em, caixa alta, cor `muted-deep`): o degrau mais baixo — descritor sob o nome da marca. Nunca abaixo de 10px, nunca com tracking menor que 0.2em nesse tamanho.
- **UI** (Archivo 600, 0.8125–1rem conforme o tamanho do botão, tracking +0.005em): rótulos de botão; links de navegação em 0.875rem com peso normal.

### Named Rules
**A Regra dos Extremos Afastados.** Com uma família só, a hierarquia se apoia na distância entre os passos. Display fica em 600 e tracking −0.032em; corpo em 400 e tracking zero; rótulo em 500, caixa alta, tracking +0.13em. Um passo novo que caia no meio desse intervalo enfraquece os três — se for preciso destacar algo, sobe-se no peso ou no tamanho, não se inventa um degrau intermediário.

**A Regra da Ênfase por Tinta.** O único recurso enfático do display é a subida de tinta (`ink-2` → `ink`), uma ocorrência por tela. Não existe itálico — ele saiu com a didone —, não existe sublinhado decorativo e não existe caixa alta no display.

**A Regra do Tracking Inverso.** Quanto menor o tipo, maior o tracking: display negativo (−0.022em), corpo neutro, rótulos +0.13em, micro-rótulos +0.24em. Caixa alta só existe a partir do nível de rótulo, nunca no corpo nem no display.

**A Regra do Eixo Óptico Vivo.** O display usa `font-optical-sizing: auto` porque o tamanho é fluido: travar o eixo em 88 quebra os hairlines quando o título renderiza a 30px no telefone.

## Layout

O contêiner é único e constante: `84rem` de largura máxima, centrado, com gutter fluido (`clamp(1.25rem, 4vw, 3.5rem)`) — o mesmo gutter serve cabeçalho, hero, trilho de áreas e menu móvel. Não há um segundo contêiner nem uma largura "estreita" alternativa; a coluna de leitura é limitada por medida de texto (`58ch`), não por outro contêiner.

O eixo é central. Título, subtítulo, CTA e credenciais empilham centrados; a grade de fundo divide o contêiner em seis colunas de filete de 1px (três abaixo de 900px, via `--rule-columns`), visíveis apenas como referência estrutural sob máscara vertical que recua na faixa do display.

**Hero.** Ocupa `100svh` com `min-height`, alinhada ao rodapé (`justify-content: flex-end`) e com espaço superior reservado para o cabeçalho fixo (`clamp(6.25rem, 12vh, 8.25rem)`). Internamente é uma grade de duas faixas — `grid-template-rows: auto minmax(0, 1fr)`: o bloco de texto toma o que precisa e o palco absorve o resto. O trilho das áreas é ancorado em posição absoluta ao rodapé da hero, fora da grade, de modo que a tese inteira caiba em uma tela no desktop. O retrato emoldurado é cortado pela borda inferior em vez de esticar a página.

**Ritmo vertical.** O espaçamento entre blocos é fluido e proporcional, não uma escala fixa de degraus: cada intervalo é um `clamp` próprio entre ~1rem e ~2rem. A regra prática é que o espaço cresce com a viewport na mesma proporção que o tipo.

**Breakpoints.** Três, todos `max-width`:
- **900px** — o ponto de virada estrutural. A navegação vira botão de menu, a marca da hero encolhe para `min(21rem, 70vw)` e seu halo aperta de 2,1× para 1,5×, e a grade de fundo cai para três colunas. A hero em si não muda de estrutura: ela já é uma coluna centrada em qualquer largura.
- **640px** — o display cai para o degrau móvel, os botões da hero viram blocos empilhados de largura total, e os rótulos descem um degrau de tamanho.

### Named Rules
**A Regra da Tela Única.** No desktop, a hero inteira — título, subtítulo, CTA, credenciais, palco e trilho de áreas — cabe em uma viewport. Qualquer elemento novo na hero disputa espaço com os existentes; não empurra o trilho para fora.

**A Regra do Gutter Único.** Toda superfície de nível superior usa `--gutter`. Não existe padding lateral inventado por seção.

## Elevation & Depth

O sistema é híbrido e assimétrico: o fundo cria profundidade por **camadas tonais e máscaras**, e apenas três elementos — o painel de vidro, a moldura do retrato e o botão de tinta — carregam sombra real. Não há uma escala de elevação de vários níveis.

A profundidade do campo vem de quatro camadas empilhadas atrás do conteúdo (`z-index: -1`): gradiente de fundo em duas camadas (radial na base + linear vertical), grade vertical de filetes mascarada nas pontas, arcos concêntricos gravados em tinta sob máscara radial, e uma vinheta radial que fecha as bordas em tinta a 5,5%. O halo de tinta de baixa opacidade fica entre eles. Nenhuma dessas camadas usa sombra.

### Shadow Vocabulary
- **Painel de Vidro** (`box-shadow: 0 18px 40px -24px rgba(11,21,36,0.28), inset 0 1px 0 rgba(255,255,255,0.9)`): sombra de duas partes — um deslocamento externo difuso e largo, que apoia o painel sobre o papel, e um fio interno branco de 1px no topo, que dá espessura à borda de vidro. As duas partes são inseparáveis; usar só a externa achata o material.
- **Moldura do Retrato** (`box-shadow: 0 24px 48px -30px rgba(11,21,36,0.4)`): sombra única, mais profunda e mais fechada que a do painel, porque a moldura é um objeto físico apoiado no papel, não um vidro suspenso.
- **Ação em Repouso** (`box-shadow: 0 8px 20px -10px rgba(11,21,36,0.32)`): sombra real de deslocamento e desfoque sob o botão primário. Aqui a sombra é sombra, não luz — no mundo claro, o acento não brilha, ele pesa.
- **Ação em Hover** (`box-shadow: 0 16px 32px -12px rgba(11,21,36,0.38)`): a sombra se abre e desce junto com a elevação de 2px.

### Named Rules
**A Regra do Balão, Não do Card.** Superfícies de conteúdo sobre a hero são balões de mensagem, na gramática do WhatsApp e por pedido explícito do usuário: fundo chapado de um degrau da rampa de papel, raio de 8px, o canto do bico em ângulo reto, bico de 8×13px desenhado como máscara SVG e pintado com o fundo do próprio balão, e horário alinhado à direita no pé. O par é uma conversa — o balão da esquerda é a mensagem recebida (`paper-3`, bico à esquerda, só horário), o da direita é a enviada (`paper-5`, bico à direita, horário mais os dois tiques). Não há borda, não há vidro e não há `backdrop-filter`: o balão é opaco por definição.

**A Regra da Sombra Escassa.** Sombra só existe onde há balão de mensagem, ou ação (botão de tinta). No balão ela vive em `filter: drop-shadow(0 1px 0.8px)`, nunca em `box-shadow`, porque o bico precisa herdá-la junto com o corpo. Texto, filetes, ícones e superfícies de fundo nunca recebem sombra. Sombra é sempre deslocamento com desfoque e raio negativo de espalhamento — nunca deslocamento duro sem desfoque.

## Shapes

Três geometrias, e só três. **Pílula completa** (`999px`) para tudo o que é ação ou marcador: botões em todos os tamanhos, botão de menu, polegar da barra de rolagem. **Raio médio** (`14px`) para superfície de página presa a uma borda — hoje só o skip link (nos dois cantos inferiores). **Raio de balão** (`8px`) para os balões de mensagem, sempre com o canto do bico em ângulo reto. Não há cantos retos em elementos interativos.

A borda é o material estrutural do sistema: sempre 1px, sempre translúcida, sempre da família de filetes. Nada usa borda de 2px, e nada usa borda sólida opaca.

A silhueta recorrente é o **arco concêntrico**: cinco círculos de 1px com opacidade decrescente (.38 → .08), centrados abaixo da linha de base, mascarados radialmente. É o eco geométrico do timbre — a mesma lógica dos filetes verticais, curvada. Os ícones seguem essa mesma gramática: SVG inline traçado em 1.1–1.4px, sem preenchimento, exceto por um único ponto sólido na marca.

**A Regra do Corte Ancorado.** Quando um objeto encontra a borda da seção, ele é cortado por ela e perde os cantos daquele lado: o skip link é `0 0 14px 14px`, e cada balão zera o canto onde nasce o bico. O raio marca o lado livre, não o lado ancorado. O retrato segue a mesma lógica por outro meio — não tem moldura, e sua base se dissolve no papel por máscara nos últimos 12% da altura.

## Components

### Buttons
Confiantes e completamente arredondados, com uma elevação curta no hover. A pílula é a assinatura de ação do sistema.

- **Shape:** pílula completa (`999px`), borda de 1px sempre declarada (transparente na variante de tinta).
- **Sizes:** `--sm` (0.7rem × 1.25rem, 0.8125rem) para o cabeçalho; `--lg` (1.05rem × 2rem, 1rem) para a hero; `--block` (largura total, 0.95rem × 1.5rem, 0.9375rem) para o menu móvel. Todos com `display: inline-flex`, `gap: 0.6em` e Archivo 600.
- **Primary (`.btn--ink`):** tinta sólida sobre texto de papel, com sombra real em repouso. É a única área chapada de tinta na página.
- **Hover:** o fundo sobe para `accent-strong`, o botão sobe 2px (`translateY(-2px)`) e a sombra se abre. A seta interna desliza 3px à direita (`translateX(3px)`) em 0.36s. `:active` devolve o botão ao chão.
- **Ghost (`.btn--ghost`):** texto em `ink-2`, fundo transparente, borda em `rule`. No hover o texto vira tinta plena, a borda fecha para tinta a 40% e o fundo ganha tinta a 4%, com a mesma elevação de 2px.
- **Transições:** 0.32s, `--ease-out` para transform e sombra, `--ease-soft` para cor.

### Cards / Containers
O balão de mensagem é o único contêiner de conteúdo do build.

- **Corner Style:** 8px, com o canto do bico zerado (`border-top-left-radius: 0` na recebida, `border-top-right-radius: 0` na enviada).
- **Background:** chapado, um degrau da rampa de papel — `paper-3` na recebida, `paper-5` na enviada. Sem gradiente, sem translucidez, sem `backdrop-filter`.
- **Border:** nenhuma. O balão se separa do papel por tom e sombra, não por aro.
- **Bico:** pseudo-elemento de 8×13px no canto superior, deslocado −7px para fora, com a silhueta do bico do WhatsApp aplicada como `mask-image` e o fundo do próprio balão como cor.
- **Shadow Strategy:** `filter: drop-shadow(0 1px 0.8px rgba(11,21,36,0.2))` no balão inteiro, para o bico herdar a mesma sombra.
- **Internal Padding:** `0.55rem 0.7rem 0.4rem 0.75rem` — assimétrico, mais folga do lado do bico.
- **Conteúdo:** o componente `.panel` da hero **não existe mais** — os dois balões de mensagem foram retirados a pedido do usuário. A gramática de balão sobrevive em `.review__bubble`, na seção de avaliações, e é lá que ela deve ser consultada.

### Navigation
- **Masthead:** fixo no topo, transparente em repouso. Ao rolar 12px ganha a classe `is-stuck`: fundo `rgba(255,255,255,0.84)`, `backdrop-filter: blur(14px) saturate(140%)` e um filete inferior de 1px que só existe nesse estado — um gradiente horizontal que desvanece nas duas pontas.
- **Links:** Archivo 0.875rem em `muted`; no hover a cor sobe para `ink` e um sublinhado de 1px em tinta cresce da esquerda (`scaleX(0 → 1)`, 0.34s).
- **Marca:** o arquivo do logotipo do escritório (`logo-morais-borges.webp`), com a altura controlada por `clamp(1.4rem, 2.1vw, 1.75rem)` e a largura seguindo a proporção. O símbolo desenhado e o nome tipografado que ocupavam esse lugar foram substituídos pela arte real.
- **Mobile:** abaixo de 900px a lista some, o botão de alternância circular aparece (42px, borda em `rule`) e suas duas barras de 1px giram em X quando `aria-expanded="true"`. O painel do menu é `rgba(255,255,255,0.97)` com blur de 16px, links separados por filetes suaves e o CTA em `--block` no fim.
- **Skip link:** pílula invertida no eixo (fundo de tinta, texto de papel, raio `0 0 14px 14px`) que desliza do topo apenas no `:focus-visible`.

### Blog (`blog.html`, `blog-noticia.html`)
O site deixou de ter uma página só. As duas páginas do blog herdam o mundo inteiro — mesmos tokens, mesma grade, mesmo cabeçalho — e **mudam de modo**: na landing a pessoa veio decidir, aqui ela veio ler. O corpo da notícia sobe um passo de tamanho, a entrelinha abre para 1.78 e a coluna cai para 44rem. A fotografia é o único elemento com licença para estourar essa coluna (58rem).

**Os três grupos são hierarquia de tamanho, não de rótulo.** "Do dia" traz um card só, deitado, ocupando a largura inteira; "da semana" e "do mês" vêm em grade de três. O rótulo de cada grupo divide uma linha com um filete que toma o espaço restante, então a régua começa sempre onde o rótulo termina, em qualquer largura.

**O rodapé dos cards fica alinhado** mesmo com títulos de alturas diferentes: o resumo é empurrado para o pé com `margin-top: auto`, e um filete acima dele marca a divisão. Sem isso, três títulos de uma, duas e três linhas desalinhariam os três resumos.

**O lugar da foto que ainda não existe é da marca.** Enquanto não há imagem real, o campo é papel (`paper-4`) com o monograma em marca d'água a 14% — não um retângulo cinza de placeholder genérico. A proporção já é a definitiva (3:2 no card, 16:9 na notícia), então a troca por um `<img>` não mexe no layout.

**Nada de conteúdo jurídico foi escrito.** Os textos do modelo falam de si mesmos de propósito, na mesma convenção dos depoimentos. A página sai assinada por um advogado com registro na OAB — conteúdo jurídico não revisado publicado sob o nome dele é um risco que o design não tem direito de criar.

### Ordem e ritmo das seções
A página corre em **hero → áreas de atuação → quem conduz o trabalho → avaliações → contato**, ordem definida pelo usuário, e alterna claro e escuro: papel, azul, papel, papel, azul. As duas faixas de tinta são `.areas` e `.contact`.

**A faixa azul já esteve nas avaliações.** O usuário trocou: pediu que o fundo de tinta fosse para a segunda seção e que as avaliações ficassem brancas. A troca é de tokens, não de componentes — cada seção redefine `--band-*` localmente e tudo dentro dela inverte —, mas duas peças precisaram de mais que isso, e é o que o resto desta seção registra.

**A rampa dos cinco cartões virou de luz.** Quando `.areas` era clara, os quatro primeiros cartões desciam a rampa de papel (`paper` → `paper-4`) e o quinto invertia para tinta cheia. Sobre o azul o gesto é o mesmo e o material é outro: os quatro clareiam o azul por camadas de branco translúcido (0.05 → 0.14) e o quinto inverte para papel cheio. **Cada cartão clareia o fundo sob si, então o texto de apoio perde contraste à medida que a rampa sobe**: por isso `.areas` usa `--band-fg-3` em 0.74, e não no 0.62 das outras faixas. Em 0.62, o quarto cartão daria 3,9:1.

**A borda de foco lê o token da faixa.** `.area:hover` usa `var(--band-rule)`, então nos quatro cartões de luz ela é clara e no quinto — que remapeia os tokens para o claro — vira tinta sozinha. Antes havia um caso especial só para o quinto; ele deixou de ser necessário.

**O balão de avaliação não é branco.** Numa faixa branca ele sumiria, então é um degrau de papel (`--balao: paper-3`) e a sombra acompanha: sobre o azul ela era preta e forte, para recortar o balão do fundo; sobre papel, uma sombra dessas sujaria a página, então é tinta diluída. Os dois valores são tokens da faixa, de modo que uma futura inversão desta seção volte a ser uma troca de tokens.

**Duas coisas foram desfeitas por esta troca**, e ficam registradas porque voltarão a ser necessárias se a ordem ou as cores mudarem de novo: o filete que separava `.reviews` de `.contact` quando as duas eram a mesma tinta, e a camada que dissolvia a base da hero no branco quando a seção seguinte era clara. Hoje a hero encosta no azul e as avaliações encostam no azul — **as duas emendas são bordas duras intencionais, e não precisam de tratamento.**

### Marca e texto da hero (`.hero__crest`, `.hero__lede`)
A hero é **uma coluna centrada de cinco peças**: a marca, um título de três linhas, um subtítulo, um selo de prova e o botão de ação. Não há fotografia, balão de mensagem nem traço de caneta — todos existiram e foram retirados a pedido do usuário.

A peça de abertura é o **lockup vertical da marca**. O arquivo é `assets/img/logo-morais-borges-empilhado.webp` (1253×619): o arranjo empilhado que o próprio escritório entregou na versão clara, remontado em tinta cheia a partir das peças do arquivo horizontal de alta resolução. Nenhuma peça foi reescalada — normalizadas pela largura de "MORAIS BORGES", monograma e descritor caem no tamanho exato; só os vãos verticais vieram medidos da versão do cliente (9,32% e 5,27% daquela largura).

A figura tem a largura da marca (`--marca: min(27rem, 46vw)`, e `min(21rem, 70vw)` abaixo de 900px), e a folga abaixo dela é maior que a de cima: é essa folga que a separa do título, enquanto acima só existe papel.

**O título tem quebras autorais.** As três linhas são spans em bloco, não resultado de refluxo: a tríade se constrói uma linha por vez e precisa cair sempre assim. As duas primeiras ficam em tinta rebaixada e a terceira em tinta cheia e itálico — a ênfase é a chegada, não a repetição. O passo caiu de 3.125rem para 2.5rem porque o título passou de duas linhas para três e agora divide a primeira tela com a marca.

**O selo de prova é uma pílula de papel, não um adesivo colorido.** Fundo `paper-3`, filete de 1px, e as cinco estrelas desenhadas em tinta — esta página não tem ouro, então a estrela que a categoria pinta de amarelo aqui é da mesma tinta de todo o resto. A nota usa o degrau `score`; o divisor é o filete curto de 1,5rem, o mesmo recurso da seção de avaliações. Abaixo de 560px o texto quebra em duas linhas: o filete some — senão fica pendurado no fim da primeira linha — e o raio cai de estádio para painel, porque 999px só faz sentido em uma linha.

**Dois rótulos de ação convivem na primeira tela.** O cabeçalho diz "Agendar uma consultoria" e o botão da hero diz "Iniciar contato"; ambos apontam para `#agendar`. Isso contraria o princípio de destino único registrado no PRODUCT.md e foi decisão explícita do usuário, tomada depois de a objeção ter sido levantada.

**A hero é centrada com folga assimétrica.** `justify-content: center` na seção, com o preenchimento de baixo maior que o de cima, para que o conjunto repouse acima do centro geométrico — que é onde o olho espera encontrá-lo.

**O halo sai do monograma, não do conjunto.** O monograma ocupa os primeiros 285 de 619 pixels da arte, então seu centro está a 23% da altura da figura, e é ali que os arcos concêntricos se ancoram. Os arcos moram dentro da figura, de modo que o halo acompanha a marca em qualquer largura sem precisar ser reancorado a cada quebra. Como o reset global dá `max-width: 100%` a toda `img` e `svg`, o halo precisa de `max-width: none` para poder ser maior que a figura que o contém.

A fotografia de recorte (`retrato-advogado.png`) continua na pasta, fora de uso, guardada para uma seção futura.

### Avaliações (`.reviews`)
Segunda seção da página, em `paper-3` — um degrau abaixo do papel da hero, que é o que a separa sem precisar de filete divisor. Estrutura em grade de duas colunas: coluna de comando estreita (`clamp(9rem, 16vw, 13rem)`) e trilho ocupando o resto. Abaixo de 900px vira uma coluna só, com os controles acima do trilho.

- **Cabeçalho:** título display com a metade final em itálico `ink-2`, seguido da linha de resultado (`Resultado da opinião de 267 pessoas: 5,0/5 ★`) em 0.8125rem, com os números em peso 600, tinta plena e algarismos tabulares.
- **Coluna de comando:** aspas duplas desenhadas em `accent-soft` (36×26px), rótulo display de 1.0625rem em duas linhas, e os controles.
- **Controles:** setas em círculos cheios de `paper-5`, 32px, **sem aro** — fecham para tinta plena com chevron de papel no hover, e caem para 30% de opacidade quando desabilitadas nas pontas. Entre elas, a barra de progresso: trilho de 3px em `paper-5`, polegar em `ink-2`, cuja **largura representa a fração visível do trilho**, não uma posição fictícia.

**A Regra do Trilho Sangrado.** O carrossel avança para fora da margem direita (`margin-right: calc(-1 * var(--gutter))`) e o último card **se dissolve numa máscara** (`linear-gradient(90deg, #000 0 78%, transparent 100%)`) em vez de ser cortado a seco. A máscara sai de cena pela classe `.is-end` quando não há mais nada para revelar — um card esmaecido no fim do trilho seria defeito, não intenção.

### Balão de Avaliação (`.review`)
Mesma família do balão da hero, com três diferenças de propósito:

- **O bico desce pelo canto inferior esquerdo**, apontando para o autor logo abaixo, e é desenhado por `clip-path: polygon(0 0, 100% 0, 0 100%)` num quadrado de 13px. A aresta vertical continua a borda do balão; o canto correspondente é zerado (`border-bottom-left-radius: 0`).
- **Altura fixa** (`9.5rem`) com o texto truncado em quatro linhas (`-webkit-line-clamp: 4`). Depoimentos reais têm comprimentos irregulares, e sem o teto o maior deles definiria a altura de todos. As estrelas ficam ancoradas na base por `margin-top: auto`.
- **Rodapé de autor fora do balão:** avatar circular de 30px em `paper-5` com ícone de pessoa desenhado, nome em display 0.875rem e data em 0.625rem `muted-deep`. Fora do balão porque quem assina não faz parte da mensagem.

Fundo `paper` chapado, raio de 8px, sem borda, e a mesma sombra em `filter: drop-shadow` que a hero usa — pelo mesmo motivo: o bico precisa herdá-la.

### Marcador de Dado Pendente (`.ph`)
Convenção de projeto, não decoração: todo valor que o escritório ainda não forneceu aparece em tinta, peso 600, **algarismos tabulares** (`font-variant-numeric: tabular-nums`) e sublinhado pontilhado de 1px em `accent-soft`. O tabular garante que o placeholder ocupe a mesma largura do número real; o pontilhado sinaliza "provisório" sem parecer erro. Nunca inventar um valor no lugar — o marcador existe justamente para tornar a ausência visível e substituível.

### Superfícies do Navegador
O tema não para na borda do documento. `::selection` é tinta sólida com texto de papel; `:focus-visible` é um anel de 2px em tinta com 3px de deslocamento, global; a barra de rolagem usa `scrollbar-color: accent-soft paper-2` com o equivalente WebKit (11px, polegar em `accent-soft` com borda de 3px na cor do trilho e raio de pílula, fechando para tinta plena no hover).

### Motion (sistema, não componente)
- **Curvas:** `--ease-out: cubic-bezier(0.16, 1, 0.3, 1)` para entrada e movimento; `--ease-soft: cubic-bezier(0.4, 0, 0.2, 1)` para cor e opacidade.
- **Entrada única:** o estado oculto só existe atrás da classe `.js`, adicionada sincronamente no `<head>`. Sem JavaScript, a página chega inteira e estática — nunca em campo vazio. O script inline adiciona `.is-ready` ao `<body>` após dois `requestAnimationFrame` e a coreografia dispara: elementos `[data-reveal]` sobem 18px em 1s com atraso escalonado de 110ms (`--reveal-delay`, escrito por `main.js`). Na hero são três: a marca, o título e o subtítulo, nessa ordem. **`data-reveal` nunca vai em quem depende de `transform` para se posicionar** — a animação `rise` termina num transform próprio e apagaria o do elemento; por isso ela mora na imagem da marca, não na figura que a envolve.
- **Um único loop:** um `requestAnimationFrame` escreve `--px` e `--py` nos elementos com `data-parallax`; o ponteiro é suavizado por interpolação (fator 0.055), a profundidade é o valor do atributo (hoje só os arcos, em −0.25), e a amplitude é 14px em X e 9px em Y. `data-float` soma uma deriva senoidal de ±6px com período de ~3.4s e fase por elemento; nenhum elemento o usa desde que os balões saíram da hero. O ponteiro só é escutado em `(pointer: fine)`.
- **Entrega sem salto:** o keyframe final das animações de entrada termina em `translate3d(var(--px, 0px), var(--py, 0px), 0)`, entregando o elemento direto ao loop de deriva. Nunca existe um segundo salto entre entrada e movimento contínuo.
- **Movimento reduzido:** `prefers-reduced-motion: reduce` é caminho completo, não atenuação — a entrada é anulada com opacidade e transform finais, o loop não roda, `--px`/`--py` são zerados na troca ao vivo do media query, transições de botão e navegação são desligadas, e `scroll-behavior` volta a `auto`.

## Do's and Don'ts

### Do:
- **Do** tratar a tinta azul como acento único: ela é texto, fio, ícone, botão e ênfase ao mesmo tempo.
- **Do** produzir hierarquia por profundidade de tinta, peso e tamanho — a subida `muted-deep` → `muted` → `ink-2` → `ink` é o recurso de ênfase do sistema.
- **Do** construir toda superfície de conteúdo sobre a hero como vidro claro: gradiente a 160°, borda de 1px em `rule-soft`, raio de 14px, `backdrop-filter: blur(18px) saturate(130%)` e a sombra de duas partes completa.
- **Do** usar 1px para toda borda, divisor e traço de grade, sempre em uma das três cores de filete.
- **Do** manter os extremos de peso afastados: 600 no display, 400 no corpo, 500 em rótulo caixa alta. Com uma família só, é essa distância que faz a hierarquia.
- **Do** declarar os dois degraus de display (desktop e o degrau móvel abaixo de 640px) para todo título de magnitude de display.
- **Do** aumentar o tracking conforme o tipo diminui, e reservar caixa alta para o nível de rótulo (+0.13em) e micro-rótulo (+0.24em).
- **Do** desenhar todo ícone como SVG inline traçado em 1.1–1.4px, sem preenchimento.
- **Do** emoldurar fotografia com fundo de estúdio (`paper-3`, filete de 1px, raio 14px no lado livre, `object-fit: cover`) em vez de fingir recorte.
- **Do** entregar toda animação de entrada ao loop de `--px`/`--py` no keyframe final, e escrever o caminho `prefers-reduced-motion` na mesma passada.
- **Do** gatilhar qualquer estado oculto atrás da classe `.js` para que a página sem script chegue completa.
- **Do** marcar todo dado ainda não fornecido pelo escritório com `.ph` — tinta, algarismos tabulares, sublinhado pontilhado — em vez de inventar valor.
- **Do** usar `--gutter` e o contêiner de `84rem` em toda superfície de nível superior.

### Don't:
- **Don't** reintroduzir dourado, amarelo, âmbar ou latão em qualquer superfície. O usuário removeu o ouro da paleta; a versão anterior deste documento e a seção "Brand Commitments" do `PRODUCT.md` estão superadas nesse ponto.
- **Don't** introduzir uma cor de acento de qualquer matiz. O sistema é papel + tinta numa grotesca só, e nada mais.
- **Don't** introduzir uma segunda família tipográfica sem face de fallback medida com `size-adjust` e overrides de métrica. O sistema hoje tem uma só.
- **Don't** usar preto puro (`#000`) como cor de texto nem cinza neutro como fundo; a rampa de papel é quente e a rampa de texto começa na tinta azul.
- **Don't** preencher uma segunda área chapada de tinta além do CTA primário. A tinta em área grande perde a função de destino.
- **Don't** usar cantos retos em elementos interativos nem inventar degraus de raio entre a pílula (999px) e o painel (14px).
- **Don't** usar sombra dura, deslocada e sem desfoque; toda sombra do sistema tem desfoque largo e espalhamento negativo.
- **Don't** usar sombra em texto, filetes, ícones ou superfícies de fundo — sombra pertence ao vidro, à moldura e à ação.
- **Don't** aplicar borda de 2px ou borda sólida opaca; o filete de 1px translúcido é o material estrutural.
- **Don't** dar `data-reveal` a um elemento cujo posicionamento depende de `transform`; a animação `rise` termina num transform próprio e apaga o do elemento. A entrada vai no filho, nunca em quem centraliza.
- **Don't** empurrar o trilho das áreas para fora da primeira tela no desktop ao acrescentar conteúdo à hero.
- **Don't** deixar a arte da marca fora da tinta do site. Ela **foi** recolorida de `#00243c` para `#013d7d` quando o usuário trocou o azul da página: manter o navio antigo deixaria dois azuis na mesma tela, que é exatamente o que a troca eliminava. Os arquivos originais do cliente continuam versionados em `assets/img/logo-morais-borges-*.png`, e reverter é um comando.
- **Don't** somar um segundo loop de animação ou um segundo observador de ponteiro; existe um `requestAnimationFrame` no projeto e ele governa toda a deriva.
- **Don't** usar valor inventado, número redondo ou nome fictício onde falta prova; o marcador pendente é a resposta.
