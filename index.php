<?php 
	session_start();
	unset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Acceso Login Prueba</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="error">
      <p><span>Datos de ingreso no válidos, inténtelo de nuevo  por fav</span></p>
    </div>
    <div class="main">
	  <h2>Login</h2>
	<form action="controller_login.php" method="post">
			<input type="text" name="usuario" placeholder="Usuario" required>
			<input type="password" name="pas" placeholder="Contraseña" required>
			<input type="hidden" name="entrar" value="entrar">
			<input type="submit" class="botonlg" value="Iniciar Sesion" ></button>
		<p>Si aún no tienes cuenta ve al siguiente link <a href="registrarse.php">Registrarse</a></p>
	</form>
	</div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <footer>
	<div>
		<h4>@Mariano Torres</h4>
	</div>
</footer>
</body>
</html>