
<?php 
session_start();


if(!isset($_SESSION['customer_email'])){
	
	echo "<script>window.open('login.php?sesion_no_iniciada=¡No has iniciado sesion!','_self')</script>";

 
}


else {

?>

<!DOCTYPE html>
<html>
						<?php 
				


				include("php/logcliente2.php");
				
				

				?>
	</html>





	<?php } ?>