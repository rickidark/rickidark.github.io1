<?php
$baseDatos="joyeria";
$servidor="localhost";
$usuario="root";

$conexion=mysql_connect($servidor,$usuario);
mysqli_set_charset($conexion, "utf8");
mysql_select_db($baseDatos,$conexion);

?>