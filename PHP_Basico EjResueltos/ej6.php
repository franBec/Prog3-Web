<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 6</title>
    </head>
    <body>
        <span>
            <?php
                $arr = [
                    "Argentina"=>"Pesos Argentinos",
                    "Brasil"=>"Real",
                    "USA"=>"Dolar",
                    "Reino Unido"=>"Libra",
                    "Mexico"=>"Pesos Mexicanos",
                    "Guatemala"=>"Quetzal"
                ];

                foreach($arr as $x => $val) { 
                    echo "$x = $val<br>"; 
                }
            ?>
        </span>
    </body>
</html>