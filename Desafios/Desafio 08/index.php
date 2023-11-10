<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 08</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $numero = $_REQUEST['num'] ?? 1;
    ?>
    <main>
        <h1>Informe um número</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="num">Número:</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">

            <input type="submit" value="Calcular Raízes">
        </form>
    </main>

    <section>
        <h2>Resultado Final</h2>
        
        <?php 
        
            $raisQuadrada = sqrt($numero); // ou $raisQuadrada = $numero ** (1/2);
            $raisCubica = $numero ** (1/3);

            echo "Analisando o <strong>número $numero</strong>, temos:<br><br>";
            echo "<ul>";
            echo "<li>A Raiz Quadrada é <strong>".number_format($raisQuadrada, 3, ",", ".")."</strong></li>";
            echo "<li>A Raiz Cúbica é <strong>".number_format($raisCubica, 3, ",",".")."</strong></li>";
            echo "</ul>";
            

        ?>

    </section>
    
</body>
</html>