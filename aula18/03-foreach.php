<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="_css/estilo.css"/>
    </head>
    <body>
        <div>
            <pre>
                <table border="1"><tr>

                    <?php
                        $c = range(5, 20, 2);
                        foreach($c as $v){
                            echo "<td>$v ";
                        }
                    ?>
                </table>
            </pre>
        </div>
    </body>
</html>
