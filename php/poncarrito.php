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

	if(isset($_SESSION['producto'][$i])) {
				//echo "Producto: ".$_SESSION['producto'][$i]."<br>";
				$peticion = "SELECT * FROM products WHERE product_id=" .$_SESSION['producto'][$i]."";
				$resultado = mysqli_query($conexion, $peticion);
				while($fila = mysqli_fetch_array($resultado)) {
					echo "  <tr><tr><td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['cantidad'][$i]."</td><td><td>".$fila['product_title']."</td><td></td><td>$".number_format(($_SESSION['cantidad'][$i]*$fila['product_price']),2)."<td align='center'><a href='./php/destruir2.php?id=".$i."'&action=remove' class='myButton' >X</a></td>"."</tr>";
				$suma += $_SESSION['cantidad'][$i]*$fila['product_price'];
				
				}
	} 
}
echo "<td><td>Subtotal</td><td>"."$".number_format($suma,2)."</td></tr>";
echo "</table>";
mysqli_close($conexion);

?>


