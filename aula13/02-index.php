<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="_css/estilo.css"/>
    </head>
    <body>
        <div>
            <form method="get" action="02-tabuada.php">
                <label for="inum">Número: </label>
                <select name="num" id="inum">
                    <?php
                        for($c = 1; $c <=10; $c ++){
                            print "<option>$c</option>";
                        }
                    ?>
                </select>
                <input type="submit" class="botao" value="Tabuada">
            </form>
        </div>
    </body>
</html>
