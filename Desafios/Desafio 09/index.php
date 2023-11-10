<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 09</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $valor1 = $_REQUEST['v1'];
        $valor2 = $_REQUEST['v2'];

        $peso1 = $_REQUEST['p1'];
        $peso2 = $_REQUEST['p2'];
    ?>
    <main>
        <h1>Média Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            <label for="v1">1° Valor:</label>
            <input type="number" name="v1" id="v1" min="1" value="<?=$valor1?>" required>

            <label for="p1">1° Peso</label>
            <input type="number" name="p1" id="p1" min="1"  value="<?=$peso1?>" required>

            <label for="v2">2° Valor:</label>
            <input type="number" name="v2" id="v2" min="1"  value="<?=$valor2?>" required>

            <label for="p2">2° Peso</label>
            <input type="number" name="p2" id="p2" min="1"  value="<?=$peso2?>" required>

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section>
        
        <?php 
            $mediaAritmetica = ($valor1 + $valor2) / 2;
            $mediaPonderada = ($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2);
        ?>
        
        <h2>Analisando os valores <?=$valor1?> e <?=$valor2?></h2>

        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre o valores é igual a <?=number_format($mediaAritmetica, 2, ",", ".")?></li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=$peso1?> e <?=$peso2?> é igual a <?=number_format($mediaPonderada, 2, ",", ".")?></li>
        </ul>

    </section>
    
</body>
</html>