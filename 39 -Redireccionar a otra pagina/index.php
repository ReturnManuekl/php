<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_REQUEST['error'])) {
            echo "Ingreso contraseña incorrecta <br />";
        }       
    ?>
    <form action="pagina2.php">
        Ingrese contraseña: 
        <input type="text" name="clave"><br />
        <input type="submit" value="confirmar">
    </form>
</body>
</html>