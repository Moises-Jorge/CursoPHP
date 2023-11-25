<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 03</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>

        <p>
            <?php 
                $cotacao = 0.0012; // Cotacao do dia 25-11-2023
                $kz = $_GET["valor"] ?? 0;
                $dolar = $kz * $cotacao;

                // Criando o padrao intercional de moedas
                $padrao = numfmt_create("pt_PT", NumberFormatter::CURRENCY);

                echo "Seus ".numfmt_format_currency($padrao, $kz, "AOA")." equivalem a <strong>".numfmt_format_currency($padrao, $dolar, "USD")."</strong>";
            ?>
        </p>

        <button onclick="javascript:history.go(-1)">&#x2b05;Voltar</button>
    </main>
</body>
</html>