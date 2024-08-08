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
                $n = isset($_GET['num']) ? $_GET['num'] : 1;
                for ($c = 1; $c <= 10; $c ++){
                    $r = $c * $n;
                    echo "$n x $c = $r<br>";
                }
            ?>
            <br><a href="javascript:history.go(-1)" class="botao">Voltar</a>
        </div>
    </body>
</html>
