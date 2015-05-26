
<?php 
session_start();


if(!isset($_SESSION['customer_email'])){
	
	echo "<script>window.open('customer_login.php?sesion_no_iniciada=¡No has iniciado sesión!','_self')</script>";
}
else {

?>


<?php
include("funciones/funciones.php");

?>


<?php
include "cabecera_formato.inc";
?>
	
		<!--Content wrapper starts-->
		<div class="content_wrapper">
		
			
					
		
			<div id="content_area">
			
		
			
				<div id="products_box">
				
				<div>
			
				<div align="center" ><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mi Cuenta</h2></div>
				
				<ul id="cats" align="center">
				<?php 
				$user = $_SESSION['customer_email'];
				
				$get_img = "select * from clientes where customer_email='$user'";
				
				$run_img = mysqli_query($con, $get_img); 
				
				$row_img = mysqli_fetch_array($run_img); 
				
				$c_imagen = $row_img['customer_image'];
				
				$c_name = $row_img['customer_name'];

				
			

				echo "<p style='text-align:center;'><img src='cliente/imagenes_cliente/$c_imagen'  width='150' height='150' class='circulo'/></p>";
				
				?>
				<li><a href="my_account.php?my_orders">Mis Pedidos</a></li>
				<li><a href="my_account.php?edit_account">Editar la cuenta</a></li>
				<li><a href="my_account.php?change_pass">Cambiar Password</a></li>
				<li><a href="my_account.php?delete_account">Eliminar Cuenta</a></li>
				<li><a href="logout.php">Salir</a></li>
				
				<ul>
				
				<div align="center">
				
				<?php 
				if(!isset($_GET['my_orders'])){
					if(!isset($_GET['edit_account'])){
						if(!isset($_GET['change_pass'])){
							if(!isset($_GET['delete_account'])){
							
				echo "
				<h2 style='padding:20px;'>Bienvenido:  $c_name </h2>
				<b>Actualmente en construcción <a href='my_account.php?my_orders'></a></b>";
				}
				}
				}
				}
				?>
				
				<?php 
				if(isset($_GET['edit_account'])){
				include("edit_account.php");
				}
				if(isset($_GET['change_pass'])){
				include("change_pass.php");
				}

				if(isset($_GET['delete_account'])){
				include("delete_account.php");
				}
				
				
				if(isset($_GET['my_orders'])){
				include("my_orders.php");
				}


				?>
				
				</div>
			
			</div>
		</div>
		<!--Content wrapper ends-->
		
		
		
		<div id="footer">
		
		<h2 style="text-align:center; padding-top:30px;">&copy; 2015 Derechos Reservados</h2>
		
		</div>
	
	
	
	
	
	
	</div> 
<!--Main Container ends here-->
    <script src="js/jquery.js"></script>
    <script src="js/codigo1.js"></script>
    <script>
    $(document).ready(function(){
        $('#formulario').html5form();    
    });
	</script>
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
<?php } ?>