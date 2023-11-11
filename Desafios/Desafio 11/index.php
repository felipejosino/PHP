<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $preco = $_REQUEST['preco'] ?? '0';
        $reaj = $_REQUEST['reaj'] ?? '0';
    ?>
    <main>
        <h1>Reajustador de Preço</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">

            <label for="reaj">Qual será o percentual de reajuste? (<strong><span id="perc">?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudarValor()" value="<?=$reaj?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>
        <?php
            $aumento = ($preco * $reaj) / 100;
            $novoPreco = $preco + $aumento; 
         ?>

    <section>
        <h2>Resultado</h2>
        <p>O produto o que custava R$<?=number_format($preco, 2, ",", ".")?>, com <strong><?=$reaj?>% de aumento</strong> vai passar a custar <strong>R$ <?=number_format($novoPreco, 2, ",", ".")?> </strong> a partir de agora.</p>
    </section>

    <script>
        //Declarações automáticas
        mudarValor()

        function mudarValor(){
            perc.innerText = reaj.value
        }
    </script>
    
</body>
</html>