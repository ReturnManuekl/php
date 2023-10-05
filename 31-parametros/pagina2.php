<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");
            $registros = mysqli_query($conexion, "select nombre from alumnos where codigocurso=$_REQUEST[codigo]") or die("Problemas con el select:" . mysqli_error($conexion));
            while ($reg = mysqli_fetch_array($registros)) {
                echo $reg["nombre"] . " - ";
            }
            mysqli_close($conexion);
        ?>
    </body>
</html>