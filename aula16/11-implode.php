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
                $vetor = array ("Curso", "em", "Video");
                $texto = implode ("#", $vetor);
                print($texto);
            ?>
        </div>
    </body>
</html>
