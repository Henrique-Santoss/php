<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>02 - Exercício</title>
        <link rel="stylesheet" href="_css/estilo.css"/>
    </head>
    <body>
        <div>
            <?php
                $nome = isset($_GET["nome"])?$_GET["nome"]:"[NÃO INFORMADO]";
                $ano = isset($_GET["ano"])?$_GET["ano"]:0;
                $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[SEM SEXO]";
                $idade = date("Y") - $ano;
                echo "$nome é $sexo e tem $idade anos<br>";
            ?>
            <a><a href="02-exercicio.html" target="target">Voltar</a>
        </div>
    </body>
</html>
