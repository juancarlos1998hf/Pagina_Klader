<?php
session_start();

$mensaje = "";

if (isset($_POST['btnAccion'])) {

    switch ($_POST['btnAccion']) {
        case 'Agregar':
                if (is_numeric(openssl_decrypt($_POST['id'],COD,KEY))) {
                    $ID = openssl_decrypt($_POST['id'],COD,KEY);
                    $mensaje.= "Aceptado...".$ID."<br/>";
                }else{
                    $mensaje.= "id incorrecto".$ID."<br/>";
                }

                if (is_string(openssl_decrypt($_POST['nombre'],COD,KEY))) {
                    $NOMBRE = openssl_decrypt($_POST['nombre'],COD,KEY);
                    $mensaje.= "Aceptado nombre...".$NOMBRE."<br/>";
                }else{
                    $mensaje.= "nombre incorrecto".$NOMBRE."<br/>";break;
                }

                if (is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))) {
                    $CANTIDAD = openssl_decrypt($_POST['cantidad'],COD,KEY);
                    $mensaje.= "cantidad Aceptada...".$CANTIDAD."<br/>";
                }else{
                    $mensaje.= "cantidad incorrecta...".$CANTIDAD."<br/>";break;
                }

                if (is_string(openssl_decrypt($_POST['precio'],COD,KEY))) {
                    $PRECIO = openssl_decrypt($_POST['precio'],COD,KEY);
                    $mensaje.= "precio Aceptado...".$PRECIO."<br/>";
                }else{
                    $mensaje.= "precio incorrecto".$PRECIO."<br/>";break;
                }


            if (!isset($_SESSION['CARRITO'])) {
                $producto=array(
                    'ID' => $ID,
                    'NOMBRE' => $NOMBRE,
                    'CANTIDAD' => $CANTIDAD,
                    'PRECIO' => $PRECIO
                    
                );
                $_SESSION['CARRITO'][0] =$producto;
                $mensaje = print_r("Producto agregado correctamente");


            }else{

                
                    /*$idpr=array_column($_SESSION['CARRITO'],"ID");     

                if (in_array($ID,$idpr)) {
                    echo "<script>alert('El producto ya ha sido seleccionado...');</script>";
                }else{*/

                
                    $NumeroProductos = count($_SESSION['CARRITO']);
                    $producto=array(
                        'ID' => $ID,
                        'NOMBRE' => $NOMBRE,
                        'CANTIDAD' => $CANTIDAD,
                        'PRECIO' => $PRECIO
                        
                    );
                    $_SESSION['CARRITO'][$NumeroProductos]=$producto;
                    $mensaje = print_r("Producto agregado correctamente");

                

            }
        

            //$mensaje = print_r($_SESSION,true);
            $mensaje = "Producto agregado correctamente";




        break;

        case "Eliminar":
            if (is_numeric(openssl_decrypt($_POST['id'],COD,KEY))) {
                $ID = openssl_decrypt($_POST['id'],COD,KEY);
                    foreach($_SESSION['CARRITO'] as $indice=>$producto){

                        if ($producto['ID']==$ID) {
                            unset($_SESSION['CARRITO'][$indice]);
                            echo "<script>alert('Elemento borrado...');</script>";
                        }

                    }
            }else{
                $mensaje.= "id incorrecto".$ID."<br/>";
            }
        
        break;
        
        case "proceder":

            
            //saber si fue enviado nombre
                if (isset($_POST['nombre']) && trim($_POST['nombre'])) {
                    $nombre = $_POST['nombre'];
                    $mensaje = "Nombre: ".$nombre;
                }else{
                    echo "No se ha recibido el nombre";
                }
                
            

            break;
        
    }
}

?>