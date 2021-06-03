<?php
    
    include 'conexion.php';
    include 'carrito.php';
    include 'templates/cabecera.php';
?>


        <br>
        <?php if ($mensaje!="") {?>
         <div class="alert alert-success"> 
            Pantalla de mensaje...
            <?php
                echo $mensaje;
            ?>
            <a href="mostrarcarrito.php" class="badge badge-success">Ver Carrito</a>
        </div>  
        <?php }?> 
        
        
        <div class="row">
            <?php
                $query = "SELECT * FROM tblproductos";
                $resultado = $conexion->query($query);
            ?>
                <?php
                    while($producto = $resultado->fetch_assoc()){
                ?>
                    <div class="col-3"> 
                    <div class="card">
                        <img 
                        title="<?php echo $producto['Nombre'];?>"
                        alt="<?php echo $producto['Nombre'];?>"
                        class="card-img-top" 
                        src="data:image/jpg;base64,<?php echo base64_encode($producto['imagen']);?>"
                        height = "317px";
                        >
                        <div class="card-body"> 
                            <span><?php echo $producto['Nombre'];?></span>
                            <h5>$</h5>
                            <h5 class="card-title"><?php echo $producto['Precio'];?></h5>
                            <p class="card-text"><?php echo $producto['Descripcion'];?></p>
                            
                            <form action="" method="post">
                                <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['id'],COD,KEY);?>">
                                <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY)?>">
                                <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY)?>"> 
                                <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY) ?>">
                                <button class="btn btn-primary" 
                                    name="btnAccion"   
                                    value='Agregar' 
                                    type="submit"
                                    >
                                    Agregar al carrito
                                    </button>
                            </form>
                            
                            
                            
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>

            

            
        </div>


    </div>
</div>
    

       
<?php
include 'templates/pie.php';
?>