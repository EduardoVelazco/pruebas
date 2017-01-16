<?php
session_start();
include 'serv.php';

if(isset($_SESSION['user'])){
	echo "";
	
}else{
	echo'<script>window.location="index.php";</script>';
}

?>
<!DOCTYPE html>
<html>
	<head>
		
	</head>
	<body>
		logramos entrar a la segunda pagina 
	<a href="logout.php"><button>Salir</button></a>
	</body>
</html>
