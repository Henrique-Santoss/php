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
                $nome = "Guanabara";
                $novo = str_pad($nome, 30, "x", STR_PAD_RIGHT);
                print("Meu professor $novo é lindo!")
            ?>
        </div>
    </body>
</html>
