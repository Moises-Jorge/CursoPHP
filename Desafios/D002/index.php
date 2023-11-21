<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 02 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com numeros aleatorios</h1>

        <p>
            <?php 
                $min = 0;
                $max = 100;
                $num = mt_rand($min, $max);

                echo "Gerando um numero aleatorio entre $min e $max...<br>";
                echo "O valor gerado foi <strong>$num</strong> <br>";
            ?>
        </p>

        <button onclick="javascript:document.location.reload()">&#x1f504;Gerar outro</button> 
    </main>
</body>
</html>