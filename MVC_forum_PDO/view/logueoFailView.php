	<!DOCTYPE html>
	<html>
	<head>
		<title>Logueo fail</title>
	</head>
	<body>


	<h3><font color="red">Los campos no pueden estar vacios</font></h3>

	<form action="<?php echo $helper->url('Usuarios','controlClick'); ?>" method="POST">
		<input type="submit" name="volverLogin" value="Volver">
	</form>

	</body>
	</html>