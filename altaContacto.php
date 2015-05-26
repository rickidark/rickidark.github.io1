<?php  
$baseDatos="joyeria";
$servidor="localhost";
$usuario="root";

$conexion=mysql_connect($servidor,$usuario);
mysqli_set_charset($conexion, "utf8");
mysql_select_db($baseDatos,$conexion);
$nombre= $_POST['nombre'];
$email= $_POST['email'];
$asunto= $_POST['asunto'];
$mensaje= $_POST['mensaje'];
$result= mysql_query("INSERT INTO contacto (nombre, email, asunto, mensaje) VALUES ('$nombre', '$email', '$asunto', '$mensaje')");
if($result)
{
	echo "<script>alert('Tu mensaje ha sido enviado, muy pronto recibirás un correo de respuesta.')</script>";
echo '
		<meta http-equiv="refresh" content="0; url=index.php"> 
	';
}
else 
{
	echo'	<center>
	    	<p>Ha ocurrido un error</p><br>Intentalo de nuevo
	  		</center>
	  		<p align="center"><a href="contacto.php">Regresar</a></p>';
}
?>