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
                //Método Simples
                $real = $_REQUEST["real"] ?? 0;
                $cotacao = $_REQUEST["cotacao"] ?? 0;

                $dolar = $real / $cotacao;
                /* //Mostrar resultado
                echo "Seus R\$" . number_format($real, 2, ",", "."). " equivalem a US\$" . number_format($dolar, 2, ",", ".");
                */

                //Formatação de moedas com internacionalização
                // Biblioteca intel(Internallization PHP)
                $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

                echo "Seus " . numfmt_format_currency($padrao, $real, "BRL"). " equivalem " . numfmt_format_currency($padrao, $dolar, "USD");


            ?>
            <br>
        <p><a href="javascript:history.go(-1)">Voltar</a></p>
        </div>
    </div>
    
</body>
</html>