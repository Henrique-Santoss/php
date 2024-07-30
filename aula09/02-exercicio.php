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
                $a = isset ($_GET["ano"])?$_GET["ano"]:1900;
                $i = date("Y") - $a;
                echo "Você nasceu em $a e terá $i anos<br>";
                if ($i < 16){
                    $v = "não vota";
                } else{
                    if (($i >= 16 && $i < 18) || ($i > 65)){
                        $v = "voto opcional";
                    } else{
                        $v = "voto obrigatório";
                    }
                }
                echo "Com essa idade, $v";
            ?>
            <br><a href="02-exercicio.html">Voltar</a>
        </div>
    </body>
</html>
