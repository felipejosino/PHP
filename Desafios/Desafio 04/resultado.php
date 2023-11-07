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
                
                //Cotação
                $incio = date("m-d-Y", strtotime("-7 days"));
                $fim = date("m-d-Y");
            
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$incio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
                $dados = json_decode(file_get_contents($url), true);
        
                $cotacao = $dados["value"][0]["cotacaoCompra"];

                //Calculo de conversão para dólar
                $dolar = $real / $cotacao;

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