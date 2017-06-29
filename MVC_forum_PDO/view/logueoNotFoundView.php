	<!DOCTYPE html>
	<html>
	<head>
		<title>Registro fail</title>
	</head>
	<body>


	<h3><font color="red">Usuario no encontrado</font></h3>

	<form action="<?php echo $helper->url('Usuarios','controlClick'); ?>" method="POST">
		<input type="submit" name="volverLogin" value="Volver">
	</form>

	</body>
	</html>