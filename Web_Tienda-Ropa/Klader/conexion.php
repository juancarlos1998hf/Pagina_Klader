<?php

    $conexion = new mysqli("localhost","root","","tiendasklader");
    if ($conexion) {
        echo "Conexion exitosa";
    }else{
        echo "No conecto";
    }

    

?>

<?php
define("KEY","AndresKlader");
define("COD","AES-128-ECB");
?>