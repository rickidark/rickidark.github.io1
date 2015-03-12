<?php

session_start();
$suma = 0;
if(isset($_GET['p']))
{
$_SESSION['producto'][$_SESSION['contador']] = $_GET['p'];
$_SESSION['cantidad'][$_SESSION['contador']] = $_GET['cant'];
$_SESSION['contador']++;
}


$conexion = mysqli_connect("localhost","tienda","online","joyeria");
mysqli_set_charset($conexion, "utf8");



echo "<table>";
for($i = 0;$i< $_SESSION['contador'];$i++){
 
	//echo "Producto: ".$_SESSION['producto'][$i]."<br>";
	$peticion = "SELECT * FROM products WHERE product_id=" .$_SESSION['producto'][$i]."";
$resultado = mysqli_query($conexion, $peticion);
while($fila = mysqli_fetch_array($resultado)) {
	echo "<tr><td>".$_SESSION['cantidad'][$i]."</td><td>".$fila["product_title"]." &nbsp; ".$fila['product_price']."<br>";
$suma += $fila['product_price'];

} 
}

echo "<td><td>Subtotal</td><td>".number_format($suma,2)."</td></tr>";
echo "</table>";
mysqli_close($conexion);

?>


