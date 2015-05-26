

<?php 

include("includes/db.php");

?>

		
	

<div id="cart_items">


	<form action="index.php?insert_promo" method="post" enctype="multipart/form-data" > 
		
		<table class="promo" align="center" border="2px" >
			
			<tr align="center">
				<td colspan="3"><h2>Inserta una nueva promoción</h2></td>
			</tr>
			
			<tr>
				<td align="right"><b>Titulo de la promoción:</b></td>
				<td><input type="text" name="product_title" maxlength="30"  required/></td>
			</tr>
			

			

			
			<tr>
				<td align="right"><b>Imagen de la promoción:</b></td>
				<td><input type="file" name="product_image"  required/></td>
			</tr>
			

			
			<tr>
				<td align="right"><b>Descripción de la promoción:</b></td>
				<td><textarea class="txt_area" name="product_desc" cols="8" rows="4" required></textarea></td>
			</tr>
			
			
			
			<tr align="center">
				<td colspan="3"><input type="submit" name="insert_post" value="Insertar promoción"/></td>
			</tr>
		
		<?php 

	if(isset($_POST['insert_post'])){
	
		//getting the text data from the fields
		$product_title = $_POST['product_title'];
		$product_desc = $_POST['product_desc'];
	
		//getting the image from the field
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];
		
		move_uploaded_file($_FILES['product_image']['tmp_name'],"../panel_administrador/promos/".$_FILES['product_image']['name']);
	
		 $insert_product = "insert into promo (product_title,product_desc,product_image) values ('$product_title','$product_desc','$product_image')";
		 
		 $insert_pro = mysqli_query($con, $insert_product);
		 
		 if($insert_pro){
		 
		 echo "<script>alert('¡Promoción insertada!')</script>";
		 echo "<script>window.open('index.php?insert_promo','_self')</script>";
		 
		 }
	}





mysqli_close($con);


?>
	</table>	
	</div>

