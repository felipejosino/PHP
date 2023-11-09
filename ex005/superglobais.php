<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <!--Superglobais do PHP 
            * $_GET         * $_SESSION
            * $_POST        * $_ENV
            * $_REQUEST     * $_ENV
            *$_COOKIE       * $_SERVER
            * $_FILES       * $GLOBALS
             -->
            <?php 
                echo "<h1>Superglobal GET</h1>";
                var_dump($_GET);
                echo "<br>";

                echo "<h1>Superglobal POST</h1>";
                var_dump($_POST);
                echo "<br>";

                echo "<h1>Superglobal REQUEST</h1>";
                var_dump($_REQUEST);
            ?>
        </pre>
    </main>
    
</body>
</html>