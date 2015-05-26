
<!DOCTYPE>
<html lang="en">

<head>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Joyeria | Zafiro-Azul</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css" />    
    <link rel="shortcut icon" href="www.zafiro.mx/joyeria/images/home/favico.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/codigo.js"></script>

	<script type="text/javascript"></script>
</head><!--/head-->

<body>

	
	




	<header id="header"><!--header-->
		
		<div class="navbar  navbar-fixed-top" id="navegador" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div class="collapse navbar-collapse">

        		<ul class="nav navbar-nav navbar-left" >
        			<a href="index.php"><img src="images/home/logo.png" width="180px" height="60px" alt="" /></a>
        		</ul>

          <ul class="nav navbar-nav navbar-right" >
           
					<li id="navegador1" ><a href="index.php">Inicio</a></li>
					<li id="navegador1"><?php getCats();?></li>
		         <li id="navegador1"><a href="contacto.php">Contacto</a></li>      
		         <li id="navegador1"><a href="registro.php">Registro</a></li>
		    </ul>
        </div><!--/.nav-collapse -->
      </div>
	</div>



		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row"><br><br><br>
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +9993 40 59 28 WhatsApp o al Cel. 9992 302742</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> joyeria_zafiroazulmerida@hotmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/ZefiroMerida"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/ZafiroMerida"><i class="fa fa-twitter"></i></a></li>
								
							
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						
						<div class="btn-group pull-right">
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="my_account.php"><i class="fa fa-user"></i>Mi cuenta</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i>Ir al Carrito</a></li>
								<li><a href="./panel_administrador/index.php"><i class="fa fa-lock"></i>Admin</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				
					<div class="col-sm-3">
						<div class="search_box pull-left">
							<form method="get" action="resultados.php" enctype="multipart/form-data">
		                        <input type="text" name="user_query" placeholder="Encuentra un producto"/ > 
		            </div>
		                        <input type="submit" class="myButton" name="search" value="Buscar" />
                    		</form>
               </div>     
               <br>	 <br>	 <br>			
							<div id="shopping_cart"> 
									
									<span style="float:right;  font-size:18px; padding-left: 200px; line-height:15px;">
									
									<?php 
									if(isset($_SESSION['customer_email'])){
									echo "<b>Bienvenido: </b><b style='font-size:18px; color:red;''>" . $_SESSION['customer_email']. "</b>" ;
									}
									else {
									echo "<b>Bienvenido: Invitado</b>";
									}
									?>
									
									 
									
									
									<?php 
									if(!isset($_SESSION['customer_email'])){
									
									echo "<a href='customer_login.php'>"."<i class='fa fa-lock'>"."</i> Iniciar Sesión</a>";
									
									}
									else {
									echo "<a href='logout.php' style='color:#398EF1;'><i class='fa fa-sign-out'></i>
Salir</a>";
									}
									
									
									
									?>
									
									
									
									</span>
							</div>

						</div>
						
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->