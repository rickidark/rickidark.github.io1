

<?php include "php/config.inc" ?>

<?php 


include("funciones/funciones.php");


?>
<?php
include "php/cabecera.inc"
?>
<?php
include "cabecera_formato.inc"
?>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="index.php">Inicio</a></li>
				  <li class="active">Carrito</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">

					
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Cantidad</td>
							<td class="description"></td>

							<td class="price">Producto</td>
							<td></td>
							<td class="quantity">Precio</td>
							
							<td align="center"><i class="fa fa-trash-o"></i></td>
						</tr>
					</thead>
					<tbody>
						 	<div id="products_box" >

						 		<? suma();?>



</div>





					</tbody>
				</table>
				<div align="right">
				<a href='php/destruir.php'><button>Vaciar</button></a>
			<a href='checkout.php'><button>Comprar</button></a>
				</div>
			</div>
		</div> 
	
	</section> 

<br><br>
<br><br><br>
	<footer> 
		<div class="footer-bottom">
			<div class="container" >
				<div class="row">
					<p class="pull-left">Copyright Zafiro Azul © 2015 Todos los derechos reservados</p>
					<p class="pull-right">Desarrollado por <span>Ricardo Echeverría, Eduardo Contreras y Ricardo Hu</span></p>
				</div>
			</div>
		</div>
		
	</footer> 

	
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>