<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>01 - Exercício</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
    </head>
    <body>
        <div>
            <?php
                $valor = $_GET["v"];
                $rq = sqrt($valor);
                echo "A raiz de $valor é igual a " . number_format($rq, 2);
            ?>
            <a href="01-exercicio.html" target="self_target">Voltar</a>
        </div>
    </body>
</html>
