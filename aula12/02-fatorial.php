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
            $v = isset($_GET["val"]) ? $_GET["val"] : 1;
            echo "<h1>Calculando o valor de $v .</h1>";
            $c = $v;
            $tot = 1;
            do{
                $tot = $tot * $c;
                $c --;
            } while ($c >= 1);
            echo "<h2>$v ! = $tot</h2>";
            ?>
            <br><a href="02-index.html" class="botao">Voltar</a>
        </div>
    </body>
</html>
