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
                $num = $_REQUEST["real"] ?? 0;

                echo "<p>Analisando o número <strong>". number_format($num, 3, ",",".")."</strong> informado pelo usuário: </p>";

                $inteira = (int) $num;
                $fracionaria = $num - $inteira;

                echo "<br>
                <ul>
                    <li>A parte inteira do número é: <strong>".number_format($inteira, 0 , ",", ".")."</strong></li>

                    <li>A parte fracionária do número é: <strong>".number_format($fracionaria, 3, ",", ".")."</strong></li>
                
                </ul>
                
                ";
            ?>
            <br>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
        </div>
    </div>
    
</body>
</html>