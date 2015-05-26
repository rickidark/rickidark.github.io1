
<br>

<h2 style="text-align:center; ">¿Realmente deseas eliminar tu cuenta?</h2>

<form action="" method="post">


<input type="submit" name="yes" value="Sí, deseo eliminar mi cuenta" /> 
<input type="submit" name="no" value="No" />


</form>

<?php 
include("includes/db.php"); 

	$user = $_SESSION['customer_email']; 
	
	if(isset($_POST['yes'])){
	
	$delete_customer = "delete from clientes where customer_email='$user'";
	
	$run_customer = mysqli_query($con,$delete_customer); 
	
	echo "<script>alert('We are really sorry, your account has been deleted!')</script>";
	echo "<script>window.open('../index.php','_self')</script>";
	}
	if(isset($_POST['no'])){
	
	echo "<script>alert('oh! do not joke again!')</script>";
	echo "<script>window.open('my_account.php','_self')</script>";
	
	}
	


?>