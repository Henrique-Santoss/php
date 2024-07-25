<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Variáveis de Variáveis</title>
        <<link rel="stylesheet" href="_css/estilo.css"/>
    </head>
    <body>
        <div>
            <?php
                $x = "abc";
                $$x = "def";
                echo "O conteúdo da variável X é $x";
                echo "<br> A variável ABC criada recebeu o valor $abc";
            ?>
        </div>
    </body>
</html>
