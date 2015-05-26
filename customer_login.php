
<?php 
session_start();
include("funciones/funciones.php");

?>
<?php 
include("includes/db.php");
?>


<?php
include "cabecera_formato.inc"
?>
	
	<section ><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="signup-form"><!--login form-->
						<h2>¡Ingresa a tu cuenta para comenzar a adquirir tus productos!</h2>
						<form action="" method="POST"	>
							<input type="text" name="customer_email" placeholder="E-mail" />
							<input type="password" name="customer_pass" placeholder="Password"  />
							<span>
								
							</span>
							<button type="submit" class="btn btn-default" name="login" value="login" >Ingresar</button>
							<a href="registro.php">¿Aún no estás registrado?<a>
					</form>
						<?php 
	if(isset($_POST['login'])){
	
		$customer_email = $_POST['customer_email'];
		$customer_pass = $_POST['customer_pass'];
		
		$sel_c = "select * from clientes where customer_pass='$customer_pass' AND customer_email='$customer_email'";
		
		$run_c = mysqli_query($con, $sel_c);
		
		$check_customer = mysqli_num_rows($run_c); 
		
		if($check_customer==0){
		
		echo "<script>alert('El password o el correo electrónico que has ingresado son incorrectos. Por favor intenta de nuevo.')</script>";
		exit();
		}
		$ip = getIp(); 
		
		$sel_cart = "select * from cart where ip_add='$ip'";
		
		
		
		if($check_customer>0){
		
		$_SESSION['customer_email']=$customer_email; 
		
		echo "<script>alert('Has ingresado satisfactoriamente. Redirigiendo a la página principal')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		
		}
		
	}
	
	
	?>
					</div><!--/login form-->
				</div>
				
			</div>
		</div>
		</section><!--/form-->
		<footer> 
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2015 Todos los derechos reservados</p>
					<p class="pull-right">Diseñado por <span>Ricardo Echeverría, Eduardo Contreras y Ricardo Hu</span></p>
				</div>
			</div>
		</div>
		
	</footer> 
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>