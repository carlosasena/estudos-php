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
        $ano = $_GET["an"];
        $idade = 2025 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade";
        $tipo = ($idade>17 && $idade<65) ? "OBRIGADORIO":"NÃO OBRIGATORIO";
        echo "<br/>seu voto é $tipo"
        ?>
        
    </div>
</body>
</html>