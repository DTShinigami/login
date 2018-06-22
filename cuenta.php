<?php 
	session_start();
	if (!isset($_SESSION['usuario'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tu Cuenta</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="main">
		<h1>BIENVENIDO A TU CUENTA </h1>
	</div>
	<p></p>
	<form  action="controller_login.php" method="post">
		<input type="hidden" name="salir" value="salir">
		<button class="w3-btn w3-green">Salir</button>
	</form>
</body>
</html>