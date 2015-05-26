

<?php 
if(!isset($_SESSION['admin'])){
	
	echo "<script>window.open('login.php?not_admin=¡No eres administrador!','_self')</script>";
}
else {

?>
<table class="productos" align="center" > 

	
	<tr align="center">
		<td colspan="9"><h2>Ver todos los productos</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
	
		<td>Título</td>
		<td>Imagen</td>
		<td>$</td>
		<td>Exist.</td>
		<td>Editar</td>
		<td>Eliminar</td>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_pro = "select * from products";
	
	$run_pro = mysqli_query($con, $get_pro); 
	
	$i = 0;
	
	while ($row_pro=mysqli_fetch_array($run_pro)){
		
		$pro_id = $row_pro['product_id'];
		$pro_title = $row_pro['product_title'];
		$pro_image = $row_pro['product_image'];
		$pro_price = $row_pro['product_price'];
		$existencias = $row_pro['existencias'];
		$i++;
	
	?>
	<tr class="ver_productos" align="center"  >
		
		<td><?php echo $pro_title;?></td>
		<td><img src="product_images/<?php echo $pro_image;?>" width="110" height="110"/></td>
		<td><?php echo $pro_price;?></td>
		<td><?php echo $existencias;?></td>
		<td><a href="index.php?edit_pro=<?php echo $pro_id; ?>"> <i class="fa fa-pencil-square-o fa-cog" ></i></a></td>
		<td><a href="delete_pro.php?delete_pro=<?php echo $pro_id;?>"><i class="fa fa-trash-o fa-cog"></i></a></td>
	
	</tr>
	<?php } ?>
</table>

<?php } ?>