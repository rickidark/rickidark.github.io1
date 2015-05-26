<head><link rel=Stylesheet href="estiloadmin.css"></head>
<table class="cliente"  > 

	
	<tr align="center">
		<td colspan="6"><h2>Ve todos los clientes aquí</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<td>S.N</td>
		<td>Nombre</td>
		<td>Email</td>
		<td>Imagen</td>
		<td>Eliminar</td>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_c = "select * from clientes";
	
	$run_c = mysqli_query($con, $get_c); 
	
	$i = 0;
	
	while ($row_c=mysqli_fetch_array($run_c)){
		
		$c_id = $row_c['customer_id'];
		$c_name = $row_c['customer_name'];
		$c_email = $row_c['customer_email'];
		$c_image = $row_c['customer_image'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $c_name;?></td>
		<td><?php echo $c_email;?></td>
		<td><img src="../cliente/imagenes_cliente/<?php echo $c_image;?>" class="imagen_cliente"/></td>
		<td><a href="delete_c.php?delete_c=<?php echo $c_id;?>"><i class="fa fa-trash-o fa-cog"></i></a></td>
	
	</tr>
	<?php } ?>




</table>