<!DOCTYPE html>
<?php 
session_start();
include("funciones/funciones.php");
include("includes/db.php"); 
?>
<html lang="en">
<?php
include "cabecera_formato.inc"
?>


<h2 align="center" style="font-size:20px; color:#4876FF;">¡Crea una cuenta y empieza a disfrutar de nuestros productos!</h2>
			<div class="row">
					
				<div class="col-sm-3 col-sm-offset-4">

					
					<div class="signup-form"><!--login form-->
						

						<h2>Registro</h2>
						<form action="registro.php" method="POST" enctype="multipart/form-data">
							<input type="email" placeholder="Email" name="customer_email" required>
							<input type="password" placeholder="Password" name="customer_pass" required>
							<input type="text" placeholder="Nombre" name="customer_name" required>
							<input type="text" placeholder="Apellidos" name="apellidos" required>
							<tr>
							<td align="right" required>Selecciona una imagen de perfil:</td>
							<td><input type="file" name="c_imagen" accept="image/*" required/></td>
						</tr>
							<input type="text" placeholder="Dirección" name="direccion" required>
							<input type="text" placeholder="Teléfono" name="telefono"  required>
				
							
							<button type="submit" value="guardar" class="btn btn-default" name="registro" align="right">Registrarse</button>
						</form>
					</div><!--/login form-->
				</div>
				
			</div>
		


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
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="js/gmaps.js"></script>
	<script src="js/contact.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
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
		$c_imagen = $_FILES['c_imagen']['name'];
		$c_imagen_tmp = $_FILES['c_imagen']['tmp_name'];
		$c_direccion = $_POST['direccion'];
		$c_telefono = $_POST['telefono'];
	
		
		move_uploaded_file($c_imagen_tmp,"cliente/imagenes_cliente/$c_imagen");
		
		 $insert_c = "insert into clientes (customer_ip,customer_email,customer_pass, customer_name, apellidos,customer_image, direccion, telefono) values ('$ip','$c_email','$c_pass','$c_name','$c_apellidos','$c_imagen','$c_direccion','$c_telefono')";
	
		$run_c = mysqli_query($con, $insert_c); 
		
		
		
		$_SESSION['customer_email']=$c_email; 
		
		echo "<script>alert('¡La cuenta ha sido exitosamente creada, ya puedes comenzar a comprar tus productos!')</script>";
		echo "<script>window.open('my_account.php','_self')</script>";

	}
?>