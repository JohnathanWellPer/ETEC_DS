<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promoção Madeira e Cia</title>
    
    <style>
        /* Estilos para deixar o formulário agradável e funcional */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
        }
        .caixa-principal {
            background-color: #ffffff;
            width: 100%;
            max-width: 500px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .grupo-form {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Garante que o padding não quebre a largura */
        }
        button {
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }
        button:hover {
            background-color: #218838;
        }
        .area-resultado {
            margin-top: 25px;
            padding: 15px;
            background-color: #e9ecef;
            border-left: 5px solid #28a745;
            border-radius: 5px;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="caixa-principal">
        <h2>Promoção de Aniversário</h2>
        
        <form method="POST" action="">
            <div class="grupo-form">
                <label for="txtNome">Nome do Cliente:</label>
                <input type="text" name="txtNome" id="txtNome" required placeholder="Digite seu nome">
            </div>
            
            <div class="grupo-form">
                <label for="txtValorCompra">Valor da Compra (R$):</label>
                <input type="number" name="txtValorCompra" id="txtValorCompra" step="0.01" min="0.01" required placeholder="Ex: 150.00">
            </div>
            
            <div class="grupo-form">
                <label for="cmbPag">Forma de Pagamento:</label>
                <select name="cmbPag" id="cmbPag" required>
                    <option value="">Selecione...</option>
                    <option value="deposito">Depósito (10% de desconto)</option>
                    <option value="boleto">Boleto (8% de desconto)</option>
                    <option value="cartaoCredito">Cartão de Crédito (Sem desconto)</option>
                </select>
            </div>
            
            <button type="submit">Calcular Pagamento</button>
        </form>

        <?php
        // Verifica se o formulário foi disparado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recebe os dados do formulário
            $nome = $_POST["txtNome"];
            $valorCompra = floatval($_POST["txtValorCompra"]);
            $formaPagamento = $_POST["cmbPag"];
            
            $desconto = 0;
            $valorFinal = 0;
            $textoPagamento = "";

            // CORREÇÃO DOS ERROS DE LÓGICA
            if ($formaPagamento == "cartaoCredito") {
                $desconto = 0;
                $textoPagamento = "Cartão de Crédito";
            } elseif ($formaPagamento == "boleto") {
                // Erro corrigido: de 0.1 para 0.08 (8%)
                $desconto = $valorCompra * 0.08; 
                $textoPagamento = "Boleto";
            } elseif ($formaPagamento == "deposito") {
                // Erro corrigido: de 0.08 para 0.10 (10%)
                $desconto = $valorCompra * 0.10; 
                $textoPagamento = "Depósito";
            }

            // CORREÇÃO: Cálculo do valor final (Compra - Desconto)
            $valorFinal = $valorCompra - $desconto;

            // Formatação dos valores para exibir sempre com 2 casas decimais e padrão BR (vírgula)
            $valorCompraFormatado = number_format($valorCompra, 2, ',', '.');
            $descontoFormatado    = number_format($desconto, 2, ',', '.');
            $valorFinalFormatado  = number_format($valorFinal, 2, ',', '.');

            // Exibição do resultado final
            echo "<div class='area-resultado'>";
            echo "<p>Olá, <strong>$nome</strong>! Sua compra de R$ $valorCompraFormatado foi realizada com <strong>$textoPagamento</strong>.</p>";
            
            if ($desconto > 0) {
                echo "<p>Seu desconto aplicado é de: R$ $descontoFormatado.</p>";
            } else {
                echo "<p>Não há desconto para esta forma de pagamento.</p>";
            }
            
            echo "<h3>Valor Final a Pagar: R$ $valorFinalFormatado</h3>";
            echo "</div>";
        }
        ?>
    </div>

    </body>
</html>
