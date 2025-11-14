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
          /* Esse exercicio, pretende demonstrar 
          o uso de operadores 
          de incremento e decremento */
          $atual = $_GET["aa"]; // Essa linha vai pegfar o ano na URL
          echo "O ano atual e $atual e o ano anterior e  ". --$atual;
        ?>
    </div>
    
</body>
</html>