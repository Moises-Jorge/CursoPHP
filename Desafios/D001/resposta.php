<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>

        <p>
            <?php 
                $numero = $_GET["numero"];

                echo "O número escolhido foi $numero <br>";
                echo "O seu antecessor : ". ($numero - 1). "<br>";
                echo "O seu sucessor : ". ($numero + 1). "<br>";
            ?>
        </p>
        
        <button onclick="javascript:history.go(-1)">&#x2b05; Voltar</button>
    </main>
</body>
</html>