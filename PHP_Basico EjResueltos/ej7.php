<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 7</title>
    </head>
    <body>
        <span>
            <?php
                function separar($texto){
                    $arreglo = str_split($texto);
                    $final = array();
                    foreach ($arreglo as $valor) {
                        array_push($final, $valor);
                        array_push($final, "-");
                    }

                    for ($i = 0; $i<count($final)-1; $i++)
                        echo "$final[$i]";
                    
                }
                separar("holis");
            ?>
        </span>
    </body>
</html>