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
                function soma(){
                    $p = func_get_args();
                    $t = func_num_args();
                    $s = 0;
                    for ($i = 0; $i < $t; $i ++){
                        $s += $p[$i];
                    }
                    return $s;
                }
                
                $r = soma(3, 7, 5);
                echo "A soma dos valores é $r";
            ?>
        </div>
    </body>
</html>
