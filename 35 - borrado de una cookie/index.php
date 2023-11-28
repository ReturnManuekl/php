<html>
<head>
    <title>Problema</title>
</head>
<body>
    <?php
        if (isset($_COOKIE['noticia'])) {
            echo $_COOKIE['noticia'];
        } else {
            ?>
                <form action="pagina2.php" method="post">
                    <input type="radio" name="opcion" value="Noticia politica" />Noticia política<br />
                    <input type="radio" name="opcion" value="Noticia economica" />Noticia economica<br />
                    <input type="radio" name="opcion" value="Noticia deportiva" />Noticia deportiva<br />
                    <input type="submit" value="Guardar">
                </form>
            <?php
        }
    ?>
    <a href="pagina3.php" method="post">Borrar cookies</a>
</body>
</html>