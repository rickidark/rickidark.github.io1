<!DOCTYPE html>
<html>
	<head>
		<title>joyeria</title>
		<meta charset="utf-8">
	</head>
	<body>
		
		<?php
			require_once ("Cliente.php");
			
           
    					$Client= new Cliente();
						$Client->registrarCliente(
                            $_POST['nombre'],
                            $_POST['apellido'],
                            $_POST['email'],
                            $_POST['direccion'],
                            $_POST['telefono'],
                            $_POST['usuario'],
                            $_POST['contrasena']);

						
		?>	
	</body>
</html>