<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        // $minimo = 1_380.60;
        $minimo = 1000;
        $salario = $_REQUEST['inputSalario'] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="inputSalario">Salário (R$)</label>
            <input type="number" name="inputSalario" id="idInputSalario" step="0.01" value="<?=$salario?>">
            <p>*Considerando o salário mínimo de <strong>R$<?= number_format($minimo, 2, ",", ".") ?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            $totalSalario = intdiv($salario, $minimo);
            $diferenca = $salario % $minimo;

            echo "<p>Quem recebe o salário de R\$".number_format($salario, 2, ",", ",")." Ganha <strong>$totalSalario salários mínimos</strong> + R\$".number_format($diferenca, 2, ",", ".")."</p>";
        ?>
    </section>
    
</body>
</html>