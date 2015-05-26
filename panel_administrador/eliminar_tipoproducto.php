<?php 
	include("includes/db.php"); 
	
	if(isset($_GET['eliminar_tipoproducto'])){
	
	$delete_id = $_GET['eliminar_tipoproducto'];
	
	$eliminar_tipoproducto = "delete from tiposproducto where tipoproducto_id='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $eliminar_tipoproducto); 
	
	if($run_delete){
	
	echo "<script>alert('Un tipo de producto ha sido eliminado!')</script>";
	echo "<script>window.open('index.php?ver_tiposproducto','_self')</script>";
	}
	
	}





?>