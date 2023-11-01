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
            <h2>Bem Vindo</h2>

            <?php 
            //Super Global: $_GET, $_POST e $_REQUEST
            //var_dump($_REQUEST)

            $nome = $_REQUEST["nome"] ?? "sem nome";
            $sobrenome = $_REQUEST["sobrenome"] ?? "sem sobrenome";

            echo "<p>Prazer em conhecer voce,  <strong>$nome $sobrenome</strong></p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
        </div>
    </div>
    
</body>
</html>