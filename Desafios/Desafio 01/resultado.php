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
                $num = $_REQUEST["num"] ?? "1"; // Levou em consideração 1 caso nao digitar nada
                $sucessor = $num + 1;
                $antecessor = $num - 1;

                echo "<p>Antecessor é <strong>$antecessor</strong></p>";
                echo "<p><strong>Voce escolheu $num</strong></p>";
                echo "<p>Sucessor é <strong>$sucessor</strong><br></p>";
            ?>
            <br>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
        </div>
    </div>
    
</body>
</html>