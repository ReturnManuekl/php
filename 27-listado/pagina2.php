<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "base1") or
                die("problemas con la conexión");
            $registros = mysqli_query($conexion, "select nombre, mail, nombrecurso 
                from alumnos as alu inner join cursos as cur on cur.codigo=alu.codigocurso where alu.codigo=$_REQUEST[codigo]") or
                die("problemas con el select:" . mysqli_error($conexion));

            if ($reg = mysqli_fetch_array($registros)) {
                echo "Nombre: " . $reg["nombre"] . "<br />";
                echo "Mail: " . $reg["mail"] . "<br />";
                echo "Nombre del curso: " . $reg["nombrecurso"] . "<br />";
            } else {
                echo "No existe un alumno con ese codigo";
            }
            mysqli_close($conexion); 
        ?>
    </body>
</html>