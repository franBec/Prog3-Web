<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 11</title>
    </head>
    <body>
            <?php
                function ordena($arr){
                    sort($arr);
                    return $arr;
                }

                function imprime($arr){
                    echo "[ ";
                    foreach ($arr as $key => $value) 
                        echo "$value ";
                    echo "]";
                }
                
                $numbers = array(4,6,2,22,11);
                echo "El arreglo desordenado es: ";
                imprime($numbers);
                echo "<br>";
                echo "El arreglo ordenado es: ";
                $numbers = ordena($numbers);
                imprime($numbers);
            ?>
    </body>
</html>