<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "base1") or die("Problemas en la conexión");
            $registros = mysqli_query($conexion, "select nombrecurso, codigo from cursos") or die("Problemas con el select:" . mysqli_error($conexion));
            while ($reg = mysqli_fetch_array($registros)) {
                echo "Codigo: " . $reg["codigo"] . "<br />";
                echo "<a href=\"pagina2.php?codigo=$reg[codigo]\">" . $reg['nombrecurso'] . "</a>";
                echo "<br />";
            }
            mysqli_close($conexion);
        ?>
    </body>
</html>