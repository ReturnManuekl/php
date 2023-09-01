<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "base1") or 
                die("Problemas con la conección");
                
            $registros = mysqli_query($conexion, "select codigo from cursos where nombrecurso='$_REQUEST[nombre]'") or
                die("Problemas con el select" . mysqli_error($conexion));
            if ($reg = mysqli_fetch_array($registros)) {
                mysqli_query($conexion, "delete from cursos where nombrecurso='$_REQUEST[nombre]'") or
                    die("Problemas con el select" . mysqli_error($conexion));
                echo "Se efectuo el borrado del curso con dicho nombre";
            } else {
                echo "No existe un curso con ese nombre";
            }
            mysqli_close($conexion);
        ?>
    </body>
</html>