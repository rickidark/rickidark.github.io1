<?php
include "php/cabecera.inc"
?>
<?php 
include("funciones/funciones.php");

?>
<!DOCTYPE html>
<html>
<?php
include "cabecera_formato.inc"
?>
	

	<br><br>
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						
						
						<div class="carousel-inner" >

						<div class="item active">
								<?php

										$conexion = mysqli_connect("localhost","tienda","online","joyeria");
										mysqli_set_charset($conexion, "utf8");
										$peticion = "SELECT * FROM promo WHERE product_id = 1 LIMIT 1";
										$resultado = mysqli_query($conexion, $peticion);
										while($fila = mysqli_fetch_array($resultado)) {

											echo '<div class="item ">';	
											echo '<div class="col-sm-6">';							
											echo '<img src="images/home/logo.png" />';	
											echo "<br>";							
											echo "<h2 style='font-size:20px;'>".$fila['product_title']."</h2>";
											echo "<p>".$fila['product_desc']."</p>";								
											
											echo "</div>";	
											echo '<div class="col-sm-6">';
											echo '<img src="panel_administrador/promos/'.$fila['product_image'].'" height="450" width="450" />';						
																		
											echo "</div>";
											echo "</div>";


											}

										mysqli_close($conexion);
								?>
						</div>	

 								<?php

									$conexion = mysqli_connect("localhost","tienda","online","joyeria");
									mysqli_set_charset($conexion, "utf8");
									$peticion = "SELECT * FROM promo WHERE product_id > 1";
									$resultado = mysqli_query($conexion, $peticion);
									while($fila = mysqli_fetch_array($resultado)) {
										echo '<div class="item ">';	
										echo '<div class="col-sm-6">';							
										echo '<img src="images/home/logo.png" />';	
										echo "<br>";							
										echo "<h2 style='font-size:20px;'>".$fila['product_title']."</h2>";
										echo "<p>".$fila['product_desc']."</p>";								
										
										echo "</div>";	
										echo '<div class="col-sm-6">';
										echo '<img src="panel_administrador/promos/'.$fila['product_image'].'" height="450" width="450" />';						
																	
										echo "</div>";
										echo "</div>";


										}

									mysqli_close($conexion);
									?>



						</div>
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1" ></li>
							<li data-target="#slider-carousel" data-slide-to="2" ></li>
						</ol>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->


	
	<section>
		<div class="container">
			<div class="row">
			
				
	<div class="col-sm-9 col-sm-offset-1 padding-right">
					<!--features_items-->
					
					<!--/category-tab-->
					
			<div class="recommended_items"><!--recommended_items-->
					<h2 class="title text-center">¡Productos más vendidos!</h2>
					<h2 class="title text-center">¡Encuéntralos en el catálogo!</h2>

							<div align='right' >
									<a class='circulo' style='padding:5px;'>Carrito</a><br><br>
									<div  id="carrito" class='myButton' align='center' >
									</div>
									<br>
									<a href='php/destruir.php'><button class="myButton">Vaciar</button></a>
									<a href='checkout.php'><button class="myButton">Comprar</button></a>
							</div>

							<br><br>

							<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
										<div class="item active">
										
											<?php
													$conexion = mysqli_connect("localhost","tienda","online","joyeria");
													mysqli_set_charset($conexion, "utf8");
													$peticion = "SELECT idproducto,products.product_image,products.product_id,products.product_desc,products.product_title,products.product_price,COUNT(idproducto) FROM `lineaspedido` LEFT JOIN products 
													ON lineaspedido.idproducto = products.product_id GROUP BY idproducto ORDER BY COUNT(idproducto) DESC LIMIT 3";
													
													$resultado = mysqli_query($conexion, $peticion);
													while ($fila = mysqli_fetch_array($resultado)) { 
													echo "<div class='col-sm-4' >";
													echo "<div class='product-image-wrapper'>";
													echo "<div class='single-products'>";
													echo "<div class='productinfo text-center'><img src='panel_administrador/product_images/".$fila['product_image']."' width=100px height=150px class='circulo' >";
													echo "<h2>Precio: $".$fila['product_price']." Pesos</h2>";
													echo "<a href='catalogo.php?id=".$fila['product_id']."'><p>".$fila['product_title']."</p></a>";
													echo "<p>".$fila['product_desc']."</p>";
													echo "<br>";	
													echo "</div>";
													echo "<div class='product-overlay'>";
													echo "<div class='overlay-content' >";
													echo "<h2>Precio: $".$fila['product_price']." Pesos</h2>";
													echo "<a href='catalogo.php?id=".$fila['product_id']."'><p>".$fila['product_title']."</p></a>";
													echo "<p>Cantidad:</p>";
													echo "<input type='number' style='text-align:center; width:30px;' value='1' max='5' min='1' id='num".$fila['product_id']."'>";
													echo "<br>"."<br>";
													echo "<button value='".$fila['product_id']."' class='botoncompra' ><li class='btn btn-default add-to-cart'>Comprar ahora</li></button>";
													echo "</div>";
													echo "</div>";
													echo "</div>";
													echo "</div>";
													echo "</div>";
																			  }

													mysqli_close($conexion);
											 ?>

										</div>


										<div class="item">
												
												<?php
												$conexion = mysqli_connect("localhost","tienda","online","joyeria");
												mysqli_set_charset($conexion, "utf8");
												$peticion = "SELECT idproducto,products.product_image,products.product_id,products.product_desc,products.product_title,products.product_price,COUNT(idproducto) FROM `lineaspedido` LEFT JOIN products 
												ON lineaspedido.idproducto = products.product_id GROUP BY idproducto ORDER BY COUNT(idproducto) DESC LIMIT 3";
												
												$resultado = mysqli_query($conexion, $peticion);
												while ($fila = mysqli_fetch_array($resultado)) { 
												echo "<div class='col-sm-4' >";
												echo "<div class='product-image-wrapper'>";
												echo "<div class='single-products'>";
												echo "<div class='productinfo text-center'><img src='panel_administrador/product_images/".$fila['product_image']."' width=100px height=150px class='circulo' >";
												echo "<h2>Precio: ".$fila['product_price']." Pesos</h2>";
												echo "<a href='catalogo.php?id=".$fila['product_id']."'><p>".$fila['product_title']."</p></a>";
												echo "<p>".$fila['product_desc']."</p>";
												echo "<br>";	
												echo "</div>";
												echo "<div class='product-overlay'>";
												echo "<div class='overlay-content' >";
												echo "<h2>Precio: ".$fila['product_price']." Pesos</h2>";
												echo "<a href='catalogo.php?id=".$fila['product_id']."'><p>".$fila['product_title']."</p></a>";
												echo "<p>Cantidad:</p>";
												echo "<input type='number' style='text-align:center; width:30px;' value='1' max='5' min='1' id='num".$fila['product_id']."'>";
												echo "<br>"."<br>";
												echo "<button value='".$fila['product_id']."' class='botoncompra' ><li class='btn btn-default add-to-cart'>Comprar ahora</li></button>";
												echo "</div>";
												echo "</div>";
												echo "</div>";
												echo "</div>";
												echo "</div>";
																		  }

												mysqli_close($conexion);
											    ?>
										</div>


								</div>
										 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
											<i class="fa fa-angle-left"></i>
										 </a>
										 <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
											<i class="fa fa-angle-right"></i>
										 </a>			
							</div>
			</div>
	</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2015 Zafiro-Azul. Derechos reservados.</p>
					<p class="pull-right">Diseñado por <span>Ricardo Echeverría, Eduardo Contreras y Ricardo Hu</span></p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>