<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
      .cxmedia {
        background: #232323;
        color: white;
      }
    </style>
  </head>
  <body>
    <div>
      <?php
        $n1 = isset($_GET["nt1"])?$_GET["nt1"]:"preencher com a primeira nota";
        $n2 = isset($_GET["nt2"])?$_GET["nt2"]:"preencher com a segunda nota";
        $media = ($n1+$n2)/2;
        if ($media < 5) {
          $avaliacao = "REPROVADO";
        }
        elseif ($media >= 5 && $media < 7) {
          $avaliacao = "RECUPERAÇÃO";
        }
        else {
          $avaliacao = "APROVADO";
        }
        echo "A média entre $n1 e $n2 é igual a $media <br>";
        echo "Situação do aluno: $avaliacao";
      ?>
      <br>
      <br><a href="exer03.html" class="cxmedia">Voltar</a>
    </div>
  </body>
</html>
 