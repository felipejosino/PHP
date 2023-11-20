<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $saque = $_REQUEST['saque'] ?? 0;
    ?>

    <main>
        <h1>Caixa Eletronico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="saque">Qual valor voce deseja sacar ? (R$)</label>
            <input type="number" name="saque" id="saque" step="1" value="<?=$saque?>" required>

            <p><small>Notas disponiveis: R$100, R$50, R$10, R$5, R$2, R$1
            </small></p>

            <input type="submit" value="Sacar">
        </form>
    </main>
        <?php
            $resto = $saque;

            //Saque de R$100
            $tot100 = floor($resto / 100);
            $resto %= 100;
            //Saque de R$50
            $tot50 = floor($resto / 50);
            $resto %= 50;
            //Saque de R$10
            $tot10 = floor($resto / 10);
            $resto %= 10;
            //Saque de R$5
            $tot5 = floor($resto / 5);
            $resto %= 5;
            //Saque de R$2
            $tot2 = floor($resto / 2);
            $resto %= 2;
            //Saque de R$1
            $tot1 = floor($resto / 1);
         ?>

    <section>
        <h2>Saque de R$<?=number_format($saque, 2, ",", ".")?> realizado.</h2>
       <p>O caixa eletronico vai te entrgar as seguintes notas: </p>
       <ul>
        <li><img src="img/100-reais.jpg" alt="R$100"> x<?=$tot100?></li>
        <li><img src="img/50-reais.jpg" alt="R$50"> x<?=$tot50?></li>
        <li><img src="img/10-reais.jpg" alt="R$10"> x<?=$tot10?></li>
        <li><img src="img/5-reais.jpg" alt="R$5"> x<?=$tot5?></li>
        <li><img src="img/2-reais.jpg" alt="R$2"> x<?=$tot2?></li>
        <li><img src="img/1-real.jpg" alt="R$1"> x<?=$tot1?></li>
       </ul>
    </section>
    
</body>
</html>