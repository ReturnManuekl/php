<?php
    $conexion = mysqli_connect("localhost", "root", "", "cr-346") or die("Problemas con la conexión");
    mysqli_query($conexion, "insert into subjects(name) value ('$_REQUEST[name]')") or die("Problemas con el select" . mysqli_error($conexion));
    echo "The subject was successfully registered" . "<br />" . "<hr />";

    $registros = mysqli_query($conexion, "select * from subjects") or die("Problemas con el select" . mysqli_error($conexion));
    while ($reg = mysqli_fetch_array($registros)) {
        echo "Subject: " . $reg["name"] . "<br />"; 
        echo "<hr />";
    }
    mysqli_close($conexion);
?>