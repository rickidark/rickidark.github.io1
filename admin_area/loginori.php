<?php 
session_start();

?>
<!DOCTYPE>
<html>
	<head>
		<title>Formulario de inicio de administrador</title>
<link rel="stylesheet" href="styles/login_style.css" media="all" /> 

	</head>
<body>
<div class="login">
<h2 style="color:white; text-align:center;"> <?php echo @$_GET['not_admin']; ?></h2>

<h2 style="color:white; text-align:center;"><?php echo @$_GET['logged_out']; ?></h2>
	
	<h1>Por favor, Inicia sesi&oacute;n</h1>
    <form method="post" action="login.php">
    	<input type="text" name="email" placeholder="e-mail" required="required" />
        <input type="password" name="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large" name="login">Iniciar Sesi&oacute;n</button>
    </form>
</div>


</body>
</html>
<?php 

include("includes/db.php"); 
	
	if(isset($_POST['login'])){
	
		$email = mysql_real_escape_string($_POST['email']);
		$pass = mysql_real_escape_string($_POST['password']);
	
	$sel_user = "select * from admins where user_email='$email' AND user_pass='$pass'";
	
	$run_user = mysqli_query($con, $sel_user); 
	
	 $check_user = mysqli_num_rows($run_user); 
	
	if($check_user==1){
	
	$_SESSION['user_email']=$email; 
	
	echo "<script>window.open('index.php?logged_in= ¡Te has logueado satisfactoriamente!','_self')</script>";
	
	}
	else {
	
	echo "<script>alert('El password o el e-mail son incorrectos, por favor, intenta de nuevo.')</script>";
	
	}
	
	
	}
	
	
	
	
?>