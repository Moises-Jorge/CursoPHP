<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 0;
    ?>

    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="" value="<?=$valor1?>">

            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="" value="<?=$valor2?>">

            <input type="submit" value="Somar">
        </form>
    </main>

    <section>
        <h2>Resultado da Soma</h2>

        <?php 
            $soma = $valor1 + $valor2;
            echo "<p>A soma entre $valor1 e $valor2 eh <strong>igual a $soma.</strong></p>";
        ?>
    </section>
</body>
</html>