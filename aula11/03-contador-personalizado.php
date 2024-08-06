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
            $ini = isset($_GET['ini']) ? $_GET['ini'] : 0;
            $fim = isset($_GET["fim"])? $_GET["fim"] : 0;
            $inc = isset($_GET["inc"])? $_GET["inc"] : 0;
            $valor = 0;
            
            if ($ini < $fim){
                $valor = $ini;
                while ($valor <= $fim){
                    echo "$valor ";
                    $valor += $inc;
                }
                echo "<br>Fim !";
            } elseif ($ini > $fim){
                $valor = $ini;
                while ($fim <= $valor){
                    echo "$valor ";
                    $valor -= $inc;
                }
                echo "<br>Fim !";
            }
            ?>
            <br><a href="03-contador-personalizado.html" class="botao">Voltar</a>
        </div>
    </body>
</html>
