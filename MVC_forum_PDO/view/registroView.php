	<!DOCTYPE html>
	<html>
	<head>
		<title>REGISTRO</title>
		<meta charset="utf-8">
	</head>
	<body>

	<fieldset>
		<legend><h3>Registro de usuario</h3></legend>
		
			<form action="<?php echo $helper->url('Usuarios','crear'); ?>" method="POST">
				<label>Correo Electronico</label><input type="text" name="idUsuario"><br>
				<label>Pass</label><input type="password" name="pass"><br>
				<label>Nick</label><input type="text" name="nick"><br>
				<label>Nombre</label><input type="text" name="nombre"><br>
				<label>Apellidos</label><input type="text" name="apellidos"><br>
				<input type="submit" name="registrar" value="Registrarse">
				
			</form>
			<form action="<?php echo $helper->url('Usuarios','controlClick'); ?>" method="POST">
				<input type="submit" name="volverIndex" value="Volver">
			</form>

	</fieldset>

	</body>
	</html>