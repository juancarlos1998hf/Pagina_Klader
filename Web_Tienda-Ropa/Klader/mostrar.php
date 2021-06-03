<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mostrar</title>
</head>
<body>
    <center>
        <table border="2"> 
            <thead>
                <tr>
                    <th> Nombre</th>
                    <th>Imagen</th>
                    <th>Operaciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include ("conexion.php");

                    $query = "SELECT * FROM imagen";
                    $resultado = $conexion->query($query);
                    while($row = $resultado->fetch_assoc()){
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>"/></td>
                        <th><a href="#">Modificar</a></th>
                        <th><a href="#">eliminar</a></th>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </center>
</body>
</html>