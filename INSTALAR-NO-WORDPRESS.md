# Instalar o tema no WordPress

O arquivo a enviar é **`wp-tema/morais-borges.zip`** (1,2 MB). Ele carrega o
tema inteiro: templates, CSS, JavaScript, fontes e a arte da marca. Não é
preciso FTP nem gerenciador de arquivos — tudo sobe pelo painel.

> **O site está no ar e tem conteúdo real.** Os passos abaixo estão na ordem em
> que devem ser feitos, e o passo 1 não é opcional.

---

## Antes: o que vai mudar, e o que não vai

**Não se perde nada de conteúdo.** Artigos, páginas, comentários, categorias,
imagens da biblioteca de mídia e as configurações do All in One SEO vivem no
banco de dados, não no tema. Trocar de tema troca a aparência, não o acervo.
Os endereços dos artigos também não mudam.

**Muda a aparência de tudo, não só da página inicial.** É o que foi pedido. A
consequência concreta: as páginas construídas no **Elementor** perdem o desenho
que têm hoje. O Elementor continua instalado e o conteúdo continua lá, mas ele
foi feito para outro tema, e o resultado vai precisar de revisão página por
página. A assinatura do Elementor Pro está vencida, o que agrava isso.

**A volta atrás é um clique.** O tema antigo continua instalado. Em Aparência →
Temas, ativar o anterior devolve o site ao estado de agora.

---

## 1. Backup — antes de qualquer coisa

Você tem o **UpdraftPlus** instalado.

1. **Configurações → UpdraftPlus**
2. Botão **"Fazer backup agora"**
3. Marque **banco de dados** e **arquivos**
4. Espere terminar e confirme que o backup aparece na lista abaixo

Sem backup concluído, não siga.

## 2. Enviar o tema

1. **Aparência → Temas**
2. Botão **"Adicionar novo tema"**, no topo
3. Botão **"Enviar tema"**
4. Escolha o arquivo `morais-borges.zip`
5. **"Instalar agora"**

Ao terminar, **não clique em "Ativar" ainda.**

## 3. Ver antes de ativar

Na tela de temas, passe o mouse sobre **Morais Borges** e clique em
**"Visualizar"**. O WordPress mostra o site inteiro com o tema novo, sem trocar
nada para quem está visitando. Navegue: página inicial, um artigo, a listagem.

Se algo estiver errado, feche a visualização. Nada foi alterado.

## 4. Ativar

Botão **"Ativar"** no tema Morais Borges.

## 5. Apontar a listagem de artigos

Este passo é necessário, e sem ele o blog não aparece.

1. **Páginas → Adicionar nova**, com o título **Blog**, e publique. (Deixe o
   conteúdo vazio: quem preenche a página é o tema.) Se já existir uma página
   assim, use a que existe.
2. **Configurações → Leitura**
3. Em "Sua página inicial exibe", escolha **"Uma página estática"**
4. **Página inicial:** qualquer página — o tema ignora o conteúdo dela e mostra
   a landing page
5. **Página de posts:** a página **Blog**
6. **Salvar alterações**

> **Por que isso.** Enquanto a opção estiver em "Seus posts mais recentes", o
> WordPress usa a landing page como início e não sobra endereço para a
> listagem de artigos. O item "Blog" do menu cairia na própria página inicial.

## 6. Limpar o cache

**WP Rocket → Limpar o cache.** Sem isso, quem já visitou o site continua
recebendo a versão antiga por algum tempo.

---

## Depois: o que conferir

**A listagem de artigos.** Abra a página Blog. Os artigos devem aparecer
agrupados por ano, com o mais recente ocupando a faixa larga do topo.

**As imagens dos cards.** O card usa a **imagem destacada** do post. Artigo sem
imagem destacada aparece com um campo de papel e o monograma — não fica
quebrado, mas fica sem foto. Para corrigir: abrir o post, painel lateral,
**Imagem destacada**.

**Os 446 comentários.** O contador no menu costuma indicar fila de moderação, e
uma fila desse tamanho num site de escritório quase sempre é spam. Vale abrir
**Comentários** e olhar antes de aprovar qualquer coisa. O tema exibe apenas
comentários aprovados.

**As páginas do Elementor.** É aqui que vai aparecer trabalho. Liste em
**Páginas** e abra uma a uma.

---

## Como publicar uma notícia, daqui em diante

É a parte que justifica ter o WordPress: **Posts → Adicionar novo**, escrever,
definir a **imagem destacada** e publicar. A listagem se atualiza sozinha, o
artigo ganha endereço próprio e entra no grupo do ano corrente. Nenhum arquivo
precisa ser editado.

---

## Se algo der errado

**O site ficou em branco.** Aparência → Temas e ative o tema anterior. Se o
painel também estiver em branco, o backup do passo 1 é o caminho — o
UpdraftPlus restaura pelo próprio painel, e a hospedagem também consegue
restaurar.

**A landing page apareceu, mas sem estilo.** É cache. Limpe o WP Rocket e
recarregue com Ctrl+Shift+R (Cmd+Shift+R no Mac).

**O menu "Blog" leva para a página inicial.** Falta o passo 5.

---

## O que o tema não faz, e é deliberado

**O menu da barra não é editável em Aparência → Menus.** Os cinco itens são
fixos porque três deles são âncoras de seções da página inicial, e um menu
editável permitiria apontá-los para lugares que não existem. Mudar os itens é
uma edição no `header.php`.

**O logotipo não é campo de upload.** O lockup tem proporção e recorte próprios,
e um arquivo arbitrário quebraria a barra flutuante.

**A listagem mostra todos os artigos de uma vez**, sem paginação, porque o
agrupamento por ano exige o ano inteiro na mesma página. Se um dia a lista
pesar, basta remover o filtro `morais_listagem_completa` no `functions.php`: a
paginação já está pronta e aparece sozinha.
