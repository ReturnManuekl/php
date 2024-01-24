<?php
    if($_REQUEST['clave'] != "z80") {
        header("Location: index.php?error=1");
    } else
        echo "Bienvenido!"
?>