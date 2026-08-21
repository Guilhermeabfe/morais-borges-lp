# Ligar o formulário a uma planilha do Google Sheets

O site é estático, então não há servidor para receber o envio. Quem recebe é um
**Apps Script publicado como aplicativo web**, hospedado pelo próprio Google e
preso à sua planilha. Não envolve serviço de terceiros nem mensalidade.

O formulário já está pronto e validado. Falta só apontar para onde ele envia.

---

## 1. Criar a planilha

Crie uma planilha nova no Google Sheets. O nome é livre; a aba de destino é
criada sozinha pelo script, com cabeçalho.

## 2. Colar o script

Na planilha: **Extensões → Apps Script**. Apague o que estiver lá e cole:

```javascript
const ABA = 'Contatos';

function doPost(e) {
  // Dois envios no mesmo instante escreveriam na mesma linha sem isto.
  const trava = LockService.getScriptLock();
  trava.waitLock(20000);

  try {
    const planilha = SpreadsheetApp.getActiveSpreadsheet();
    let aba = planilha.getSheetByName(ABA);

    if (!aba) {
      aba = planilha.insertSheet(ABA);
      aba.appendRow(['Data', 'Nome', 'E-mail', 'Número', 'Origem']);
      aba.setFrozenRows(1);
    }

    const d = e.parameter;
    aba.appendRow([
      new Date(),
      d.nome || '',
      d.email || '',
      d.telefone || '',
      d.origem || ''
    ]);

    return json({ ok: true });
  } catch (erro) {
    return json({ ok: false, erro: String(erro) });
  } finally {
    trava.releaseLock();
  }
}

// Abrir a URL no navegador cai aqui — serve para conferir se está no ar.
function doGet() {
  return json({ ok: true, aviso: 'Endpoint ativo. Os envios chegam por POST.' });
}

function json(obj) {
  return ContentService
    .createTextOutput(JSON.stringify(obj))
    .setMimeType(ContentService.MimeType.JSON);
}
```

Salve (o ícone de disquete).

## 3. Publicar

**Implantar → Nova implantação → engrenagem → App da Web.**

Duas escolhas importam:

| Campo | Valor | Por quê |
|---|---|---|
| Executar como | **Eu** | é a sua conta que escreve na planilha |
| Quem tem acesso | **Qualquer pessoa** | o visitante do site não está logado no Google |

Se marcar "Qualquer pessoa **com Conta do Google**", os envios do site falham.

Na primeira vez o Google pede autorização e mostra um aviso de app não
verificado — é o seu próprio script. Siga em **Avançado → Acessar (nome do
projeto)**.

Copie a URL gerada. Ela termina em `/exec`.

## 4. Apontar o site para ela

Em [assets/js/main.js](assets/js/main.js), na linha da constante:

```javascript
var FORM_DESTINO = "https://script.google.com/macros/s/AKfycb.../exec";
```

Enquanto essa constante estiver vazia, o formulário valida os campos
normalmente mas **bloqueia o envio** e avisa o visitante — melhor do que
aceitar um contato que não chegaria a ninguém.

## 5. Tirar o aviso da página

Com o destino ligado, apague o parágrafo `.contact__notice` no fim da quinta
seção, em [index.html](index.html).

---

## O que chega na planilha

| Coluna | Vem de |
|---|---|
| Data | carimbo do servidor, não do visitante |
| Nome | campo Nome |
| E-mail | campo E-mail |
| Número | campo Número, já formatado como `(88) 99123-4567` |
| Origem | endereço da página onde o formulário foi enviado |

O campo escondido `assunto` é uma armadilha de robô: gente nunca o preenche.
Quando vem preenchido, o site finge sucesso e não envia nada — assim o robô não
descobre que foi barrado, e a planilha não enche de lixo.

---

## Detalhes que costumam morder

**Alterou o script? Republique.** Editar o código não muda o que está no ar.
Vá em **Implantar → Gerenciar implantações → lápis → Versão: Nova versão**.
Fazendo assim a URL continua a mesma; criando uma implantação nova, muda.

**Testar sem sair do lugar:** abra a URL `/exec` no navegador. Deve responder
`{"ok":true,...}`. Se pedir login, a permissão de acesso está errada.

**O envio não usa cabeçalhos especiais** de propósito. Os dados vão em
`form-urlencoded`, que o navegador trata como pedido simples e não antecede com
um `OPTIONS` — que o Apps Script não responderia.

---

## Sobre os dados

A planilha vai guardar nome, e-mail e telefone de pessoas reais. Quem controla
esses dados é o escritório, não o site. Vale combinar com eles quem tem acesso
à planilha e por quanto tempo os contatos ficam guardados — e, se for publicar
alguma frase sobre isso na página, ela precisa sair deles, não de mim.
