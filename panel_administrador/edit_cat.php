<?php 
include("includes/db.php"); 

if(isset($_GET['edit_cat'])){

	$cat_id = $_GET['edit_cat']; 
	
	$get_cat = "select * from categorias where cat_id='$cat_id'";

	$run_cat = mysqli_query($con, $get_cat); 
	
	$row_cat = mysqli_fetch_array($run_cat); 
	
	$cat_id = $row_cat['cat_id'];
	$cat_title = $row_cat['cat_title'];
}


?>
<form action="" method="post" style="padding:80px;">

<b>Actualizar categoría:</b>
<input type="text" name="new_cat" value="<?php echo $cat_title;?>"/> 
<input type="submit" name="update_cat" value="Update Category" required /> 

</form>

<?php 


	if(isset($_POST['update_cat'])){
	
	$update_id = $cat_id;
	
	$new_cat = $_POST['new_cat'];
	
	$update_cat = "update categorias set cat_title='$new_cat' where cat_id='$update_id'";

	$run_cat = mysqli_query($con, $update_cat); 
	
	if($run_cat){
	
	echo "<script>alert(' Categoria actualizada!')</script>";
	echo "<script>window.open('index.php?view_cats','_self')</script>";
	}
	}

?>