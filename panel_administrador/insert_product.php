

<?php 

include("includes/db.php");

?>


<div class="field" >
	<form action="index.php?insert_product" method="post" enctype="multipart/form-data" class="form" > 
		
		<table class="insertar_producto" align="center" border="2px" >
			
			<tr align="center">
				<td colspan="7"><h2>Inserta un nuevo producto</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Título del producto:</b></td>
				<td><input type="text" name="product_title"  required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Categoría del producto:</b></td>
				<td>
				
				<select name="product_cat" required >
					<option>Selecciona categoria</option>
					<?php 
		$get_cats = "select * from categorias";
	
		$run_cats = mysqli_query($con, $get_cats);
	
		while ($row_cats=mysqli_fetch_array($run_cats)){
	
		$cat_id = $row_cats['cat_id']; 
		$cat_title = $row_cats['cat_title'];
	
	
		echo "<option value='$cat_id' required>$cat_title</option>";
	
	
	}
					
					?>
				</select>
				
			
				</td>
			</tr>
			
			<tr>
				<td align="right"><b>Tipo de producto:</b></td>
				<td>
				<select name="tipo_producto" required>
					<option>Selecciona un tipo</option>
					<?php 
		$get_tiposproducto = "select * from tiposproducto";
	
	$run_tiposproducto = mysqli_query($con, $get_tiposproducto);
	
	while ($row_tiposproducto=mysqli_fetch_array($run_tiposproducto)){
	
		$tipoproducto_id = $row_tiposproducto['tipoproducto_id']; 
		$nombre_tipoproducto = $row_tiposproducto['nombre_tipoproducto'];
	
	echo "<option value='$tipoproducto_id' required >$nombre_tipoproducto</option>";
	
	
	}
					
					?>
				</select>
				
				
				</td>
			</tr>
			
			<tr>
				<td align="right"><b>Imagen del producto:</b></td>
				<td><input type="file" name="product_image" accept="image/*" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Precio del producto:</b></td>
				<td><input type="number" name="product_price" required/></td>
			</tr>
			
			<tr>
				<td align="right"><b>Descripcion del producto:</b></td>
				<td><textarea name="product_desc" cols="20" rows="10" required></textarea></td>
			</tr>
			<tr>
				<td align="right"><b>Existencias:</b></td>
				<td><input type="number" name="existencias" required/></td>
			</tr>
			<tr>
				<td align="right"><b>Palabras clave:</b></td>
				<td><input type="text" name="product_keywords"  required/></td>
			</tr>
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Insertar el producto" required/></td>
			</tr>
		
		</table>
	
	
	</form>

</div>


<?php 

	if(isset($_POST['insert_post'])){
	
		//getting the text data from the fields
		$product_title = $_POST['product_title'];
		$product_cat= $_POST['product_cat'];
		$tipo_producto = $_POST['tipo_producto'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$existencias = $_POST['existencias'];
		$product_keywords = $_POST['product_keywords'];
	
		//getting the image from the field
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];
		
		move_uploaded_file($product_image_tmp,"product_images/$product_image");
	
		 $insert_product = "insert into products (product_cat,tipo_producto,product_title,product_price,product_desc,product_image,existencias,product_keywords) values ('$product_cat','$tipo_producto','$product_title','$product_price','$product_desc','$product_image','$existencias','$product_keywords')";
		 
		 $insert_pro = mysqli_query($con, $insert_product);
		 
		 if($insert_pro){
		 
		 echo "<script>alert('Producto insertado!')</script>";
		 echo "<script>window.open('index.php?view_products','_self')</script>";
		 
		 }
	}








?>



