<html>
<body>
<?php if(!($_SERVER["REQUEST_METHOD"] == "POST")){?>
	<form action="ej1.php" method="POST">
		Entero 1: <input type=number name=ent1 required><br>
		Entero 2: <input type=number name=ent2 required><br>
		<input type=submit>
    </form>
<?php }
    else{
        $var1 = $_POST["ent1"];
        $var2 = $_POST["ent2"];

        echo "El entero 1 es: $var1<br>";
        echo "El entero 2 es: $var2<br>";
        echo "<br>";
        echo "La suma de los dos enteros es: ".($var1+$var2)."<br>";
        echo "La resta de los dos enteros es: ".($var1-$var2)."<br>";
        echo "El producto de los dos enteros es: ".$var1*$var2."<br>";
        echo "La division de los dos enteros es: ".$var1/$var2."<br>";
    }?>

</body>
</html>