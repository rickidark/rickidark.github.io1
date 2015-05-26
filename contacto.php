
<?php 


include("funciones/funciones.php");


?>
<?php
include "php/cabecera.inc"
?>

<?php
include "cabecera_formato.inc"
?>

	
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	 	
    		<div class="row">  	
	    		<div class="col-sm-8">

	    			<div class="contact-form">
	    				<h2 class="title text-center">Contáctanos</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
	    				
				    	<form action="" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="nombre" class="form-control" required="required" placeholder="Nombre">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="asunto" class="form-control" required="required" placeholder="Asunto">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="mensaje" id="message" required="required" class="form-control" rows="8" placeholder="Escribe tu mensaje aquí"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit"  name="contacto" class="btn btn-primary pull-center" value="Enviar">

				               
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Informacion de Contacto</h2>
	    				<address>
	    					<p>Joyería Zafiro</p>
							<p>69 Por 56 Centro </p>
							<p>Mérida</p>
							<p>CP. 97177</p>
							
							<p>Teléfono: +2346 17 38 93</p>
							<p>Fax: 14-252-0026</p>
							<p>Email: info@zafiro.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">¡Encuentranos en las redes sociales!</h2>
							<ul>
								<li>
									<a href="https://www.facebook.com/ZefiroMerida"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://twitter.com/ZafiroMerida"><i class="fa fa-twitter"></i></a>
								</li>
								
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	<br><br>
<br><br><br>
	
		<footer> 
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright Joyería Zafiro Azul © 2015 Todos los derechos reservados</p>
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

	include("includes/db.php");
	if(isset($_POST['contacto'])){
	
		
		
		
		$c_nombre = $_POST['nombre'];
		$c_email = $_POST['email'];
		$c_asunto = $_POST['asunto'];
		$c_mensaje = $_POST['mensaje'];
		
		
		$insert_c = "insert into contacto (nombre, email, asunto, mensaje) values ('$c_nombre','$c_email','$c_asunto','$c_mensaje')";
	
		$run_c = mysqli_query($con, $insert_c); 
		
		
		if($run_c){
		

		
		echo "<script>alert('Tu mensaje ha sido enviado, muy pronto recibirás un correo de respuesta.')</script>";
		
		echo "<script>window.open('index.php','_self')</script>";
		
		
		}
	}





?>