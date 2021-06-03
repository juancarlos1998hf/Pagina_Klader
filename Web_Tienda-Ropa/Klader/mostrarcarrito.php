<?php
    
    include 'conexion.php';
    include 'carrito.php';
    include 'templates/cabecera.php';
?>

<br>
    <h3>Listado de Artículos</h3>
    <?php 
        if (!empty($_SESSION['CARRITO'])) {?>
            
        

    
    <table class="table table-light table-bordered">
        <tbody>
            <tr>
                <th wight="40%">Descripción</th>
                <th wight="15%" class="text-center">Cantidad</th>
                <th wight="20%" class="text-center">Precio</th>
                <th wight="20%" class="text-center">Total</th>
                <th wight="5%">--</th>
            </tr>
            <?php $total = 0; ?>
            <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){ ?>
            <tr>
                <td wight="40%"><?php echo $producto['NOMBRE'] ?></td>
                <td wight="15%" class="text-center"><?php echo $producto['CANTIDAD'] ?></td>
                <td wight="20%" class="text-center"><?php echo $producto['PRECIO'] ?></td>
                <td wight="20%" class="text-center"><?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2);  ?></td>
                <td wight="5%">
                <form action="" method="post">

                <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
                    <button class="btn btn-danger" 
                    type="submit" 
                    name="btnAccion"
                    value="Eliminar"
                    >
                    eliminar</button></td>
                </form>
           </tr>
            <?php $total = $total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
            <?php } ?>

            

            <tr>
                <td colspan="3" align="right"><h3>Total</h3> </td>
                <td align="right"><h3>$<?php echo number_format($total,2);?></h3></td>
                <td></td>
            </tr>

            <tr>
                <td colspan="5">

                    <form action="pagar.php" method="POST">
                        <div class="alert alert-success">
                            <div class="form-group">
                                
                                <label for="my-input">Correo:</label>
                                <input id=email name="email"
                                class="form-control"
                                type="email"
                                placeholder="Digite su correo"
                                required
                                >
                            </div>

                            <div class="form-group">
                                
                                <label for="my-input">Cedula:</label>
                                <input id=cedula name="cedula"
                                class="form-control"
                                type="text"
                                placeholder="cedula"
                                required
                                >
                            </div>

                            <div class="form-group">
                                
                                <label for="my-input">Nombre:</label>
                                <input id=nombre name="nombre"
                                class="form-control"
                                type="text"
                                placeholder="Nombre"
                                required
                                >
                            </div>

                            <div class="form-group">
                                
                                <label for="my-input">Apellido:</label>
                                <input id=apellido name="apellido"
                                class="form-control"
                                type="text"
                                placeholder="apellido"
                                required
                                >
                            </div>

                            <div class="form-group">
                                
                                <label for="my-input">telefono:</label>
                                <input id=telefono name="telefono"
                                class="form-control"
                                type="text"
                                placeholder="telefono"
                                required
                                >
                            </div>

                            <div class="form-group">
                                
                                <label for="my-input">ciudad:</label>
                                <input id=ciudad name="ciudad"
                                class="form-control"
                                type="text"
                                placeholder="ciudad"
                                required
                                >
                            </div>

                            <div class="form-group">
                                
                                <label for="my-input">Departamento:</label>
                                <input id=ciudad name="ciudad"
                                class="form-control"
                                type="text"
                                placeholder="departamento"
                                required
                                >
                            </div>

                            <div class="form-group">
                                
                                <label for="my-input">Dirección:</label>
                                <input id=direccion name="direccion"
                                class="form-control"
                                type="text"
                                placeholder="direccion"
                                required
                                >
                            </div>


                            
                            <small id="emailhelp"
                            class="form-text text-muted"
                            
                            >Los productos se enviaran a esta dirección
                            </small>
                        </div>
                        <button 
                        class="btn btn-primary btn-lg btn-block" 
                        type="submit"  
                        name="btnAccion" 
                        value="proceder"
                        >
                        Proceder a pagar>>
                        </button>
                        
                    </form>
                </td>
            </tr>


        </tbody>
    </table>
    <?php }else{?>
        <div class="alert alert-success">
            No hay productos en el carrito
        </div>
    <?php } ?>

<?php
include 'templates/pie.php';
?>