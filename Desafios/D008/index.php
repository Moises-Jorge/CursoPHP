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
        $numero = $_GET['numero'] ?? 0;
    ?>

    <main>
        <h1>Informe um número</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="numero">Número</label>
            <input type="number" name="numero" value="<?=$numero?>">

            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>

        <?php 
            $raizQ = sqrt($numero);
            $raizC = pow($numero,(1/3));

            echo "Analisando o <strong>número $numero,</strong> temos:";
            echo "<ul>";
                echo "<li>A raiz quadrada é <strong>". number_format($raizQ, 3, ",") ."</strong></li>";
                echo "<li>A raiz cúbica é <strong>". number_format($raizC, 3, ",") ."</strong></li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>