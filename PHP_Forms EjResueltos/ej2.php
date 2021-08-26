<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="/03 PHP/PHP_Basico EjResueltos/ej8Styles.css">
</head>
<body>
    <?php if(!($_SERVER["REQUEST_METHOD"]=="POST")){?>
        <form action="ej2.php" method="POST">
            Nombre y Apellido<br>
                <input type="text" name="nombre"><br>
            Direcci&oacute;n<br>
                <input type="text" name="direccion"><br>
            Tel&eacute;fono<br>
                <input type="tel" name="telefono" placeholder="puto el que lee" pattern="[+]{1}[0-9]{3}-[0-9]{3}-[0-9]{7}" required><br>
            Sexo<br>
                <input type="radio" name="sexo" value="masculino">Masculino 
                <input type="radio" name="sexo" value="femenino">Femenino 
                <input type="radio" name="sexo" value="otro">Helic&oacute;ptero de ataque apache modelo 2010<br>
            Edad<br>
                <input type="number" name="edad"><br>
            Email<br>
                <input type="email" name="email"><br>
            Profesi&oacute;n<br>
                <select name="profesion">
                    <option value="Abogacía">Abogac&iacute;a</option>
                    <option value="Diseño">Dise&ntilde;o</option>
                    <option value="Medicina">Medicina</option>
                    <option value="Programación">Programaci&oacute;n</option>
                    <option value="Psicología">Psicolog&iacute;a</option>
                </select><br>
            Hobbies (puede seleccionar m&uacute;ltiples)<br>
                <select name="hobbies[]" id=hobbies multiple>
                    <option value="Bailar">Bailar</option>
                    <option value="Dibujo">Dibujo</option>
                    <option value="Deportes">Deportes</option>
                    <option value="Música">M&uacute;sica</option>
                    <option value="Videojuegos">Videojuegos</option>
                </select><br>
            Nacionalidad (puede seleccionar m&uacute;ltiples)<br>
                <select name="nacionalidad[]" id=nacionalidad multiple>
                    <option value="Argentina">Argentina</option>
                    <option value="Británica">Brit&aacute;nica</option>
                    <option value="Española">Espa&ntilde;ola</option>
                    <option value="Italiana">Italiana</option>
                    <option value="Mexicana">Mexicana</option>
                </select><br>
            <input type="submit" value="Siguiente">
        </form>
    
    <?php }
        else {
            $arr = array(
                "Nombre y Apellido"=>$_POST["nombre"],
                "Dirección"=>$_POST["direccion"],
                "Teléfono"=>$_POST["telefono"],
                "Sexo"=>$_POST["sexo"],
                "Edad"=>$_POST["edad"],
                "Email"=>$_POST["email"],
                "Profesión"=>$_POST["profesion"],
                "Hobbies"=>$_POST["hobbies"],
                "Nacionalidad"=>$_POST["nacionalidad"],
            );
        }
    ?>

    <table>
        <?php
            foreach ($arr as $key => $value) {
                echo "<tr><th>$key</th>";
                if (($key == "Hobbies")or($key == "Nacionalidad")) {
                    foreach ($value as $clave => $valor) {
                        if ($valor != "") 
                            echo "<td>$valor</td>";
                    }
                }
                else
                    echo "<td>$value</td></tr>";
            }
        ?>
    </table>
</body>
</html>