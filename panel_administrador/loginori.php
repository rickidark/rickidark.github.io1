<?php 
session_start();

?>
<!DOCTYPE>
<html>
	<head>
		<title>Formulario de inicio de administrador</title>
<link rel="stylesheet" href="styles/login_style.css" media="all" /> 
 <link rel="shortcut icon" href="images/home/favico.ico">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
<body>
<div class="login">
<h2 style="color:white; text-align:center;"> <?php echo @$_GET['not_admin']; ?></h2>

<h2 style="color:white; text-align:center;"><?php echo @$_GET['logged_out']; ?></h2>
	
	<h1>Por favor, Inicia sesión</h1>
    <form method="post" action="loginori.php">
    	<input type="text" name="admin" placeholder="Administrador" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Iniciar Sesión</button>
    </form>
</div>


</body>
</html>
<?php 

include("includes/db.php"); 
	
	if(isset($_POST['login'])){
	
		$admin = mysql_real_escape_string($_POST['admin']);
		$pass = mysql_real_escape_string($_POST['password']);
	
	$sel_user = "select * from admins where admin='$admin' AND user_pass='$pass'";
	
	$run_user = mysqli_query($con, $sel_user); 
	
	 $check_user = mysqli_num_rows($run_user); 
	
	if($check_user==1){
	
	$_SESSION['admin']=$admin; 
	
	echo "<script>window.open('index.php?logged_in= ¡Te has logueado satisfactoriamente!','_self')</script>";
	
	}
	else {
	
	echo "<script>alert('El password o el nombre de usuario administrador son incorrectos, por favor, intenta de nuevo.')</script>";
	
	}
	
	
	}
	
	
	
	
?>