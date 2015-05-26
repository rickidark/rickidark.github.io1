
<form action="" method="post" >

<b>Insertar nuevo tipo de producto:</b>
<input type="text" name="new_tipoproducto" required/> 
<input type="submit" name="add_tipoproducto" value="Agregar" /> 

</form>

<?php 
include("includes/db.php"); 

	if(isset($_POST['add_tipoproducto'])){
	
	$new_tipoproducto = $_POST['new_tipoproducto'];
	
	$insertar_tiposproducto = "insert into tiposproducto (nombre_tipoproducto) values ('$new_tipoproducto')";

	$run_tipoproducto = mysqli_query($con, $insertar_tiposproducto); 
	
	if($run_tipoproducto){
	
	echo "<script>alert('¡Nuevo tipo de producto insertado!')</script>";
	echo "<script>window.open('index.php?ver_tiposproducto','_self')</script>";
	}
	}

?>