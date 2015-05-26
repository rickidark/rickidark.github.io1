<?php 
	include("includes/db.php"); 
	
	if(isset($_GET['delete_cat'])){
	
	$delete_id = $_GET['delete_cat'];
	
	$delete_cat = "delete from categorias where cat_id='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_cat); 
	
	if($run_delete){
	
	echo "<script>alert('Una categoria a sido eliminada!')</script>";
	echo "<script>window.open('index.php?view_cats','_self')</script>";
	}
	
	}





?>