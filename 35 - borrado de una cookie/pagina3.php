<?php
    setcookie("noticia", "", time() - 1000, "/");
?>
<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        Se elimino correctamenta la cookie. <br />
        <a href="index.php">Regresar</a>
    </body>
</html>