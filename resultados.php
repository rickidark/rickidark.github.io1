
						<?php include "php/config.inc" ?>

						<?php 

						include("funciones/funciones.php");

						?>
						<?php
						include "php/cabecera.inc"
						?>

						<?php 
    			include("includes/db.php");
    	 				?>

						<?php
						include "cabecera_formato.inc"
						?>

							
							
							
							<section>
								<div class="container">
									<div class="row">
										
										<div class="col-sm-3">
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
														<div id="sportswear" class="panel-collapse expand">
															<div class="panel-body">
																<ul >
										
										<?php getCats(); ?>
				<hr>
				-Todos los Productos-
				
				<?php gettiposproducto(); ?>
										
										<ul>
											
															</div>
														</div>
															<div >
								<i class="fa fa-shopping-cart fa-cog" >Carrito</i>
			<div  id="carrito" class="myButton">
			
			

			</div>
			<br>
			<?php 


			if (isset($_SESSION['contador'])){ ?>
				
				<a href='php/destruir.php'><button>Vaciar</button></a>
				
				<a href='checkout.php'><button >Comprar</button></a>
			<?php } ?>

			


			</div>

													</div>
													
												</div><!--/category-products-->
						</div>			

											</div>
				<div class="col-sm-4">
											

						  <div class="features_items" ><!--features_items-->
												<h2 class="title text-center">Descripción de Producto</h2>
									
													<div id="products_box">
							<?php 
							
						if(isset($_GET['search'])){
							
						$search_query = $_GET['user_query'];
						global $con; 
						$get_search_pro = "SELECT * FROM products WHERE product_keywords like '%$search_query%' " ;
						$run_search_pro = mysqli_query($con, $get_search_pro);
						$count_search = mysqli_num_rows($run_search_pro);
						if($count_search==0){
			
						echo "<h2 style='padding:20px; font-size: 15px; text-align:center;	'>¡La búsqueda no ha arrojado ningún resultado, sigue buscando!</h2>";
			
						}	



						$conexion = mysqli_connect("localhost","tienda","online","joyeria");
						mysqli_set_charset($conexion, "utf8");

						$peticion = "SELECT * FROM products WHERE product_keywords like '%$search_query%' ";//seleccionar la categoría caballeros
						$resultado = mysqli_query($conexion, $peticion);
						while($fila = mysqli_fetch_array($resultado)) {
						
						echo "<div class='col-sm-4'>";
						echo "<div class='product-image-wrapper'>";
						echo "<div class='single-products'>";
						echo "<div class='productinfo text-center'><img src='panel_administrador/product_images/".$fila['product_image']."' width=100px height=150px class='circulo'>";
						echo "<h2>Precio: ".$fila['product_price']." Pesos</h2>";
						echo "<a href='catalogo.php?id=".$fila['product_id']."'><p>".$fila['product_title']."</p></a>";
						echo "<p>".$fila['product_desc']."</p>";
						echo "</div>";
						echo "<div class='product-overlay'>";
						echo "<div class='overlay-content' >";
						echo "<h2>Precio: ".$fila['product_price']." Pesos</h2>";
						echo "<a href='catalogo.php?id=".$fila['product_id']."'><p>".$fila['product_title']."</p></a>";
						echo "<p>Cantidad:</p>";
						echo "<input type='text'  style='text-align:center; width:30px;' value='1' max='5' min='1' id='num".$fila['product_id']."'>";
						echo "<br>"."<br>";
						echo "<button value='".$fila['product_id']."' class='botoncompra' ><li class='btn btn-default add-to-cart'>Comprar ahora</li></button>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
						echo "</div>";

						

					 



							
							}
					mysqli_close($conexion);


							}


							?>

										</div>
								
									</div>
			</div>
							</section>
							<footer> 
								<div class="footer-bottom">
									<div class="container">
										<div class="row">
											<p class="pull-left">Copyright Zafiro Azul © 2015 Todos los derechos reservados</p>
											<p class="pull-right">Diseñado por <span>Ricardo Echeverría, Eduardo Contreras y Ricardo Hu</span></p>
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