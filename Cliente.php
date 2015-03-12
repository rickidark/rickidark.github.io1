<?php
include('conexion.php');
include('Persona.php');
class 	Cliente extends Persona
{
	public $email;
	public $direccion;
	public $telefono;

	
	function __construct()
	{
		$this->nombre;
		$this->apellido;
		$this->email;
		$this->direccion;
		$this->telefono;
		$this->usuario;
		$this->contrasena;





	}
	public function registrarCliente($nombre,$apellido,$email,$direccion,$telefono,$usuario,$contrasena){
		$result ="INSERT INTO cliente (nombre,apellido,email,direccion,telefono,usuario,contrasena) 
			VALUES ('$nombre','$apellido','$email','$direccion','$telefono','$usuario','$contrasena')";
		$rep= mysql_query($result);
		$req =(strlen($nombre)*strlen($nombre)*strlen($apellido)*strlen($email)*strlen($direccion)*strlen($telefono)*strlen($contrasena) or die("no se ha llenado todos los campos"));
		

		if ($rep) {
				echo '<html>
				<hed>
				<tiltle></title>
				<meta charset="utf-8">
				<link rel="stylesheet" type="text/css" href="usuario.css">
				</head>
				<body> <center><div id="cont"><div id="cabemeng">Mensaje</div><div id="mensajeu"><p> Sus datos se han registrado exitosamenete<p> </div></div></center></body>
				</html>';
				echo '<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<P align = "center"> <center><a href="formularioCliente.php"><div id="botones"> Regresar </div> </a> </center></ p>	
<P align = "center"> <center><a href="formularioAdministrador.php"><div id="botones"> Iniciar sesión</div> </a> </center></ p> </body></html>

</body>
</html>';
				
			}


			else {

				echo 

					'<Center>
					<P> ha ocurrido un error  sus datos no han sido registrados</ p> <br> Intentalo de nuevo
					</ Center>
					<P align = "center"> <a href="formularioProducto.php"> Regresar </a> </ p> ';

			}

			
	
}
		
}
	

	    


	
		







?>