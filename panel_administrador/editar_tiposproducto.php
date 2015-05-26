<?php 
include("includes/db.php"); 

if(isset($_GET['editar_tiposproducto'])){

	$tipoproducto_id = $_GET['editar_tiposproducto']; 
	
	$get_tipoproducto = "select * from tiposproducto where tipoproducto_id='$tipoproducto_id'";

	$run_tipoproducto = mysqli_query($con, $get_tipoproducto); 
	
	$row_tipoproducto= mysqli_fetch_array($run_tipoproducto); 
	
	$tipoproducto_id = $row_tipoproducto['tipoproducto_id'];
	
	$nombre_tipoproducto = $row_tipoproducto['nombre_tipoproducto'];
}


?>
<form action="" method="post" style="padding:80px;">

<b>Actualizar tipo de producto</b>
<input type="text" name="new_tipoproducto" value="<?php echo $nombre_tipoproducto;?>"/> 
<br><br>
<input type="submit" name="update_tipoproducto" value="Actualizar" /> 

</form>

<?php  

	if(isset($_POST['update_tipoproducto'])){
	
	$update_id = $tipoproducto_id; 
	
	$new_tipoproducto = $_POST['new_tipoproducto'];
	
	$update_tipoproducto = "update tiposproducto set nombre_tipoproducto='$new_tipoproducto' where tipoproducto_id='$update_id'";

	$run_update = mysqli_query($con, $update_tipoproducto); 
	
	if($run_update){
	
	echo "<script>alert('Tipo de producto actualizado!')</script>";
	echo "<script>window.open('index.php?ver_tiposproducto','_self')</script>";
	}
	}

?>