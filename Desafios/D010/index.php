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
        $dataActual = date("Y");
        $dataLimite = $dataActual - 1;
        $anoNasci = $_GET['anoNasci'] ?? 2000;
        $anoActual = $_GET['anoActual'] ?? $dataActual;
    ?>

    <main>
        <h1>Calculando a sua idade</h1>

        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anoNasci">Em que ano você nasceu?</label>
            <input type="number" name="anoNasci" value="<?=$anoNasci?>" max="<?=$dataLimite?>">
            <label for="anoActual">Quer saber sua idade em que ano?(atualmente estamos em <strong><?=$dataActual?></strong>)</label>
            <input type="number" name="anoActual" value="<?=$anoActual?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <h2>Resultado</h2>

        <?php 
            $idade = $anoActual - $anoNasci;

            echo "<p>Quem nasceu em $anoNasci vai ter <strong>$idade anos</strong> em $anoActual!</p>";
        ?>
    </section>
</body>
</html>