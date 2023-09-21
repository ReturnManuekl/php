<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "base1") or
                die("Problemas con la conexion.");
            $registros = mysqli_query($conexion, "select nombrecurso from cursos") or
                die("problemas con el select:" . mysqli_error($conexion));
            while ($reg = mysqli_fetch_array($registros)) {
                echo "Nombre del curso: " . $reg["nombrecurso"];
                echo "<hr />";
            }
            $registros = mysqli_query($conexion, "select count(*) as cantidad from cursos") or
                die("Problemas con el select: " . mysqli_error($conexion));
            $reg = mysqli_fetch_array($registros);
            echo "La cantidad de cursos es: " . $reg["cantidad"];
        ?>
    </body>
</html>