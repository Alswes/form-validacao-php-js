# 📝 Formulário de Contato Dinâmico com PHP

Projeto full-stack simples e completo, demonstrando integração entre Front-end e Back-end com foco em segurança e experiência do usuário.

[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/wesley-lemos-profissional)
[![GitHub](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)](https://github.com/alswes/)

---

## 📸 Demonstração

![Interface do Formulário](img/screenshot-form.jpg)
*Formulário com CSS moderno e validação em tempo real.*

![Página de Boas-vindas](img/screenshot-welcome.jpg)
*Página welcome.php processando e exibindo os dados com segurança.*

---

## 🚀 Funcionalidades

- **Design responsivo:** Interface centralizada com Flexbox e animação de entrada.
- **Validação no cliente:** JavaScript verifica nome vazio e formato de e-mail antes do envio.
- **Back-end seguro:** PHP com `htmlspecialchars`, `trim` e `filter_var` para proteção contra XSS e dados inválidos.
- **Feedback visual:** Mensagens de erro inline em cada campo, sem `alert()`.
- **Página de resposta estilizada:** Resultado exibido com o mesmo visual do formulário.

---

## 🛠️ Tecnologias

| Camada    | Tecnologia       | Uso                                      |
|-----------|------------------|------------------------------------------|
| Front-end | HTML5            | Estrutura semântica do formulário        |
| Front-end | CSS3             | Estilização, Flexbox e variáveis CSS     |
| Front-end | JavaScript (ES6) | Validação de campos antes do envio       |
| Back-end  | PHP              | Processamento POST e sanitização de dados|

---

## 📂 Estrutura do Projeto

```
/
├── index.html          # Formulário, CSS e script de validação
├── welcome.php         # Recebe os dados e exibe boas-vindas
└── img/
    ├── screenshot-form.jpg
    └── screenshot-welcome.jpg
```

---

## ⚙️ Como Executar

Este projeto requer PHP. A forma mais simples é via **XAMPP**:

1. Baixe e instale o [XAMPP](https://www.apachefriends.org/).
2. Copie os arquivos para `C:/xampp/htdocs/meu-formulario/`.
3. Inicie o módulo **Apache** no painel do XAMPP.
4. Acesse no navegador: `http://localhost/meu-formulario/index.html`

---

Desenvolvido por **Wesley Lemos**

