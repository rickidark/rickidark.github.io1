

<?php 
if(!isset($_SESSION['admin'])){
	
	echo "<script>window.open('login.php?not_admin=¡No eres administrador!','_self')</script>";
}
else {

?>
<table class="productos" align="center" > 

	
	<tr align="center">
		<td colspan="9"><h2>Ver todas las promociones</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<td>S.N</td>
		<td>Título</td>
		<td>Imagen</td>
		
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_promo = "select * from promo";
	
	$run_promo = mysqli_query($con, $get_promo); 
	
	$i = 0;
	
	while ($row_promo=mysqli_fetch_array($run_promo)){
		
		$promo_id = $row_promo['product_id'];
		$promo_title = $row_promo['product_title'];
		$promo_desc = $row_promo['product_desc'];
		$promo_imagen = $row_promo['product_image'];
		$i++;
	
	?>
	<tr class="ver_productos" align="center"  >
		<td><?php echo $i;?></td>
		<td><?php echo $promo_title;?></td>
		<td><img src="promos/<?php echo $promo_imagen;?>" width="60" height="60"/></td>
		<td><a href="index.php?edit_promo=<?php echo $promo_id; ?>"><i class="fa fa-pencil-square-o fa-cog" ></i></a></td>
		<td><a href="delete_promo.php?delete_promo=<?php echo $promo_id;?>"><i class="fa fa-trash-o fa-cog"></i></a></td>
	
	</tr>
	<?php } ?>
</table>
<br><br><br><br>
<?php } ?>