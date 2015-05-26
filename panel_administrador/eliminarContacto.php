<?php 
include("includes/db.php");

if(isset($_GET['id'])){ 

$delete_id = $_GET['id'];

$delete_c = "delete from joyeria . contacto where id='$delete_id'";

$run_delete = mysqli_query($con, $delete_c);

if($run_delete){

	
	echo "<script>window.open('index.php?ver_mensajes','_self')</script>";
}

}
?>