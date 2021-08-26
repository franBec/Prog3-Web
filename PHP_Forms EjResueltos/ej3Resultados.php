<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej3Resultados</title>
    <link rel="stylesheet" href="ej3Style.css">
</head>
<body>
    <?php 
        $texto = $_POST["texto"];
        $buscar = $_POST["buscar"];
        $genero = $_POST["genero"];
    ?>

    <h1>Formulario simple. Resultados del formulario</h1>    
    Estos son los datos introducidos:<br>
    <ul>
        <li>Texto de b&uacute;squeda: <?php echo $texto ?></li>
        <li>Buscar en: <?php echo $buscar ?></li>
        <li>G&eacute;nero: <?php echo $genero ?></li>
    </ul>

    [ <a href="ej3Buscar.php">Nueva b&uacute;squeda</a> ]
</body>
</html>