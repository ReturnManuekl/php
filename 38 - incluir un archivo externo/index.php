<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
            require_once("pagina2.php");
            $conexion = retornarConexion();
            $registros = mysqli_query($conexion, "select codigo, nombre, mail, codigocurso from alumnos") or    
                die("Problemas con el select:" . mysqli_error($conexion));

            while ($reg = mysqli_fetch_array($registros)) {
                echo "Codigo: " . $reg['codigo'] . "<br />";
                echo "Nombre: " . $reg['nombre'] . "<br />";
                echo "Mail: " . $reg['mail'] . "<br />";
                echo "Curso: " . $reg['codigocurso'] . "<br />";
                echo "<hr />";
            }
            retornarConexion()
        ?>
    </body>
</html>