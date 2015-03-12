<?php  
session_start();
include 'conexion.php';
$arreglo=$_SESSION['carrito'];
$numeroventa=0;
$re=mysql_query("SELECT * FROM compra order by numeroventa DESC limit 1 ") or die (mysql_error());
while($f=mysql_fetch_array($re))
{
	$numeroventa=$f['numeroventa'];

}
if ($numeroventa==0) {
	$numeroventa=1;
}else
{
	$numeroventa=$numeroventa+1;
}
for ($i=0; $i <count($arreglo) ; $i++) { 
	mysql_query("INSERT INTO `compra`( `numeroventa`, `nombre`, `imagen`, `precio`, `cantidad`, `subtotal`) Values(
		".$numeroventa.",
		'".$arreglo[$i]['Nombre']."',
		'".$arreglo[$i]['Imagen']."',
		'".$arreglo[$i]['Precio']."',
		'".$arreglo[$i]['Cantidad']."',
		'".($arreglo[$i]['Precio']*$arreglo[$i]['Cantidad'])."'
		) ") or die (mysql_error());
}
unset($_SESSION['carrito']);
 echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL=../../indexme.php">';


?>