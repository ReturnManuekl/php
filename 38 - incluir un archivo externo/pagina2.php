<?php
    function retornarConexion() {
        $conexion = mysqli_connect("localhost", "root", "", "base1") or
            die("Problemas con la conexion");
        return $conexion;
    }
?>