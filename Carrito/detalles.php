<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>Carrito de Compras</title>
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	<script type="text/javascript"  href="./js/scripts.js"></script>
</head>
<body>
	<header>
		<h1>Detalle catalogo</h1>
		<a href="./carritodecompras.php" title="ver carrito de compras">
			<img src="./imagenes/carrito.png">
		</a>
	</header>
	<section>
		
	<?php
		include 'conexion.php';
		$re=mysql_query("select * from producto where idProducto=".$_GET['idProducto'])or die(mysql_error());
		while ($f=mysql_fetch_array($re)) {
		?>
			
			<center>
				<img src="./productos/<?php echo $f['imagen'];?>"><br>
				<span><?php echo $f['nombre'];?></span><br>
				<span>Precio: <?php echo $f['precio'];?></span><br>
				<a href="./carritodecompras.php?idProducto=<?php  echo $f['idProducto'];?>">Añadir al carrito de compras</a>
			</center>
		
	<?php
		}
	?>
		
		

		
	</section>
</body>
</html>