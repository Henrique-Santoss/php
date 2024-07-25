<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eleições</title>
        <<link rel="stylesheet" href="_css/estilo.css"/>
    </head>
    <body>
        <div>
            <?php
                $ano = $_GET["an"];
                $idade = 2024 - $ano;
                echo "Quem nasceu no ano de $ano tem a idade de $idade anos <br>";
                $tipo = $idade >= 18 && $idade < 65 ? "Obrigatório" : "Não Obrigatório";
                echo "E dessa forma seu voto é $tipo";
            ?>
        </div>
    </body>
</html>
