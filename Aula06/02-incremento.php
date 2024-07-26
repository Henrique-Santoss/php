<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Incremento</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
    </head>
    <body>
        <div>
            <?php
                /*
                    Esse exercício pretende demonstrar o uso
                    de operadores de incremento e decremento
                */
                $atual = $_GET["aa"]; // Essa linha vai pegar o anp na URL
                echo "O ano atual é $atual e o ano anterior é " . --$atual;
            ?>
        </div>
    </body>
</html>
