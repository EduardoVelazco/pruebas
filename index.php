<?php
session_start();
include 'serv.php';
if(isset($_SESSION['user'])){
	echo '<script>window.location="panel.php"; </script>';
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>logeo de pagina</title>
	      
	
	</head>
	<body>
		
		<h1 class="h1" style="color:white">Login</h1>
		<form method="post" action="validar.php">
			
			<input type="text" class="from-control" name="user" autocomplete="off" required><br><br>
			<input type="password" class="from-control" name="pw" autocomplete="off" required><br><br
			 
		</form>
		<input type="submit" class="btn btn-success" name="login" value="Entrar">
	
	
	
	
	</body>
</html>