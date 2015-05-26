<?php 
	include("includes/db.php"); 

	$delete_c= $_GET['delete_pro'];
	unlink("product_images/$delete_c");
	
	if(isset($_GET['delete_c'])){
	
	$delete_id = $_GET['delete_c'];
	
	$delete_c = "delete from clientes where customer_id='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_c); 
	
	if($run_delete){
	
	echo "<script>alert('Un cliente a sido eliminado!')</script>";
	echo "<script>window.open('index.php?ver_clientes','_self')</script>";
	}
	
	}





?>