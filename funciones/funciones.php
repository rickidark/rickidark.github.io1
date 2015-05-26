		<?php 
		// After uploading to online server, change this connection accordingly
		$con = mysqli_connect("localhost","tienda","online","joyeria");
		mysqli_set_charset($con, "utf8");
		if (mysqli_connect_errno())
		  {
		  echo "The Connection was not established: " . mysqli_connect_error();
		  }
		 // getting the user IP address
		  function getIp() {
		    $ip = $_SERVER['REMOTE_ADDR'];
		 
		    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		        $ip = $_SERVER['HTTP_CLIENT_IP'];
		    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		    }
		 
		    return $ip;
		}
		  
		  
		  
		//creating the shopping cart
		function cart(){

		if(isset($_GET['add_cart'])){

			global $con; 
			
			$ip = getIp();
			
			$pro_id = $_GET['add_cart'];

			$check_pro = "select * from cart where ip_add='$ip' AND p_id='$pro_id'";
			
			$run_check = mysqli_query($con, $check_pro); 
			
			if(mysqli_num_rows($run_check)>0){

			echo "";
			
			}
			else {
			
			$insert_pro = "insert into cart (p_id,ip_add) values ('$pro_id','$ip')";
			
			$run_pro = mysqli_query($con, $insert_pro); 
			
			echo "<script>window.open('catalogo.php','_self')</script>";
			}
			
		}

		}
		 // getting the total added items
		 
		 function total_items(){
		 
			if(isset($_GET['add_cart'])){
			
				global $con; 
				
				$ip = getIp(); 
				
				$get_items = "select * from cart where ip_add='$ip'";
				
				$run_items = mysqli_query($con, $get_items); 
				
				$count_items = mysqli_num_rows($run_items);
				
				}
				
				else {
				
				global $con; 
				
				$ip = getIp(); 
				
				$get_items = "select * from cart where ip_add='$ip'";
				
				$run_items = mysqli_query($con, $get_items); 
				
				$count_items = mysqli_num_rows($run_items);
				
				}
			
			echo $count_items;
			}
		  
		// Getting the total price of the items in the cart 
			
			function total_price(){
			
				$total = 0;
				
				global $con; 
				
				$ip = getIp(); 
				
				$sel_price = "select * from cart where ip_add='$ip'";
				
				$run_price = mysqli_query($con, $sel_price); 
				
				while($p_price=mysqli_fetch_array($run_price)){
					
					$pro_id = $p_price['p_id']; 
					
					$pro_price = "select * from products where product_id='$pro_id'";
					
					$run_pro_price = mysqli_query($con,$pro_price); 
					
					while ($pp_price = mysqli_fetch_array($run_pro_price)){
					
					$product_price = array($pp_price['product_price']);
					
					$values = array_sum($product_price);
					
					$total +=$values;
					
					}
				
				
				}
				
				echo "$" . $total;
				
			
			}

			//AGREGANDO VALORES AL CARRITO

			function suma(){
		$suma = 0;
		
		if(isset($_GET['p'])){
			$_SESSION['producto'][$_SESSION['contador']] = $_GET['p'];
			$_SESSION['cantidad'][$_SESSION['contador']] = $_GET['cant'];
			$_SESSION['contador']++;
		
			
		}

		$conexion = mysqli_connect("localhost","tienda","online","joyeria");
		mysqli_set_charset($conexion, "utf8");
		 

		echo "<div>";
		for($i = 0;$i< $_SESSION['contador'];$i++){
			if (isset($_SESSION['producto'][$i])) {

				//echo "Producto: ".$_SESSION['contador']."<br>";
				$peticion = "SELECT * FROM products WHERE product_id=".$_SESSION['producto'][$i]."";
				$resultado = mysqli_query($conexion, $peticion);
				while($fila = mysqli_fetch_array($resultado)) {
				//echo "  <tr><tr><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['cantidad'][$i]."</td><td><td>".$fila['product_title']."<div><img src='panel_administrador/product_images/".$fila['product_image']."' class='circulo' width=100px height=100px></div>"."</td><td></td><td>$".number_format(($_SESSION['cantidad'][$i]*$fila['product_price']),2)."<td align='center'><a href='./php/destruir2.php?id=".$_SESSION['producto'][$i]."'>X</a></td>"."</tr>";
				echo "  <tr><tr><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['cantidad'][$i]."</td><td><td>".$fila['product_title']."<div><img src='panel_administrador/product_images/".$fila['product_image']."' class='circulo' width=100px height=100px></div>"."</td><td></td><td>$".number_format(($_SESSION['cantidad'][$i]*$fila['product_price']),2)."<td align='center'><a href='./php/destruir2.php?id=".$i."' class='myButton' >X</a></td>"."</tr>";
				$suma += $_SESSION['cantidad'][$i]*$fila['product_price'];
				
				
				}

			}
		}
		echo "<tr><td></td><td><td></td><td color='red'>Subtotal:</td><td>$".number_format($suma,2)."</td></tr>";
		echo "</div>";
		mysqli_close($conexion);

		}


		//getting the categorias





		//getting the categorias

		function getCats(){
			
			global $con; 
			
			$get_cats = "select * from categorias";
			
			$run_cats = mysqli_query($con, $get_cats);
			
			while ($row_cats=mysqli_fetch_array($run_cats)){
			
				$cat_id = $row_cats['cat_id']; 
				//$cat_id = $_SESSION['cat_id']; 
				$cat_title = $row_cats['cat_title'];
			
			echo "<li id='navegador1'><a href='catalogo.php?cat=$cat_id'>$cat_title</a></li>";
			
			
			}


		}

		//getting the tiposproducto

		function gettiposproducto(){
			
			global $con; 
			
			$get_tiposproducto = "select * from tiposproducto";
			
			$run_tiposproducto = mysqli_query($con, $get_tiposproducto);
			
			while ($row_tiposproducto=mysqli_fetch_array($run_tiposproducto)){
				
				$tipoproducto_id = $row_tiposproducto['tipoproducto_id']; 
				$nombre_tipoproducto = $row_tiposproducto['nombre_tipoproducto'];
			
			echo "<li><a href='catalogo.php?tipoproducto=$tipoproducto_id'>$nombre_tipoproducto</a></li>";
			
			
			}
		}

		function getPro(){

			if(!isset($_GET['cat'])){
				if(!isset($_GET['tipoproducto'])){

			$conexion = mysqli_connect("localhost","tienda","online","joyeria");
		mysqli_set_charset($conexion, "utf8");
		$peticion = "SELECT * FROM products WHERE existencias > 0";//seleccionar la categoría 
		$resultado = mysqli_query($conexion, $peticion);
		while($fila = mysqli_fetch_array($resultado)) {
			echo "<div class='col-sm-4'>";
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
			echo "<input type='number'  style='text-align:center; width:30px;' value='1' max='5' min='1' id='num".$fila['product_id']."'>";
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
		}

		}

		function getCatPro(){

			if(isset($_GET['cat'])){
				
			$cat_id = $_GET['cat'];

			global $con; 
			
			$get_cat_pro = "select * from products where product_cat='$cat_id'" ;

			$run_cat_pro = mysqli_query($con, $get_cat_pro); 
			
			$count_cats = mysqli_num_rows($run_cat_pro);
			
			if($count_cats==0){
			
			echo "<h2 style='padding:20px;'>¡No hay productos en esta categoría!</h2>";
			
			}
			
			
			
			$conexion = mysqli_connect("localhost","tienda","online","joyeria");
			mysqli_set_charset($conexion, "utf8");
			$peticion = "SELECT * FROM products WHERE product_cat='$cat_id' AND existencias > 0";
			$resultado = mysqli_query($conexion, $peticion);
			while($fila = mysqli_fetch_array($resultado)) {
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
			echo "<h2>Precio: $".$fila['product_price']."Pesos</h2>";
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
		}
		}


		function getTipoPro(){
			if(isset($_GET['tipoproducto'])){
			
			$tipoproducto_id = $_GET['tipoproducto'];

			global $con; 
			
			$get_tipoproducto_pro = "select * from products where tipo_producto='$tipoproducto_id'  ";

			$run_tipoproducto_pro = mysqli_query($con, $get_tipoproducto_pro); 
			
			$count_tiposproducto = mysqli_num_rows($run_tipoproducto_pro);
			
			if($count_tiposproducto==0){
			
			echo "<h2 style='padding:20px;'>Actualmente no existen productos asociados a este tipo de producto</h2>";
			
			}
			
			
			
			$conexion = mysqli_connect("localhost","tienda","online","joyeria");
			mysqli_set_charset($conexion, "utf8");
			$peticion = "SELECT * FROM products WHERE tipo_producto='$tipoproducto_id' AND existencias > 0";//seleccionar la categoría caballeros
			$resultado = mysqli_query($conexion, $peticion);
			while($fila = mysqli_fetch_array($resultado)) {
			echo "<div class='col-sm-4'>";
			
			echo "<div class='product-image-wrapper'>";
			echo "<div class='single-products'>";
			echo "<div class='productinfo text-center'><img src='panel_administrador/product_images/".$fila['product_image']."' width=100px height=150px class='circulo' >";
			echo "<h2>Precio:$".$fila['product_price']." Pesos</h2>";
			echo "<a href='catalogo.php?id=".$fila['product_id']."'><p>".$fila['product_title']."</p></a>";
			echo "<p>".$fila['product_desc']."</p>";
			echo "<br>";	
			
			echo "</div>";
			echo "<div class='product-overlay'>";
			echo "<div class='overlay-content' >";
			echo "<h2>Precio:$".$fila['product_price']." Pesos</h2>";
			echo "<a href='catalogo.php?id=".$fila['product_id']."'><p>".$fila['product_title']."</p></a>";
			echo "<p>Cantidad:</p>";
			echo "<input type='number'  style='text-align:center; width:30px;' value='1' max='5' min='1' id='num".$fila['product_id']."'>";
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


		}


	





		?>