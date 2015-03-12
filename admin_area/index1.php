<?php 
session_start(); 

if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=¡No eres un administrador!','_self')</script>";
}
else {

?>
<!DOCTYPE html>
<!DOCTYPE> 

<html>
	<head>
	 <meta charset="utf-8">
		<title>Así se hace un panel de administrador, Rick</title> 
		
	<link rel="stylesheet" href="styles/style.css" media="all" /> 
	</head>


<body> 

	<div class="main_wrapper">
	
	
		<div id="header"></div>
		
		<div id="right">
		<h2 style="text-align:center;">Administrar Contenido</h2>
			
			<a href="index.php?insert_product">Agregar Nuevo Producto</a>
			<a href="index.php?view_products">Ver todos los productos</a>
			<a href="index.php?insert_cat">Insertar nueva categoría</a>
			<a href="index.php?view_cats">Ver todas las categorías</a>
			<a href="index.php?insert_brand">Insertar nuevo tipo de producto</a>
			<a href="index.php?view_brands">Ver todos los productos</a>
			<a href="index.php?view_customers">Ver clientes</a>
			<a href="index.php?view_orders">Ver órdenes</a>
			<a href="index.php?view_payments">Ver Pagos </a>
			<a href="logout.php">Abandonar la sesión</a>
		
		</div>
		
		<div id="left">
		<h2 style="color:red; text-align:center;"><?php echo @$_GET['logged_in']; ?></h2>
		<?php 
		if(isset($_GET['insert_product'])){
		
		include("insert_product.php"); 
		
		}
		if(isset($_GET['view_products'])){
		
		include("view_products.php"); 
		
		}
		if(isset($_GET['edit_pro'])){
		
		include("edit_pro.php"); 
		
		}
		if(isset($_GET['insert_cat'])){
		
		include("insert_cat.php"); 
		
		}
		
		if(isset($_GET['view_cats'])){
		
		include("view_cats.php"); 
		
		}
		
		if(isset($_GET['edit_cat'])){
		
		include("edit_cat.php"); 
		
		}
		
		if(isset($_GET['insert_brand'])){
		
		include("insert_brand.php"); 
		
		}
		
		if(isset($_GET['view_brands'])){
		
		include("view_brands.php"); 
		
		}
		if(isset($_GET['edit_brand'])){
		
		include("edit_brand.php"); 
		
		}
		if(isset($_GET['view_customers'])){
		
		include("view_customers.php"); 
		
		}
		
		?>
		</div>






	</div>


</body>
</html>

<?php } ?>