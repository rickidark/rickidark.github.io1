
<?php


if (!isset($_SESSION['producto'])){
echo "<script>alert('Tu carrito está vacío')</script>";
echo '
		<meta http-equiv="refresh" content="0; url=../index.php"> 
	';

}

else{
?>
<?php


//ESTE ARCHIVO PHP ES PARA VALIDAR LA COMPRA CUANDO EL USUARIO YA INICIO SESIÓN PREVIAMENTE

date_default_timezone_set("Mexico/General");

$contador = 0;
$conexion = mysqli_connect("localhost","tienda","online","joyeria");
mysqli_set_charset($conexion, "utf8");
$peticion = "SELECT * FROM clientes WHERE customer_email = '".$_SESSION['customer_email']."'";
$resultado = mysqli_query($conexion, $peticion);
while($fila = mysqli_fetch_array($resultado)) {
	$contador++;
	$_SESSION['customer_email'] = $fila['customer_id'];
} 
if($contador > 0){
	
	$peticion = "INSERT INTO pedidos VALUES (NULL,".$_SESSION['customer_email'].",'" . date("d/m/y H:i:s") . "','0')";
	$resultado = mysqli_query($conexion, $peticion);

	$peticion = "SELECT * FROM pedidos WHERE idcliente = '".$_SESSION['customer_email']."' ORDER BY fecha DESC LIMIT 1";
	$resultado = mysqli_query($conexion, $peticion);
	while($fila = mysqli_fetch_array($resultado)) {
	$_SESSION['idpedido'] = $fila['id'];
	} 
	 "El número de tu pedido es:".$_SESSION['idpedido'];

	for($i = 0;$i< $_SESSION['contador'];$i++){
		
		if(isset($_SESSION['producto'][$i])) {	

		$peticion = "INSERT INTO lineaspedido VALUES (NULL,'".$_SESSION['idpedido']."','".$_SESSION['producto'][$i]."','".$_SESSION['cantidad'][$i]."')";
		$resultado = mysqli_query($conexion, $peticion);

		$peticion = "SELECT * FROM products WHERE product_id='".$_SESSION['producto'][$i]."'";
		$resultado = mysqli_query($conexion, $peticion);
		while($fila = mysqli_fetch_array($resultado)) {
			$existencias = $fila['existencias'];
			$peticiondos = "UPDATE products SET existencias = '".($existencias-$_SESSION['cantidad'][$i])."' WHERE product_id='".$_SESSION['producto'][$i]."'";
			$resultadodos = mysqli_query($conexion, $peticiondos);
			} 

			} 

	}

	

	 echo "<script>alert('Tu pedido se ha realizado satisfactoriamente. El número de referencia de pago en BANCOMER es: 829201381309823 ¡Gracias por tu compra! Cerrando sesión y regresando al index')</script>";
		session_destroy();
		echo '
		<meta http-equiv="refresh" content="0; url=../index.php"> 
	';


	
	
	
	
}

mysqli_close($conexion);

?>
<?php } ?>

			
