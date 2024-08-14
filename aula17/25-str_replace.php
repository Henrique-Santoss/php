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
                $frase = "Gosto de estudar Matemática! Matemática é muito legal!";
                $novafrase = str_replace("Matemática", "PHP", $frase);
                // pode-se usar str_ireplace para ignorar a caixa
                echo "$novafrase";
            ?>
        </div>
    </body>
</html>
