<?php 
	include("includes/db.php"); 
	
	if(isset($_GET['delete_promo'])){
	
	$delete_id = $_GET['delete_promo'];
	
	$delete_promo = "delete from promo where product_id='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_promo); 
	
	if($run_delete){
	
	echo "<script>alert('¡Una promoción ha sido eliminada!')</script>";
	echo "<script>window.open('index.php?ver_promociones','_self')</script>";
	}
	
	}





?>