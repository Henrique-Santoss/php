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
            $n = isset($_GET['tab']) ? $_GET['tab']: 1;
            echo "<h1>Mostrando a Tabuada de $n</h1>";
            
            $c = 1; // contador
            $r = $n; // resultado da operação
            while ($c <=10){
                echo "$n x $c = $r<br>";
                $c++;
                $r = $n * $c;
            }
            ?>
            <br><a href="03-index.html" class="botao">Voltar</a>
        </div>
    </body>
</html>
