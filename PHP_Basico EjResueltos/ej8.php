<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 8</title>
        <link rel="stylesheet" href="ej8Styles.css">
    </head>
    <body>
        <h1>Esto es un titulo</h1>
        <table>
            <?php
                $x = rand(1, 10);
                $y = rand(1, 10);
                for ($i = 1; $i<=$y; $i++){
                    echo "<tr>";
                    for ($j=1; $j<=$x; $j++)
                        echo "<td> $i , $j";
                        echo "</td>";
                    
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>