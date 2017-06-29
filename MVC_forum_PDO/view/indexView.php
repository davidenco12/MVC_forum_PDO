	<!DOCTYPE html>
	<html lang="es">
	<head>
	<meta charset="utf-8">

	<link href="./style/styles.css" rel="stylesheet" type="text/css">
		<title>FORO MVC</title>
	</head>
	<body>
	<fieldset>
		<form action="<?php echo $helper->url("Usuarios","loguear"); ?>" method="POST">
			<label>Correo electronico</label>
				<input type="text" name="idUsuario" placeholder="usuario@gmail.com" required="required"><br>
			<label>Pass</label>
				<input type="password" name="pass" required="required"><br>
			
			<input type="submit" name="login" value="Iniciar_sesion">
		</form>

		<form action="<?php echo $helper->url("Usuarios","controlClick"); ?>" method="POST">
			<input type="submit" name="registro" value="¿Aún no eres usuario?">
		</form>
		
				
		
	</fieldset>
	</body>
	</html>