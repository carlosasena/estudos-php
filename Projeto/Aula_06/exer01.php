<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $preco = $_GET["p"];
            echo "O preço do produto e R$". number_format($preco,2);
            #$preco = $preco + ($preco*10/100);
            #$preco += $preco*10/100;
            $preco -= $preco*10/100;
            echo "<br/>E o novo preço com 10% de desconto será R$". number_format($preco, 2);
        ?> 
    </div>
</body>
</html>