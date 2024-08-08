<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="_css/estilo.css"/>
    </head>
    <body>
        <div>
            <?php
            $n = isset($_GET["num"]) ? $_GET["num"] : 0;
            $totm = 0;
            echo "<h1>Analisando o número $n ...</h1>";
            echo "Valores múltiplos: ";
            for($c = 1; $c <=$n; $c++){
                if ($n % $c == 0){
                    echo "$c ";
                    $totm ++;
                }
            }
            echo "<br>";
      
            echo "Total de múltiplos: $totm<br>";
            echo "Resultado: $n" . $totm = $totm == 2 ? "<strong> É PRIMO</strong>" :
                    "<strong> NÃO É PRIMO</strong>";
            ?>
            <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
        </div>
    </body>
</html>
