
<?php 
session_start(); 

if(!isset($_SESSION['admin'])){
	
	echo "<script>window.open('loginori.php?not_admin=No eres un administrador','_self')</script>";
}
else {

?>
<!DOCTYPE>
<html lang="en">

<head>
 	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Joyeria Zafiro-Azul</title>
    <link rel="stylesheet" href="/styles/tabla.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/price-range.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
	<link href="../css/main.css" rel="stylesheet">
	<link href="../css/responsive.css" rel="stylesheet">
	<link rel=Stylesheet href="styles/estiloadmin.css" >
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
     <link rel="shortcut icon" href="../images/home/favico.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +9993 40 59 28 WhatsApp o al Cel. 9992 302742</a> <a href="#"><i class="fa fa-envelope"></i> Ventas@afiroazul.com</a></li>
								
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="../index.php"><img src="../images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							
						</div>
					</div>
					<div class="col-sm-8">
					<div id="right">
					<br>
		<h2 style="text-align:center;">Administrar Contenido</h2>
			
			
		
		</div>
							
						
					</div>
				</div>
			</div>
		</div><!--/header-middle-->





			

	<div class="navbar  navbar-fixed-top" id="navegador" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle"  data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div  class="collapse navbar-collapse">
        <a href="../index.php"><img src="../images/home/logo.png" alt="" /></a>
          <ul class="nav navbar-nav navbar-right"  id="navegador"  >
             <li id="admin"><a id="menu" href="index.php?insert_product"><i class="fa fa-plus"></i>
			Agregar Producto</a></li>  
			<li id="admin"><a id="menu" href="index.php?view_products"><i class="fa fa-table"></i>Gestionar productos</a></li>
			<li id="admin"><a id="menu" href="index.php?insert_cat"><i class="fa fa-plus"></i>
			Insertar  categoría</a></li>
			<li id="admin"><a id="menu" href="index.php?view_cats"><i class="fa fa-table"></i>Gestionar categorías</a></li>
			<li id="admin"><a id="menu" href="index.php?insertar_tiposproducto"><i class="fa fa-plus"></i>
Insertar nuevo tipo de producto</a></li>
			<li id="admin"><a id="menu" href="index.php?ver_tiposproducto"><i class="fa fa-table"></i>Gestionar tipos de productos</a></li>
			<li id="admin"><a id="menu" href="index.php?ver_clientes"><i class="fa fa-users"></i>Gestionar clientes</a></li>
			<li id="admin"><a id="menu" href="index.php?pedidos"><i class="fa fa-table"></i>Gestionar órdenes</a></li>
			
			<li id="admin"><a id="menu" href="index.php?insert_promo"><i class="fa fa-plus"></i>
Agregar promoción </a></li>
			<li id="admin"><a id="menu" href="index.php?ver_promociones"><i class="fa fa-table"></i>Gestionar promociones</a></li>
			<li id="admin"><a id="menu" href="index.php?ver_mensajes"><i class="fa fa-table"></i>Gestionar Mensajes</a></li>
			<li id="admin"><a id="menu" href="logout.php"><i class="fa fa-sign-out"></i>
Abandonar la sesión</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

		
	
	
	<section id="cart_items">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					
						<h2  class="descripcion" style='color:blue;' >Descripción</h2>
		<h2 style="color:red; text-align:right;"><?php echo @$_GET['logged_in']; ?></h2>
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
		
		if(isset($_GET['insertar_tiposproducto'])){
		
		include("insertar_tiposproducto.php"); 
		
		}
		
		if(isset($_GET['ver_tiposproducto'])){
		
		include("ver_tiposproducto.php"); 
		
		}
		if(isset($_GET['editar_tiposproducto'])){
		
		include("editar_tiposproducto.php"); 
		
		}
		if(isset($_GET['ver_clientes'])){
		
		include("ver_clientes.php"); 
		
		}
		
		if(isset($_GET['pedidos'])){
		
		include("pedidos.php");

		}

		if(isset($_GET['ver_mensajes'])){
		
		include("ver_mensajes.php");

		}
		
		if(isset($_GET['insert_promo'])){
		
		include("insert_promo.php"); 
		}

		if(isset($_GET['ver_promociones'])){
		
		include("ver_promociones.php"); 
		}

		if(isset($_GET['edit_promo'])){
		
		include("edit_promo.php"); 
		
		}
		?>
		
						<!--/category-products-->
					
				
				
				</div>
				
			
					
				</div>
			</div>
		
	</section>
	
	<br><br><br><br><br><br><br><br><br><br><br>
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				
		</div>
		
		<div class="footer-widget">
			<div class="container">
		
			</div>
		</div>
		
		<div class="footer-bottom1">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2015 Zafiro-Azul. Todos los derechos reservados.</p>
					<p class="pull-right">Desarrollado por Diseñado por,Ricardo Echeverría,Eduardo Contreras y Ricardo Hu</a></span></p>
				</div>
			</div>
		</div>
		</div>
	</footer>

  
    <script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.scrollUp.min.js"></script>
	<script src="../js/price-range.js"></script>
    <script src="../js/jquery.prettyPhoto.js"></script>
    <script src="../js/main.js"></script>
</body>
</html>
<?php } ?>