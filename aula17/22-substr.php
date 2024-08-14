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
                $site = "Curso em Video";
                $sub = substr($site, 0, 5); 
                /* os valores dos parametros podem variar a sua vontade
                se usar apenas um numero ex: 5, o resultado será: em Video
                numero negativo ex: -5, o resultado: Video
                numero negativo mais outro numero ex: -5, 2, o resultado: Vi
                */
                echo "$sub";
            ?>
        </div>
    </body>
</html>
