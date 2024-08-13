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
                $nome = "   Jose da Silva   ";
                echo (strlen($nome));
                echo "<br>";
                $novo = rtrim($nome);
                echo $novo;
                echo "<br>";
                echo(strlen($novo));
            ?>
        </div>
    </body>
</html>
