<html>
    <head><title>Problema</title></head>
    <body>
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas con la conexión");
            $registros = mysqli_query($conexion, "select count(alumnos.codigo) as cantidad, nombrecurso, codigocurso from alumnos
                inner join cursos on cursos.codigo=alumnos.codigocurso
                group by alumnos.codigocurso") or
                die("Problemas con el select:" . mysqli_error($conexion));
            while ($reg = mysqli_fetch_array($registros)) {
                echo "Nombre del curso: " . $reg["nombrecurso"] . "<br />";
                echo "Cantidad de inscriptos: " . $reg["cantidad"] . "<br />";
                $registros2 = mysqli_query($conexion, "select nombre from alumnos where codigocurso=$reg[codigocurso]") or
                    die("Problemas con el select: " . mysqli_error($conexion));
                    while ($reg2 = mysqli_fetch_array($registros2)) {
                        echo $reg2["nombre"] . "-";
                    }
                echo "<hr />";
            }
        ?>
    </body>
</html>