<?php
$baseDatos="joyeria";
$servidor="localhost";
$usuario="root";

$conexion=mysql_connect($servidor,$usuario);
mysql_select_db($baseDatos,$conexion);

?>