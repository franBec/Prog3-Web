<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 9</title>
    </head>
    <body>
        <table>
            <?php
                $x = $aux = rand(1, 10);
                $y = rand(1, 10);
                
                /*
                for ($i = 1; $i<=$y; $i++){
                    echo "<tr>";
                    for ($j=1; $j<=$x;$j++)
                        echo "<td> Celda $i , $j</td>";
                    
                    echo "</tr>";
                }
                */

                while($y>0){
                    echo "<tr>";
                    while($x>0){
                        echo "<td> Celda $y , $x</td>";
                        $x--;
                    }
                    echo "</tr>";
                    $x= $aux;
                    $y--;
                }
            ?>
        </table>
    </body>
</html>