<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php 
            $nome = $_GET["nome"] ?? "sem nome"; // Caso na super global não tenha valores
            $sobrenome = $_GET["sobrenome"] ?? "sem sobrenome";

            echo "É um prazer te conhecer, $nome $sobrenome! Este é o meu site!";
        ?>
    </main>

    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</body>
</html>