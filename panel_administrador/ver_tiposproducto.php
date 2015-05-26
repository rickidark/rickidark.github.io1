<head><link rel=Stylesheet href="estiloadmin.css" ></head>
<table class="tipo_producto" align="center" bgcolor="pink"> 

	
	<tr align="center">
		<td colspan="6"><h2>Visualiza los tipos de productos aquí</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<td>ID </td>
		<td>Título del tipo de producto</td>
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_tipoproducto = "select * from tiposproducto";
	
	$run_tipoproducto = mysqli_query($con, $get_tipoproducto); 
	
	$i = 0;
	
	while ($row_tipoproducto=mysqli_fetch_array($run_tipoproducto)){
		
		$tipoproducto_id = $row_tipoproducto['tipoproducto_id'];
		$nombre_tipoproducto = $row_tipoproducto['nombre_tipoproducto'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $nombre_tipoproducto;?></td>
		<td><a href="index.php?editar_tiposproducto=<?php echo $tipoproducto_id; ?>"><i class="fa fa-pencil-square-o fa-cog" ></i></a></td>
		<td><a href="eliminar_tipoproducto.php?eliminar_tipoproducto=<?php echo $tipoproducto_id;?>"><i class="fa fa-trash-o fa-cog"></i></a></td>
	
	</tr>
	<?php } ?>




</table>