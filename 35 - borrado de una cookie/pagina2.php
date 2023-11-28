<?php
    setcookie("noticia", $_REQUEST['opcion'], time() + (60 * 60 * 24 * 365), "/");
?>
<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        Tipo de noticia guardada. <br />
        <a href="index.php">Regresar</a>
    </body>
</html>