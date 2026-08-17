# 🏢 Lojas Brincos e Companhia - Cadastro de Colaboradores

Este projeto prático faz parte do **Módulo 2 (Programador de Computadores)** do curso Técnico em Desenvolvimento de Sistemas da ETEC (Centro Paula Souza).

## 🎯 Sobre a Atividade
O objetivo deste fichário (Agenda 02) foi desenvolver um sistema de cadastro de novos colaboradores, aplicando os conceitos iniciais de scripts no lado do servidor. A aplicação foca na comunicação eficiente entre o front-end (formulário) e o back-end (processamento de dados).

## 🛠️ Stack Tecnológica Aplicada
* **HTML5:** Estruturação do formulário de coleta de dados utilizando atributos específicos para requisição.
* **CSS3 (W3.CSS):** Estilização ágil da interface, priorizando usabilidade e design limpo.
* **PHP:** Script *server-side* responsável por capturar as requisições, armazenar em variáveis e renderizar a resposta dinâmica no navegador.

## ⚙️ Lógica e Funcionalidades
1. **Coleta de Dados:** Formulário validado para receber Nome, Idade, Profissão, Salário Pretendido e Experiência.
2. **Método POST:** Envio seguro das informações utilizando o protocolo HTTP `POST`, mantendo os dados ocultos na URL.
3. **Processamento Dinâmico (`processaCadastro.php`):** O servidor intercepta a superglobal `$_POST`, organiza os dados e exibe um resumo em tela acompanhado de uma mensagem personalizada de feedback ao usuário.

---
*Desenvolvido por Johnathan Pereira durante o período letivo.*
