<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 05</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>

        <p>
            <?php 
                $numero = $_GET["numero"] ?? 0;
                $parte_int = (int) $numero;
                $parte_frac = $numero - $parte_int;

                echo "Analisando o número <strong>". number_format($numero, 3, ",", ".") ."</strong> informado pelo usuario:";
                echo "<ul><li>A parte inteira do número eh <strong>".number_format($parte_int, 0, ",", ".")."</strong></li>";
                echo "<li>A parte fracionaria do número eh <strong>".number_format($parte_frac, 3, ",", ".")."</strong></li></ul>";
            ?>
        </p>

        <button onclick="javascript:history.go(-1)">&#x2b05;Voltar</button>
    </main>
</body>
</html>