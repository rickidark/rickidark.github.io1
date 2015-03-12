
<?php
include('conexion.php');

class Persona
{
	public $nombre;
	public $apellido;
	public $usuario;
	public $contrasena;


	function __construct()
	{
		$this->nombre;
		$this->apellido;
		$this->usuario;
		$this->contrasena;
	}
	 
function ingresarSis($usuario,$contrasena){




	            $usuario=$_REQUEST['usuario'];
               $contrasena=$_REQUEST['contrasena'];


				
			    $sql = mysql_query("SELECT * FROM `administrador` WHERE `usuario`='".$usuario."' AND `contrasena`='". $contrasena."'");

			    $cli= mysql_query("SELECT * FROM `cliente` WHERE `usuario`='".$usuario."' AND `contrasena`='". $contrasena."'");
				if ($row=mysql_fetch_array($sql)) {
					header("Location:indexme.php");

					
				} else if ($row=mysql_fetch_array($cli)) {
					header("Location:indexAdministrador.php");
					
				}else
				{
					echo "<meta charset='utf-8'>Verifique su usuario y contaseña";

				}
				

			}
			





}
?>


					
			