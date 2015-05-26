<?php include "cabecera.inc";?>

<?php include "../php/config.inc";?>
<table class="estilo_pedidos">
<?php

$conexion = mysqli_connect("localhost","tienda","online","joyeria");
mysqli_set_charset($conexion, "utf8");
$peticion = "SELECT pedidos.id AS idpedido,fecha,estado,customer_name,apellidos FROM pedidos LEFT JOIN clientes ON pedidos.idcliente = clientes.customer_id ORDER BY estado,fecha ASC";
$resultado = mysqli_query($conexion, $peticion);
while($fila = mysqli_fetch_array($resultado)) {
$estado = $fila['estado'];
//if($estado == 0){$diestado = "no servido";}else{$diestado = "servido";}
switch($estado){
	case 0:$diestado = "no servido";break;
	case 1:$diestado = "servido";break;
	case 2:$diestado = "anulado";break;
}

	echo '<tr';

	
	//if($estado == 0){echo ' style="background:rgb(255,200,200);"';}else{echo ' style="background:rgb(200,255,200);"';}
switch($estado){
	case 0:echo ' style="background:rgb(255,200,200);"';break;
	case 1:echo ' style="background:rgb(200,255,200);"';break;
	case 2:echo ' style="background:rgb(255,255,200);"';break;
}
	
	echo'><td class="fila">'.$fila['customer_name']." ".$fila['apellidos'].'</td><td class="fila">'.$fila['fecha'].'</td><td class="fila">'.$diestado.'</td><td class="fila"><a href="../php/pedidoservido.php?id='.$fila['idpedido'].'"><button class="botonservido">Pedido servido</button></a></td><td class="fila"><a href="../php/cancelarpedido.php?id='.$fila['idpedido'].'"><button class="botonservido">Cancelar pedido</button></a></td></tr>';
} 
mysqli_close($conexion);
?>
</table>

