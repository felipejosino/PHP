<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Capturando os dados do Forulário Retroalimentado
        $_valor1 = $_GET["v1"] ?? 0;
        $_valor2 = $_GET["v2"] ?? 0;
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="idv1" value="<?=$_valor1?>">

            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="idv2" value="<?=$_valor2?>">

            <input type="submit" value="Somar">
        </form>
    </main>

    <section id="resultado">
        <h1>Resultado da soma</h1>
        
        <?php 
            $soma = $_valor1 + $_valor2;

            echo "<p>Soma <strong>$_valor1 + $_valor2 = $soma </strong></p>";
        ?>
    </section>
</body>
</html>