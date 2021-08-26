<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>P&aacute;gina de acceso</title>
</head>
<body>
    <?php if (!($_SERVER["REQUEST_METHOD"] == "POST")) { ?>
        <form action="ej4.php" autocomplete="on" target="_self" method="post">
            <label for="nacimiento">Fecha de nacimiento:</label>
            <input type="date" id="nacimiento" name="fecha">
            <input type="submit" value="Aceptar">
        </form>
    <?php } else {
        $fecha = $_POST["fecha"];

        $birthdate = new DateTime($fecha);
        $today = new DateTime('today');
        $age = $birthdate->diff($today)->y;
        
        if ($age >= 18)
            header("Location: https://www.youtube.com/watch?v=A_fCv76c4uQ&ab_channel=KiddKeo");
        else 
            header("Location: https://www.youtube.com/watch?v=4wX2xBOuzRg");
    }
    ?>
</body>
</html>