

<?php 

include("includes/db.php");

if(isset($_GET['edit_promo'])){

	$get_id = $_GET['edit_promo']; 
	
	$get_promo = "select * from promo where product_id='$get_id'";
	
	$run_promo = mysqli_query($con, $get_promo); 
	
	$i = 0;
	
	$row_promo=mysqli_fetch_array($run_promo);
		
		$promo_id = $row_promo['product_id'];
		$promo_title = $row_promo['product_title'];
		$promo_desc = $row_promo['product_desc'];
		$promo_imagen = $row_promo['product_image'];
		
		
	
}
?>
<!DOCTYPE>
<html lang="es">
	<head>
		<title>Actualizar promociones</title> 
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<link rel="stylesheet" href="estiloadmin.css">
	</head>
	
<body bgcolor="skyblue">


	<form action="" method="post" enctype="multipart/form-data"> 
		
		<table align="center" class="editar_productos" border="2" bgcolor="#187eae">
			
			<tr align="center">
				<td colspan="7"><h2>Editar y actualizar promociones</h2></td>
			</tr>
			
			<tr class="editar_productos">
				<td align="right"><b>Título de la promoción:</b></td>
				<td><input type="text" name="product_title" size="60" value="<?php echo $promo_title;?>" required/></td>
			</tr>
			

			
			<tr class="editar_productos">
				<td align="right"><b>Imagen de la promoción:</b></td>
				<td><input type="file" name="product_image" accept="image/*" required /><img src="promos/<?php echo $promo_imagen; ?>" width="60" height="60"/></td>
			</tr>
			
		
			
			<tr class="editar_productos">
				<td align="right"><b>Descripción del producto:</b></td>
				<td><textarea name="product_desc" cols="20" rows="10" ><?php echo $promo_desc;?></textarea></td>
			</tr>

			
			<tr align="center" class="editar_productos">
				<td colspan="7"><input type="submit" name="update_promo" value="Actualizar promoción"/></td>
			</tr>
		
		</table>
	
	
	</form>


</body> 
</html>
<?php 

	if(isset($_POST['update_promo'])){
	
		//getting the text data from the fields
		
		$update_id = $promo_id;
		
		$promo_title = $_POST['product_title'];

		$promo_desc = $_POST['product_desc'];
		
	
		//getting the image from the field
		$promo_imagen = $_FILES['product_image']['name'];
		$promo_imagen_tmp = $_FILES['product_image']['tmp_name'];
		
		move_uploaded_file($promo_imagen_tmp,"promos/$promo_imagen");
	
		 $update_promo = "update promo set product_title='$promo_title',product_desc='$promo_desc',product_image='$promo_imagen' where product_id='$update_id'";
		 
		 $run_promo = mysqli_query($con, $update_promo);
		 
		 if($run_promo){
		 
		 echo "<script>alert('Promoción actualizada!')</script>";
		 
		 echo "<script>window.open('index.php?ver_promociones','_self')</script>";
		 
		 }
	}








?>












