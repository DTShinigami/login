<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Acceso Login</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header>
	<div>
		<h1>BIENVENIDO A ALTA DE USUARIOS</h1>
	</div>
</header>
		<div>
			<h1>Registrarse</h1>
		</div>
		<div class="main">
			<form class="w3-container" action="controller_login.php" method="post">
				<p>
					<label>Nombre de usuario o correo electrónico</label>
					<input type="text" name="usuario">
				</p>
				<p>
					<label>Password</label>
					<input type="password" name="pas">
				</p>
                <p>
                <div>
					
					<input type="checkbox" name="tip" value="Administrador"><label>Administrador</label>
					<input type="checkbox" name="tip" value="Usuario"><label>Usuario</label><br/>
				</p>
                </div>
				<p>
					<input type="hidden" name="registrarse" value="registrarse">
			        <input type="submit" class="botonlg" value="Registrarse" ></button>
				</p>
                
				<p><a href="index.php">Ahora no</a></p>
			</form>
		</div>
<footer>
	<div >
		<h4>@Mariano Torres</h4>
	</div>
</footer>

</body>
</html>