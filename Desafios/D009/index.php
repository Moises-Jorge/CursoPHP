<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor1 = $_GET['valor1'] ?? 0;
        $valor2 = $_GET['valor2'] ?? 0;
        $peso1 = $_GET['peso1'] ?? 1;
        $peso2 = $_GET['peso2'] ?? 1;
    ?>

    <main>
        <h1>Médias Aritméticas</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor1">1º Valor</label>
            <input type="number" name="valor1" value="<?=$valor1?>">
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" value="<?=$peso1?>">

            <label for="valor2">2º Valor</label>
            <input type="number" name="valor2" value="<?=$valor2?>">
            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" value="<?=$peso2?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        <h2>Cálculo das Médias</h2>

        <?php 
            $media_ari = ($valor1 + $valor2) / 2;
            $mediaP = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2);

            echo "<p>Analisando os valores <strong>$valor1 e $valor2</strong>:</p>";
            echo "<ul>";
                echo "<li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a ". number_format($media_ari, 2, ",") ."</li>";
                echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a ". number_format($mediaP, 2, ",") ."</li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>