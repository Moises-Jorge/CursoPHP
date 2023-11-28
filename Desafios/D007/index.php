<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        $sal_min = 50000;
        $salario = $_GET['salario'] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário</label>
            <input type="number" name="salario" value="<?=$salario?>" step="0.01">

            <p><?="Considerando o salário mínimo de <strong>". number_format($sal_min, 2, ",", "."). " Kz</strong>"?></p>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>

        <?php 
            $x_salario_min = intdiv($salario, $sal_min);
            $resto = $salario % $sal_min;

            echo "<p>Quem recebe um salário de ". number_format($salario, 2, ",", ".") ." Kz ganha <strong>$x_salario_min salários mínimos</strong> + ". number_format($resto, 2, ",", ".") ." Kz.</p>"
        ?>
    </section>
</body>
</html>