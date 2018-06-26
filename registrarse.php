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
			<form action="controller_login.php" method="post">
				<p>
					<label>Usuario:</label>
					<input type="text" name="usuario">
				</p>
				<p>
					<label>Password</label>
					<input type="password" name="pas">
				</p>
                <p>
					<label>Nombre:</label>
					<input type="text" name="nombre">
				</p>
                <p>
					<label>Apellido Paterno:</label>
					<input type="text" name="apellidopaterno">
				</p>
                <p>
					<label>Apellido Materno:</label>
					<input type="text" name="apellidomaterno">
				</p>
                <p>
					<label>Email:</label>
					<input type="text" name="email">
				</p>
                <p>
					<label>Responsable</label>
					<input type="text" name="responsable">
				</p>
                <p>
                <div>
					
					<input type="checkbox" name="tip" value="Administrador"><label>Administrador</label>
					<input type="checkbox" name="tip" value="Usuario"><label>Usuario</label><br/>
				</p>
                </div>
				<p>
					<input type="hidden" name="registrarse" value="registrarse">
			        <input type="submit" class="botonlg" value="registrarse" ></button>
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