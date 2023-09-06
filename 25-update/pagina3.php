<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "base1") or
                die("Problemas con la conexión");
            $registros = mysqli_query($conexion, "update cursos 
                                                set nombrecurso='$_REQUEST[nombrecursonuevo]'
                                              where codigo='$_REQUEST[codigo]'") or
                die("Problemas con el select:" . mysqli_error($conexion));
            echo "El nombre fue modificado con exito";
        ?>
    </body>
</html>