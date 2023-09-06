<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
            $conexion = mysqli_connect("localhost", "root", "", "base1") or
                die("Problemas con la conexión");
            $registros = mysqli_query($conexion, "select * from cursos where codigo='$_REQUEST[codigo]'") or
                die("Problemas con el select:" . mysqli_error($conexion));
            if ($reg = mysqli_fetch_array($registros)) {
                ?>
                <form action="pagina3.php" method="post">
                    Ingrese el nuevo nombre:
                    <input type="text" name="nombrecursonuevo" value="<?php echo $reg['nombrecurso'] ?>">
                    <input type="hidden" name="codigo" value="<?php echo $reg['codigo'] ?>">
                    <input type="submit" value="Modificar">
                </form>
                <?php   
            } else 
                echo "No existe alumno con dicho mail";
        ?>
    </body>
</html>