<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
  </head>
  <body>
    <div>
        <?php
          $uf = isset($_GET["uf"]) ? $_GET["uf"] : "";

          switch ($uf) {
            case "Acre":
            case "Amapá":
            case "Amazonas":
            case "Pará":
            case "Rondônia":
            case "Roraima":
            case "Tocantins":
              echo "O estado <strong>$uf</strong> pertence à região <strong>Norte</strong>.";
              break;

            case "Alagoas":
            case "Bahia":
            case "Ceará":
            case "Maranhão":
            case "Paraíba":
            case "Pernambuco":
            case "Piauí":
            case "Rio Grande do Norte":
            case "Sergipe":
              echo "O estado <strong>$uf</strong> pertence à região <strong>Nordeste</strong>.";
              break;

            case "Distrito Federal":
            case "Goiás":
            case "Mato Grosso":
            case "Mato Grosso do Sul":
              echo "O estado <strong>$uf</strong> pertence à região <strong>Centro-Oeste</strong>.";
              break;

            case "Espírito Santo":
            case "Minas Gerais":
            case "Rio de Janeiro":
            case "São Paulo":
              echo "O estado <strong>$uf</strong> pertence à região <strong>Sudeste</strong>.";
              break;

            case "Paraná":
            case "Rio Grande do Sul":
            case "Santa Catarina":
              echo "O estado <strong>$uf</strong> pertence à região <strong>Sul</strong>.";
              break;

            default:
              echo "Nenhum estado selecionado.";
          }
        ?>
        <br>
        <a href="exer03.html" class="botao">Voltar</a>
    </div>
  </body>
</html>