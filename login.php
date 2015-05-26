<?php include "php/config.inc" ?>

<?php 

include("funciones/funciones.php");
include("includes/db.php"); 
?>
<?php
include "php/cabecera.inc"
?>

<?php
include "cabecera_formato.inc"
?>
	
	<section ><!--form-->
		<div class="container">
			
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>¡Verifica tu sesión para finalizar tu compra!</h2>
						<form action="php/logcliente.php" method="POST"	>
							<input type="text" name="customer_email" placeholder="E-mail" />
							<input type="password" name="customer_pass" placeholder="Password"  />
							<a href="registro.php">¿Aún no estás registrado?<a>
							<input type="submit" class="btn btn-default" name="Comprar" value="Login" width="80px" >
						</form>
					</div><!--/login form-->
				</div>
				
				
			</div>
		</div>

	
	</section><!--/form-->
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<br>
	<br><br>
	<br>
	<br>
	<br>
	<footer> 
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

<?php 
	if(isset($_POST['registro'])){
	
		
		$ip = getIp();
		
		$c_email = $_POST['customer_email'];
		$c_pass = $_POST['customer_pass'];
		$c_name = $_POST['customer_name'];
		$c_apellidos = $_POST['apellidos'];
		$c_telefono = $_POST['telefono'];
		
		$insert_c = "insert into clientes (customer_ip,customer_email,customer_pass, customer_name, apellidos, telefono) values ('$ip','$c_email','$c_pass','$c_name','$c_apellidos','$c_telefono')";
	
		$run_c = mysqli_query($con, $insert_c); 
		
		$sel_cart = "select * from cart where ip_add='$ip'";
		
		$run_cart = mysqli_query($con, $sel_cart); 
		
		$check_cart = mysqli_num_rows($run_cart); 
		
		if($check_cart==0){
		
		$_SESSION['customer_email']=$c_email; 
		
		 {
		
		$_SESSION['customer_email']=$c_email; 
		
		echo "<script>alert('¡La cuenta ha sido existosamente creada! Validando la compra...')</script>";
		
		echo "<script>window.open('checkout.php','_self')</script>";
		
		
		}
	}

}



?>