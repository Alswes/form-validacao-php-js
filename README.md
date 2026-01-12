# 📝 Formulário de Contato Dinâmico com PHP

Este projeto é um sistema de formulário simples, mas completo, que demonstra a integração entre Front-end e Back-end. Ele inclui estilização moderna, validação no lado do cliente e processamento seguro no servidor.

## 🚀 Funcionalidades

- **Design Responsivo:** Interface limpa e centralizada com CSS.
- **Validação com JavaScript:** Verifica se os campos estão preenchidos e se o e-mail é válido antes do envio.
- **Back-end Seguro:** Processamento em PHP utilizando `htmlspecialchars` para evitar ataques de XSS (Cross-Site Scripting).
- **Feedback Visual:** Indicações de erro em vermelho nos campos inválidos.

## 🛠️ Tecnologias Utilizadas

- **HTML5:** Estrutura do formulário.
- **CSS3:** Estilização e layout Flexbox.
- **JavaScript (ES6):** Lógica de validação de dados.
- **PHP:** Tratamento de requisições POST e segurança de dados.

## 📂 Estrutura do Projeto

- `index.php`: Contém o formulário, o CSS e o script de validação.
- `welcome.php`: Recebe os dados e exibe a mensagem de boas-vindas com segurança.

## ⚙️ Como executar o projeto

Como o projeto utiliza PHP, você precisará de um servidor local:

1. Baixe e instale o [XAMPP](https://www.apachefriends.org/).
2. Coloque os arquivos do projeto na pasta `htdocs`.
3. Inicie o módulo Apache no painel do XAMPP.
4. Acesse no navegador: `http://localhost/nome-da-sua-pasta/index.php`.

---
Desenvolvido por Wesley Lemos