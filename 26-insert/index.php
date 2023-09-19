<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <form action="pagina2.php" mothod="post">
            Ingrese el nombre:
            <input type="text" name="nombre" /><br />
            Ingrese mail:
            <input type="text" name="mail" /><br />
            Seleccione el curso:
            <?php
                $conexion = mysqli_connect("localhost", "root", "", "base1") or 
                    die("Problemas con la conexión");
                $registros = mysqli_query($conexion, "select codigo, nombrecurso from cursos") or
                    die("Problemas con el select:" . mysqli_error($conexion));
                while ($reg = mysqli_fetch_array($registros)) {
                    echo "<input type=\"radio\" name=\"radio1\" value=\"$reg[codigo]\">" . $reg['nombrecurso'] . "<br>";
                }
            ?>
            <br />
            <input type="submit" value="Registrar" />
        </form>
    </body>
</html>