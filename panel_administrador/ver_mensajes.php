

<?php 
if(!isset($_SESSION['admin'])){
	
	echo "<script>window.open('login.php?not_admin=¡No eres administrador!','_self')</script>";
}
else {

?>
<table  class="ver_mensajes" border="0" align="center" >

   <tr bgcolor="#47B537" class="titulos"> 
                  <td > <div align="center"><font color="#FFFFFF">Nombre</font></div id="gmap"></td>
                  <td > <div align="center"><font color="#FFFFFF"><i class="fa fa-envelope-o"></i></font></div id="gmap"></td>
                  <td > <div align="center"><font color="#FFFFFF">Asunto</font></div id="gmap"></td>
                  <td > <div align="center"><font color="#FFFFFF">Mensaje</font></div id="gmap"></td>
                  <td > <div align="center"><font color="#FFFFFF">Responder</font></div id="gmap"></td>
                  <td > <div align="center"><font color="#FFFFFF">Eliminar</font></div id="gmap"></td>
                </tr>
	
						<?php 
  include("includes/db.php");
  
  $get_mensajes = "select * from contacto";
  
  $run_mensajes = mysqli_query($con, $get_mensajes); 
  
  $i = 0;
  
  while ($row_mensaje=mysqli_fetch_array($run_mensajes)){
    
    $id = $row_mensaje['id'];
    $nombre = $row_mensaje['nombre'];
    $email = $row_mensaje['email'];
    $asunto = $row_mensaje['asunto'];
    $mensaje = $row_mensaje['mensaje'];
    $i++;
  
  ?>

                
             
                		     
                <tr> 
                  <td  align="center" class="mensaje">&nbsp;&nbsp;&nbsp;<?php echo $nombre; ?> 
                  
                   
                  <td align="center" class="mensaje"><?php echo $email; ?> 
                    <div align="center"></div></td>
                  <td align="center" class="mensaje"> <div align="center"><?php echo $asunto; ?></div></td>
                  <td align="center" class="mensaje" ><?php echo $mensaje; ?></td>
                  <td class="mensaje"> <div align="center" class="info2"><a href="mailto:<?php echo $email ; ?>"><i class="fa fa-reply fa-cog"></i></a></div></td>
                  <td class="mensaje"> <div align="center"><a class="info3" Onclick="validar('eliminarContacto.php?id=<?php echo $id; ?>')" href="#"><i class="fa fa-pencil-square-o fa-cog" ></i></a></div></td>
                </tr>
                <?php  } ?>

 </table>
 <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br>  <br> <br> 
              <script>
								function validar(url)
								{
								var eliminar=confirm("¿Realmente deseas eliminar el mensaje de contacto?");
								if (eliminar==true)
								{
								window.location=url;
								}
								else
								{
								 return false;
								}
								}
								</script>

<?php } ?>

