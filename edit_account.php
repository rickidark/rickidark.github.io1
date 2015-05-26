		<?php 	
				include("includes/db.php"); 
				
				$user = $_SESSION['customer_email'];
				
				$get_customer = "select * from clientes where customer_email='$user'";
				
				$run_customer = mysqli_query($con, $get_customer); 
				
				$row_customer = mysqli_fetch_array($run_customer); 
				
				$c_id = $row_customer['customer_id'];
				$email = $row_customer['customer_email'];
				$pass = $row_customer['customer_pass'];
				$name = $row_customer['customer_name'];
				$apellidos = $row_customer['apellidos'];
				$imagen = $row_customer['customer_image'];
				$direccion = $row_customer['direccion'];
				$telefono = $row_customer['telefono'];
				
				
				
				
		?>
		




		
			
		<form action="" method="post" enctype="multipart/form-data">
					
					<table align="center" class="editar_cuenta" width="80px">


				
						<tr align="center">
							<td colspan="5"><h2>¡Actualiza tu cuenta!</h2></td>
						</tr>
						
						<tr>
							<td align="right">Nombre</td>
							<td><input type="text" name="c_name" value="<?php echo $name;?>" required/></td>
						</tr>
						 	
						<tr>
							<td align="right">Apellidos:</td>
							<td><input type="text" name="apellidos" value="<?php echo $apellidos;?>"  required/></td>
						</tr>

						<tr>
							<td align="right">E-mail:</td>
							<td><input type="text" name="c_email" value="<?php echo $email;?>" required/></td>
						</tr>
						
						<tr>
							<td align="right">Password:</td>
							<td><input type="password" name="c_pass" value="<?php echo $pass;?>" required/></td>
						</tr>
						
						<tr>
							<td align="right">Imagen de perfil:</td>
							<td><input type="file"  name="c_imagen" accept="image/*" required /><img src="cliente/imagenes_cliente/<?php echo $imagen; ?>" width="50" height="50"/></td>
						</tr>
						
						<tr>
							<td align="right">Dirección:</td>
							<td><input type="text" name="direccion" value="<?php echo $direccion;?>"  required/></td>
						</tr>
						
						<tr>
							<td align="right">Teléfono:</td>
							<td><input type="text" name="telefono" value="<?php echo $telefono;?>"  required/></td>
						</tr>
						
				
						
						
					<tr align="center">
						<td colspan="6"><input type="submit" name="actualizar" value="actualizar" id="upload" /></td>
					</tr>
					
					
					
					</table>
				
				</form>

		
		
	
			<?php 
				if(isset($_POST['actualizar'])){
				
					
					$ip = getIp();
					
					$customer_id = $c_id;
					
					$c_name = $_POST['c_name'];
					$apellidos = $_POST['apellidos'];
					$c_email = $_POST['c_email'];
					$c_pass = $_POST['c_pass'];
					$c_imagen = $_FILES['c_imagen']['name'];
					$c_imagen_tmp = $_FILES['c_imagen']['tmp_name'];
					$direccion = $_POST['direccion'];
					$telefono = $_POST['telefono'];
					
				
					
					move_uploaded_file($_FILES['c_imagen']['tmp_name'],"cliente/imagenes_cliente/".$_FILES['c_imagen']['name']);
					
					 $update_c = "update clientes set customer_name='$c_name', customer_email='$c_email', customer_pass='$c_pass',apellidos='$apellidos', customer_image='$c_imagen' ,direccion='$direccion', telefono='$telefono' where customer_id='$customer_id'";
				
					$run_update = mysqli_query($con, $update_c); 


					
					if($run_update){
					
					echo "<script>alert('Tu cuenta ha sido exitosamente modificada. Por seguridad, inicia sesión nuevamente')</script>";
					unset($_SESSION['customer_email']);	

					echo "<script>window.open('index.php','_self')</script>";
					
					}

					else {




					}
				}





			?>










