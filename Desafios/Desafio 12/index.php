<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $total = $_REQUEST['seg'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" step="1" value="<?=$total?>" required>

            <input type="submit" value="Calcular">
        </form>
    </main>
        <?php

            $sobra = $total;
            
            //Total de Semanas
            $semana = (int)($sobra / 604_800);
            $sobra = $sobra % 604_800;

            //Total de dias
            $dias = (int)($sobra / 86_400);
            $sobra = $sobra % 86_400;

            //Total de horas
            $horas = (int)($sobra / 3_600);
            $sobra = $sobra % 3_600;

            // Total de minutos
            $minutos = (int)($sobra / 60);
            $sobra = $sobra % 60;

            //Total de segundos
            $segundos = $sobra;

         ?>

    <section>
        <h2>Totalizando...</h2>
        <p>Analisando o valor que você digitou, <strong><?=number_format($total, 0, ",", ".")?> segundos </strong>equivalem a um total de :</p>
        <ul>
            <li><?=$semana?> semanas</li>
            <li><?=$dias?> dias</li>
            <li><?=$horas?> horas</li>
            <li><?=$minutos?> minutos</li>
            <li><?=$segundos?> segundos</li>
        </ul>
    </section>
    
</body>
</html>