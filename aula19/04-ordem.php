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
                <?php
                    $v = array("A", "J", "M", "X", "K");
                    print_r($v);
                    rsort($v);
                    print_r($v);
                ?>
            </pre>
        </div>
    </body>
</html>
