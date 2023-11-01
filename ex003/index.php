<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Tipos Primitivos em PHP</h1>
    
    <?php 
    // 0x = Hexadecimal, 0b = Binário, 0 = Octal
    // $num = 010;
    // echo "<p>O valor da variável é $num</p>";
    
    echo "<h2>Tipos primitivos Escalares<h2>";
    // String, Int(ou Integer), Float(ou Double), Boleano(true/false)

    $valor = 300;
    $valor1 = 30.1;
    $valor2 = 3e2;
    $valor3 = true;
    $valor4 = "Teste";

    //Testar os tipos primitivos
    echo "<h3>Exibir o tipo com var_dump();</h3><br>";
    var_dump($valor);
    var_dump($valor1);
    var_dump($valor2);
    var_dump($valor3);
    var_dump($valor4);

    echo "<hr>";

    //Forçar o valor do tipo primitivo
    echo "<h3>Forçar o tipo primitivo. Coerção.</h3> <br>";
    $valor5 = (integer) 3e2; // 3 x 10(2)

    var_dump($valor5);

    echo "<hr>";

    $false = false; // Valor false, dentro de echo ou print é vazio
    $true = true; // Valor true, dentro de echo ou print é 1
    var_dump($false , $true);
    echo "<br><br>";
    echo "O valor é ? <br> $false - $true";

    echo "<hr>";

    echo "<h2>Tipos Primitivos Compostos</h2>"; 
    //Array e Object
    
    //Array
    $vetor = [2, 4.5, "Maria", true ,3e2];
    var_dump($vetor);

    echo "<br><br>";

    //Object
    class Pessoa{
        private string $nome;
        private string $sobrenome;
        private int $idade;
    }

    $p = new Pessoa;
    var_dump($p);
    
    echo "<hr>";


    echo "<h2>Tipos Primitivos Especiais</h2>"; 
    //null, resource, callabe, mixed



    ?>
    
</body>
</html>