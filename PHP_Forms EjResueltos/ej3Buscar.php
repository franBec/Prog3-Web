<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ej3Buscar</title>
    <link rel="stylesheet" href="ej3Style.css">
</head>
<body>
    <h1>Formulario simple</h1>
    <h2>B&uacute;squeda de canciones</h2>    
    <form action="ej3Resultados.php" method="POST">
        <div>
            <table>
                <tr>
                    <td><strong>Texto a buscar:</strong></td>
                    <td><input type="text" name="texto" required></td>
                </tr>

                <tr>
                    <td><strong>Buscar en:</strong></td>
                    <td>
                        <!con que uno de los radio button de buscar sea required
                        la propiedad se asocia a todos los del mismo name>
                        <input type="radio" name="buscar" value="titulos" required>Titulos de canci&oacute;n
                        <input type="radio" name="buscar" value="nombres">Nombres de &aacute;lbum
                        <input type="radio" name="buscar" value="ambos">Ambos campos
                    </td>
                </tr>

                <tr>
                    <td><strong>G&eacute;nero musical:</strong></td>
                    <td>
                        <select name="genero" required>
                            <option value="Todos">Todos</option>
                            <option value="Folklore">Folklore</option>
                            <option value="Pop">Pop</option>
                            <option value="Rock">Rock</option>
                        </select>
                    </td>
                </tr>
            </table>
            <input type="submit" value="Buscar">
        </div>
    </form>
</body>
</html>