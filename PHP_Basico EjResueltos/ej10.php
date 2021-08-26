<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 10</title>
    </head>
    <body>
            <?php
                $limite = 100;

                for ($i=1; $i<=$limite ; $i++) { 
                    echo "TABLA DEL $i<br>";
                    for ($j=1; $j <= 10; $j++) {
                        echo "$i x $j = ".$i*$j."<br>";
                    }
                    
                    echo "<br>";
                }

            ?>
    </body>
</html>