<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="app">
            <h2>Resultado</h2>

            <?php 
               $num1 = $_REQUEST["num1"] ?? "Informe primeiro numero";
               $num2 = $_REQUEST["num2"] ?? "Informe segundo numero";

               if($num1 === $num2){
                echo "Informe intervalo de números diferentes";
                echo "<p><a href='javascript:history.go(-1)'>Voltar</a></p>";
                return;
               }

               if($num1 > $num2){
                $geraNum = mt_rand($num2, $num1);

                echo "<p>Gerando um número aleatório entre $num1 e $num2....<br> O valor gerado foi <strong>$geraNum</strong></p>";
                
                echo "<button onclick='javascript:document.location.reload()'>&#x1F504 Gerar</button><br><br>";

                echo "<p><a href='javascript:history.go(-1)'>Voltar</a></p>";

                
                return;
               }

               $geraNum = mt_rand($num1, $num2);

               echo "<p>Gerando um número aleatório entre $num1 e $num2....<br> O valor gerado foi <strong>$geraNum</strong></p>";

            ?>
            <button onclick="javascript:document.location.reload()">&#x1F504 Gerar</button>
            <br>
            <br>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
        </div>
    </div>
    
</body>
</html>