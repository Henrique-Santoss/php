<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <style>
            div > a{
                display:inline-block;
                background-color: #060425;
                box-shadow:2px 2px 3px rgba(0, 0, 0, 0.432);
                color:white;
                margin-top: 20px; 
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
                $nota1 = isset($_GET["n1"])?$_GET["n1"]:0;
                $nota2 = isset($_GET["n2"])?$_GET["n2"]:0;
                $m = ($nota1 + $nota2)/2;
                echo "A média entre ".number_format($nota1, 1)." e ".number_format($nota2, 1)." é igual a ".number_format($m, 1);
                if ($m > 7){
                    $sit = "APROVADO";
                } elseif ($m > 5 && $m <= 7){
                    $sit = "RECUPERAÇÃO";
                } else {
                    $sit = "REPROVADO";
                }
                echo "<br>Situação do aluno: <strong>$sit</strong>";
            ?>
            <br><a href="03-exercicio.html">Voltar</a>
        </div>
    </body>
</html>
