<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <form action="pagina2.php" method="post">
            Nombre de usuario:
            <input type="text" name="nombre" value="<?php if (isset($_COOKIE['name'])) echo $_COOKIE['name'] ?>" />
            <input type="submit" value="Crear coockie" />
        </form>
    </body>
</html>