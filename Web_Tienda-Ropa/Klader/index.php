

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir_Imagenes</title>
</head>
<body>
    <form action="proceso.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="nombre" placerholder="Nombre..." value="" required/>
        <input type="file" name="Imagen"/>
        <input type="submit" value="Aceptar">
    
    
    </form>

    <a href="hombres.php">Ir a hombres</a>
</body>
</html>