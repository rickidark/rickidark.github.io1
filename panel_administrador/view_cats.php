
<table class="ver_categorias"  > 

	
	<tr align="center">
		<td colspan="6"><h2>Visualiza todas las categorías disponibles aquí</h2></td>
	</tr>
	
	<tr align="center"  bgcolor="skyblue">
		<td>Orden</td>
		<td>Título</td>
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_cat = "select * from categorias";
	
	$run_cat = mysqli_query($con, $get_cat); 
	
	$i = 0;
	
	while ($row_cat=mysqli_fetch_array($run_cat)){
		
		$cat_id = $row_cat['cat_id'];
		$cat_title = $row_cat['cat_title'];
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $i;?></td>
		<td><?php echo $cat_title;?></td>
		<td><a href="index.php?edit_cat=<?php echo $cat_id; ?>"><i class="fa fa-pencil-square-o fa-cog" ></i></a></td>
		<td><a href="delete_cat.php?delete_cat=<?php echo $cat_id;?>"><i class="fa fa-trash-o fa-cog"></i></a></td>
	
	</tr>
	<?php } ?>




</table>