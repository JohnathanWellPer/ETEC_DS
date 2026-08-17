<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Processamento - Lojas Brincos e Companhia</title>
</head>
<body>

    <h2>Cadastro Recebido com Sucesso!</h2>
    <hr>
    
    <?php
    // 1. Receber e armazenar cada informação em uma variável usando o método POST
    $nome = $_POST['nome1'];
    $idade = $_POST['idade2'];
    $profissao = $_POST['profissao3'];
    $salario = $_POST['salario4'];
    $experiencia = $_POST['experiencia5'];

    // 2. Apresentar cada informação em uma linha usando elementos HTML
    echo "<h3>Resumo dos Dados:</h3>";
    echo "<p><strong>Nome:</strong> " . $nome . "</p>";
    echo "<p><strong>Idade:</strong> " . $idade . " anos</p>";
    echo "<p><strong>Profissão:</strong> " . $profissao . "</p>";
    echo "<p><strong>Salário Pretendido:</strong> R$ " . $salario . "</p>";
    echo "<p><strong>Experiência Anterior:</strong> " . $experiencia . "</p>";

    // 3. Exibir uma mensagem personalizada utilizando, OBRIGATORIAMENTE, nome, profissão e experiência
    echo "<h3>Mensagem do RH:</h3>";
    echo "<p>Olá, <strong>" . $nome . "</strong>! Analisamos o seu perfil para a vaga de <strong>" . $profissao . "</strong>. A sua trajetória detalhada sobre <em>" . $experiencia . "</em> chamou bastante a nossa atenção. Entraremos em contato em breve!</p>";
    ?>

    <br>
    <!-- 4. Apresentar um botão para retornar ao formulário -->
    <a href="cadastro.html"><button>Voltar ao Formulário</button></a>

</body>
</html>