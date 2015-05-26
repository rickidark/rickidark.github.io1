
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

	
	
	
	<section>
		<div class="container">
			<div class="row">
				
				<div class="col-sm-4">
					<div class="left-sidebar">
						<h2>Productos</h2>
						<div class="panel-group category-products" id="accordian"><!--category-products-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Tipo
										</a>
									</h4>
								</div>
								
								<div class="panel-collapse expand	">
									<div class="panel-body">
										<ul>
										<?php getCats(); ?>
										<hr>
										-Todos los Productos-
										
										<?php gettiposproducto(); ?>	
										</ul>
									</div>
								</div>


							</div>


							
									<hr>
					<div class="panel panel-default" >

							<div class="panel-heading">
								<i class="fa fa-shopping-cart fa-cog" >Carrito</i>

										<div  id="carrito" class="myButton">
									
									

										</div>


							</div>
									
									
									<br>
									<?php 


									if (isset($_SESSION['contador'])){ ?>
										
										<a href='php/destruir.php'><button>Vaciar</button></a>
										
										<a href='checkout.php'><button >Comprar</button></a>
									<?php } ?>

					</div>
			
								</div>

							</div>
							
						</div><!--/category-products-->

					<div class="col-sm-4  ">
							

						 <div class="features_items" ><!--features_items-->
												<h2 class="title text-center">Descripción de Producto</h2>
									<?php getPro(); ?>
									<?php getCatPro(); ?>

									<?php getTipoPro(); ?>	


						
				
					</div>

			</div>			

		</div>

	</section>
	<footer> 
		<div class="footer-bottom">
			<div class="container">
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
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>