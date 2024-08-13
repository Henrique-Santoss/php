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
                $frase = "Eu vou estudar PHP";
                $cont = str_word_count($frase, 0);
                print($cont);
            ?>
        </div>
    </body>
</html>
