<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tienda de Fajas</title>
	<link rel="stylesheet" href="style/normalize.css">
	<link rel="stylesheet" href="style/global.css">
	<link rel="stylesheet" href="style/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

</head>

<body>

	<header class="header container">

		<nav class="barra">

			<a href="index.php"><img src="img/Logo.png" alt="Logo"></a>
			<a href="Klader/hombres.php">Catalogo</a>
			<a href="data.php">Contacto</a>
		
		</nav>

	</header>

	<div class="banner container">

		<img src="img/banner.PNG" alt="banner">

	</div>

	<div class="img-banner container">

		<img src="img/icon1.PNG" alt="icon1">
		<img src="img/icon2.PNG" alt="icon2">
		<img src="img/icon3.PNG" alt="icon3">
		
	</div>
	<hr class="container">

	<?php

		require_once('procesos/conexion.php');
		$sql = "select*from producto";
		$resultado = $conexion->query($sql);	
		
	?>

	<main class="container">

		<h1 class="titulo">Mas vendidos</h1>
		<div class="anuncio">
			<?php while($producto = $resultado->fetch_assoc()): ?>
			<div class="tarjetas">
				<img src="img/<?php echo $producto['imagen_faja']; ?>" alt="">
			
				<div class="contenido-tarjetas">
					<p class="textos"><?php echo utf8_encode($producto['descripcion_faja']); ?></p>
					<p class="precio"><?php echo "$ ".number_format($producto['precio_faja'],0,'.','.'); ?></p>
					<a href="Klader/hombres.php" class="botom">Ir a Catalogo</a>
				</div>
			</div>
			<?php endwhile; ?>	
		</div>
	</main>

	<footer class="container footer">
        <div>
            <h4>SERVICIO AL CLIENTE</h4>
            <p>Seguimiento a Pedidos</p>
            <a href="">Contáctanos</a>
            
        </div>
        <div>
            <h4>INFORMACIÓN</h4>
            <p>Preguntas frecuentes</p>
            <p>Términos y condiciones</p>
            
        </div>
        <div>
            <h4>SOBRE NOSOTROS</h4>
            <p>Quiénes somos</p>
            <p>Aviso legal</p>
        </div>
    </footer>
    <div class="container copyright">
        <p>&copy; Andres Klader </p>
        <div class="social">
            <a href="https://api.whatsapp.com/send?phone=573147804301&fbclid=IwAR17y_roBiTt2_voxItZtoh1g2dWbxK1ZDnupbYXJqGQIndt-sQ51N1c43g">
                <img src="img/fb.webp" alt="Facebook">
            </a>
            
            <a href="https://www.instagram.com/boutiqueklader/">
                <img src="img/instagram.png" alt="Instagram">
            </a>
           
        </div>
    </div>

</body>

</html>

<!--




-->