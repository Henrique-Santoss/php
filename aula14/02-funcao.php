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
                function soma($a, $b){
                    return $a + $b;
                }
                
                $x = 3;
                $y = 4;
                $r = soma($x, $y);
                echo "A soma entre $x e $y e igual $r";
            ?>
        </div>
    </body>
</html>
