# Product

<!-- impeccable:product-schema 1 -->

## Platform

web

## Stack

static HTML/CSS/JS — confirmado pelo usuário. Sem build step, sem framework. Publicável em qualquer host estático.

## Users

Empresários e empreendedores brasileiros que tomam decisões de risco com o próprio patrimônio exposto. Chegam ao escritório em um de dois momentos: antes, quando percebem que cresceram sem estrutura jurídica que acompanhe o tamanho do negócio; ou depois, quando já existe uma autuação, um processo trabalhista, uma disputa societária ou imobiliária em curso. O trabalho deles na página é decidir se este escritório entende o problema bem o bastante para merecer uma conversa.

## Product Purpose

Escritório de advocacia Morais Borges. Ajuda empresários a proteger o patrimônio, reduzir riscos e tomar decisões com maior segurança jurídica e tributária. Sucesso da landing page = o visitante agenda uma consultoria.

## Positioning

Advocacia empresarial que atua de forma preventiva e integrada — as cinco áreas de atuação cobrem os pontos onde o patrimônio de um empresário costuma vazar ao mesmo tempo, não isoladamente. A posição a comunicar: contratar o Morais Borges dá ao empresário uma vantagem competitiva sobre concorrentes que só chamam advogado depois do problema.

## Operating Context

Áreas de atuação confirmadas (as cinco, sem adicionar outras):

- Direito Tributário
- Direito Empresarial
- Direito Trabalhista
- Direito Imobiliário
- Direito do Consumidor

Ponto de conversão único da página: **"Agendar uma consultoria"**, presente no cabeçalho e no cartão do advogado. Todos esses botões apontam para `#agendar`, a seção final de contato, cujo formulário pede nome, e-mail e número e fecha no botão **"Falar com a gente"**.

**PENDENTE — destino do formulário.** A constante `FORM_DESTINO` em `assets/js/main.js` está vazia. Enquanto estiver, o formulário valida os campos normalmente mas bloqueia o envio e avisa o visitante, em vez de aceitar um contato que não chegaria a ninguém. Falta o usuário definir se o contato vai para WhatsApp, e-mail ou um serviço de formulários.

## Capabilities and Constraints

- Landing page de página única, construída seção por seção, com aprovação do usuário a cada etapa.
- Nome da marca confirmado: Morais Borges.
- Escopo é apenas a landing page; não há outras rotas confirmadas.

## Brand Commitments

- Nome: Morais Borges.
- Idioma: português do Brasil.
- Referência visual fornecida pelo usuário como orientação de sensação estética, explicitamente **não** para cópia literal de textos, conteúdo, marcas ou elementos.
- A comunicação deve ser calma e confiante, sem os exageros típicos de páginas SaaS.
- **Preferência permanente de direção visual:** o usuário escolheu o padrão da categoria — registro institucional clássico, serifa didone e grade centrada — em vez de um mundo visual alternativo. Na mesa de direção isso foi registrado como "azul-marinho e dourado", mas **o usuário reverteu o ouro em seguida**: mandou tirar as listras, o fundo improvisado e qualquer dourado, deixando papel branco e tinta marinho como acento único. É essa a direção construída e a que vale. Superfícies futuras herdam a escolha sem reabrir a rodada de direção.
- **Identidade visual confirmada.** O usuário forneceu o logotipo em três versões. Em uso: o lockup **horizontal** de uma cor só (`logo-morais-borges.webp`) no cabeçalho e como assinatura de fecho na seção de contato; o lockup **vertical** (`logo-morais-borges-empilhado.webp`) como peça central da hero. O monograma isolado virou favicon. O navio da marca é **#00243c**, um pouco mais azul que a tinta do site (**#0b1524**) — a arte não foi recolorida, porque marca é do cliente e não do site.
- **O arranjo vertical é do cliente, não invenção nossa.** Ele veio na versão clara do kit (`logo-morais-borges-claro.png`), desenhada para fundo escuro e portanto ilegível no papel branco. O arquivo em uso remonta esse mesmo arranjo com as peças do arquivo horizontal em alta resolução, mantendo as proporções e os vãos medidos na versão do cliente. Nada foi reescalado nem redesenhado.
- **Régua de acabamento:** escritórios de advocacia internacionais de ponta, o nível de craft de produtos como Linear/Vercel/Stripe, e a imagem de referência enviada pelo usuário.

## Evidence on Hand

Nada de prova real foi fornecido ainda. Tudo abaixo está **pendente** e deve aparecer na página como placeholder claramente sinalizado, nunca como número ou nome inventado:

- **PENDENTE** — Nome completo, OAB, formação e especializações do(s) sócio(s). A pasta do projeto sugere "Dr João", mas isso não foi confirmado pelo usuário.
- **CONFIRMADO** — Mais de 14 anos de experiência. Informado pelo usuário e publicado na hero como "+ de 14 anos de experiência".
- **CONFIRMADO** — 267 avaliações no Google, com nota cinco estrelas. Informado pelo usuário e publicado na hero.
- **PENDENTE** — Número de clientes/empresas atendidas (existe, valor não informado).
- **CONFIRMADO** — Equipe de 10 pessoas, estrutura multidisciplinar. Atende presencialmente no Cariri e online em todo o Brasil.
- **CONFIRMADO** — Marcos da trajetória informados pelo usuário: fundação com o propósito de construir soluções jurídicas personalizadas, próximas e tecnicamente qualificadas; em 2018, Prêmio CDL Joazeiro Empresarial; em 2019, participação na FENALAW. **Atenção:** o nome do prêmio foi transcrito exatamente como o usuário escreveu ("Joazeiro"); a cidade da região do Cariri costuma grafar-se "Juazeiro". Confirmar a grafia oficial antes de publicar.
- **CONFIRMADO** — Fotografias do advogado fornecidas pelo usuário. Em uso: foto ambientada no escritório, à mesa e com a biblioteca jurídica ao fundo, na seção "Quem conduz o trabalho" (`escritorio-advogado.webp`, do arquivo IZA07558 da série "ESCRITÓRIO - CORES CINEMATOGRÁFICAS", com 14% do topo cortados no enquadramento). **Guardadas para uso futuro, a pedido do usuário:** o recorte sem fundo em preto e branco (`retrato-advogado.png`), que ocupava o centro da hero até a marca tomar aquele lugar, e a versão colorida do mesmo recorte (`retrato-advogado-cor.webp`). O usuário pediu explicitamente que o recorte fosse preservado para entrar em outra seção mais adiante — não apagar.
- **AUSENTE** — Nenhum depoimento, case, resultado financeiro ou logotipo de cliente foi confirmado. Não fabricar.

## Product Principles

1. **Prevenção vale mais que reação.** A promessa não é ganhar a briga; é fazer com que a briga não aconteça, ou aconteça em terreno já preparado.
2. **Nunca inventar prova.** Números, nomes, cases e depoimentos só entram quando o usuário fornecer. Placeholders são sinalizados, não maquiados.
3. **Autoridade se demonstra, não se anuncia.** Precisão na linguagem e no detalhe convence mais que superlativo.
4. **Um único destino.** Toda a página empurra para "Agendar uma consultoria". Nada compete com esse CTA.
5. **Falar de patrimônio, não de direito.** O visitante não quer serviço jurídico; quer manter o que construiu.
