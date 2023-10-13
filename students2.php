<?php
    $conexion = mysqli_connect("localhost", "root", "", "cr-346") or die("Problemas con la conexión");
    mysqli_query($conexion, "insert into students(name,birthdate,grade) values ('$_REQUEST[name]','$_REQUEST[birthdate]',$_REQUEST[grade])")
        or die("Problemas en el select" . mysqli_error($conexion));
    echo "The student was successfully registered" . "<br />" . "<hr />";
    
    $registros = mysqli_query($conexion, "select * from students") or die("Problemas con el select" . mysqli_error($conexion));
    while ($reg = mysqli_fetch_array($registros)) {
        echo "Name: " . $reg["name"] . "<br />";
        echo "Birthdate: " . $reg["birthdate"] . "<br />";
        echo "Grade: " . $reg["grade"] . "<br />";
        echo "<hr />";
    }
    mysqli_close($conexion);
?>