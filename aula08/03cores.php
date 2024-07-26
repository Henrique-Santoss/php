<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>03 - Exercício</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <?php
            $txt = isset($_GET["t"])?$_GET["t"]:"Texto Genérico";
            $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
            $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
            echo "$txt <br>";
        ?>
        <style>
            span.texto{
                color: <?php echo $cor; ?>;
                font-size: <?php echo $tam; ?>;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
                echo "<span class='texto'>$txt</span><br>";
            ?>
            <a href="03-exercicio.html" target="target">Voltar</a>
        </div>
    </body>
</html>
