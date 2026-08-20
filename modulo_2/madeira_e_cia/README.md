# 🪵 Madeira e Cia Ltda. - Sistema de Cálculo de Descontos

Este projeto prático faz parte do Módulo 2 (Programador de Computadores) do curso Técnico em Desenvolvimento de Sistemas da ETEC. A aplicação simula o sistema de vendas de aniversário de uma empresa, aplicando regras de negócio para concessão de descontos com base na forma de pagamento.

## 🎯 Sobre a Atividade

O objetivo deste fichário (Agenda 03) foi identificar e corrigir falhas de lógica em um script de processamento de dados do lado do servidor (PHP), além de construir uma interface web (HTML/CSS) totalmente personalizada para a entrada de dados.

### 🔍 Erros Corrigidos no Código Original
1. **Inversão de Regras:** O código original aplicava erroneamente 10% para boletos e 8% para depósitos.
2. **Ausência de Valor Final:** A mensagem gerada não calculava e nem exibia o valor final pós-desconto.
3. **Formatação Monetária:** Os valores flutuantes não possuíam tratamento de casas decimais para o padrão de moeda (R$).

---

## 🛠️ Stack Tecnológica Aplicada

* **HTML5 & CSS3:** Interface responsiva em página única (Single Page Application) focada em usabilidade e design limpo.
* **PHP:** Programação server-side responsável por interceptar a superglobal `$_POST`, aplicar as correções condicionais da lógica de descontos, computar os valores finais e formatar a saída com duas casas decimais.

---

## 🧠 Análise Técnica e Comentário Reflexivo

### 1. Identificação de Falhas
Ao analisar o script legado fornecido pela equipe de desenvolvimento, identifiquei que as condicionais do PHP invertiam os multiplicadores das regras de negócio. O boleto calculava 10% em vez de 8%, e o depósito calculava 8% em vez de 10%. Além disso, o sistema limitava-se a repetir o valor bruto de entrada, gerando strings sem tratamento monetário e sem exibir o saldo final real devido.

### 2. Correção Lógica e Engenharia de Código
* **Corretivo Condicional:** Reestruturei o fluxo if/elseif associando os fatores matemáticos corretos às respectivas chaves textuais recebidas pelo formulário (0.08 para boleto e 0.10 para depósito).
* **Cálculo de Deságio:** Implementei a rotina aritmética de subtração para deduzir o valor calculado de desconto do montante bruto original.
* **Formatação de Dados:** Utilizei a função nativa `number_format` para converter os valores de ponto flutuante em strings formatadas no padrão monetário brasileiro (milhar por ponto e centavos por vírgula).

### 3. Experiência do Usuário (UX)
Optei por desenvolver uma arquitetura unificada de arquivo único (`index.php`), onde o formulário aponta para si mesmo (`action=""`). Isso simplifica a infraestrutura de diretórios, acelera o tempo de resposta do servidor e renderiza o bloco de resultados dinamicamente apenas após a submissão dos dados, mantendo a interface limpa e intuitiva.

---
Desenvolvido por Johnathan Pereira durante o período letivo.
