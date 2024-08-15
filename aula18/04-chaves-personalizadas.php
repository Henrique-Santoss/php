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
                    $v = array (1=>"A", 3=> "B", 6=>"C", 8=>"D");
                    $v[] = "E";
                    print_r($v)
                ?>
            </pre>
        </div>
    </body>
</html>
