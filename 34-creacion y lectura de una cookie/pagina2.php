<?php
        setcookie("name", $_REQUEST['nombre'], time() + 60 * 60 * 24 * 365, "/");
?>
<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        Se creo la cookie.
        <br />
        <a href="index.php">Ir a la otra pagina</a>
    </body>
</html>