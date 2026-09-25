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

Destino de conversão único da página: a seção final `#agendar`, cujo formulário pede nome, e-mail e número e fecha no botão **"Falar com a gente"**.

**O rótulo, porém, deixou de ser único.** O cabeçalho e o cartão do advogado dizem **"Agendar uma consultoria"**; o botão da hero diz **"Iniciar contato"**, como no material enviado pelo escritório. Os dois aparecem juntos na primeira tela e levam ao mesmo lugar. A objeção — dois rótulos para a mesma ação dividem o destino — foi levantada e o usuário manteve a decisão. Registrado aqui para que a divergência seja deliberada, e não esquecimento.

**Blog — estrutura pronta, conteúdo pendente.** O escopo do projeto deixou de ser uma página só: existem agora `blog.html` (listagem de notícias em cards, agrupadas em "do dia", "da semana" e "do mês") e `blog-noticia.html` (o modelo de página de notícia). O item "Blog" no menu já é link de verdade, nas duas versões.

**PENDENTE — as notícias.** Títulos, resumos, datas, fotos e o texto do modelo são todos provisórios e dizem isso de si mesmos, como na seção de avaliações. **Nada de conteúdo jurídico foi escrito:** a página sai assinada por um advogado com registro, e texto jurídico gerado sem revisão publicado sob o nome dele é risco dele, não do site. O modelo mostra a forma; o conteúdo é do escritório.

**PENDENTE — as fotografias das notícias.** Enquanto não houver imagem real, o lugar dela é um campo de papel com o monograma em marca d'água — não um retângulo cinza genérico. Ao entrar a foto, trocar o `<span class="card__foto">` por um `<img>` de mesma proporção (3:2 nos cards, 16:9 na notícia).

**PENDENTE — a âncora `#metodo`.** O item "Como trabalhamos", nos dois menus, aponta para uma seção que não existe: clicar nele não faz nada. Ou a seção é construída, ou o item sai. Sinalizado ao usuário mais de uma vez e ainda sem decisão.

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
- **Preferência permanente de direção visual:** o usuário escolheu o padrão da categoria — registro institucional clássico, serifa didone e grade centrada — em vez de um mundo visual alternativo. Na mesa de direção isso foi registrado como "azul-marinho e dourado", mas **o usuário reverteu o ouro em seguida**: mandou tirar as listras, o fundo improvisado e qualquer dourado, deixando papel branco e tinta azul como acento único. É essa a direção construída e a que vale. O tom exato dessa tinta foi definido depois pelo próprio usuário: **#013D7D**. Superfícies futuras herdam a escolha sem reabrir a rodada de direção.
- **Cor da tinta definida pelo usuário: `#013D7D`.** Ele pediu, com o hex explícito, que o azul da página passasse a ser esse — o mesmo azul do material que enviou. Toda a família derivada (tons de texto, filetes, sombras, as duas faixas escuras) foi recalculada a partir dele, preservando os contrastes que o sistema já tinha. O azul novo é bem mais claro que o marinho anterior, então **todo branco com alfa perdeu contraste sobre as faixas**: os valores de texto que caíram abaixo de 4,5:1 foram levantados.
- **Identidade visual confirmada.** O usuário forneceu o logotipo em três versões. Em uso: o lockup **horizontal** de uma cor só (`logo-morais-borges.webp`) no cabeçalho e como assinatura de fecho na seção de contato; o lockup **vertical** (`logo-morais-borges-empilhado.webp`) como peça central da hero. O monograma isolado virou favicon. **A arte foi recolorida** do navio original **#00243c** para o **#013D7D** do site. Isso contraria o registro anterior deste arquivo, que dizia que marca é do cliente e não se recolore — a decisão mudou porque o usuário trocou o azul da página, e manter o navio antigo deixaria dois azuis diferentes na mesma tela, que é justamente o que a troca eliminava. Os três arquivos originais do cliente continuam versionados em `assets/img/`, intactos.
- **O arranjo vertical é do cliente, não invenção nossa.** Ele veio na versão clara do kit (`logo-morais-borges-claro.png`), desenhada para fundo escuro e portanto ilegível no papel branco. O arquivo em uso remonta esse mesmo arranjo com as peças do arquivo horizontal em alta resolução, mantendo as proporções e os vãos medidos na versão do cliente. Nada foi reescalado nem redesenhado.
- **Régua de acabamento:** escritórios de advocacia internacionais de ponta, o nível de craft de produtos como Linear/Vercel/Stripe, e a imagem de referência enviada pelo usuário.

## Evidence on Hand

Nada de prova real foi fornecido ainda. Tudo abaixo está **pendente** e deve aparecer na página como placeholder claramente sinalizado, nunca como número ou nome inventado:

- **CONFIRMADO** — Nome do advogado: **João Borges Filho**. Informado pelo usuário e publicado na seção "Quem conduz o trabalho", além do texto alternativo da fotografia do escritório. Confirma, de passagem, o palpite que a pasta do projeto sugeria ("Dr João") e que até aqui não tinha respaldo.
- **CONFIRMADO** — Registro: **OAB CE/24.881**, informado pelo usuário e publicado na ficha, exatamente com a grafia que ele passou. Com isso **não resta nenhum placeholder de dado na página** — o marcador `.ph` e o aviso `.profile__notice` foram removidos. Formação e especializações continuam não informadas, mas não têm lugar reservado na página.
- **A seccional é o Ceará**, o que reforça a dúvida abaixo sobre o nome do prêmio: a cidade do Cariri cearense é **Juazeiro do Norte**. (Juazeiro, sem "do Norte", fica na Bahia.) Em nenhuma das duas a grafia oficial é "Joazeiro".
- **CONFIRMADO** — Mais de 14 anos de experiência. Informado pelo usuário; hoje aparece no subtítulo da hero e na seção "Quem conduz o trabalho".
- **CONFIRMADO** — 267 avaliações no Google, com nota cinco estrelas. Informado pelo usuário; hoje aparece na seção de avaliações. **Saiu da hero** quando os balões de mensagem foram removidos.
- **CONFIRMADO** — Texto da hero, fornecido pelo usuário em imagem e transcrito literalmente: título "Seu patrimônio protegido. / Sua empresa segura. / Seu futuro garantido." e subtítulo "Há mais de 14 anos defendendo empresários em Direito Tributário e Empresarial — presencialmente no Cariri e online em todo o Brasil."
- **CONFIRMADO PELO USUÁRIO, MAS NÃO VERIFICADO — "o escritório mais avaliado do Cariri".** A frase veio na mesma imagem e o usuário pediu explicitamente que entrasse, junto com as estrelas e o botão. Está publicada no selo da hero. Diferente do resto desta lista, **é uma afirmação comparativa contra concorrentes nomeáveis**, do tipo que o cliente precisa poder sustentar. Não foi inventada aqui — é material do próprio escritório —, mas continua sem verificação independente.
- **Nota grafada como "5,0", não "5.0".** O usuário ditou "cinco ponto zero"; a página usa vírgula porque é pt-BR e porque a seção de avaliações já publicava "5,0". Uniformidade dentro do site prevaleceu sobre a transcrição literal da pontuação.
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
