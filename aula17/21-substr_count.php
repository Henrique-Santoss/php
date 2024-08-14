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
                $frase = "Estou aprendendo PHP no Curso em Video de PHP";
                $cont = substr_count($frase, "PHP");
                echo "PHP foi encontrado $cont vezes";
            ?>
        </div>
    </body>
</html>
