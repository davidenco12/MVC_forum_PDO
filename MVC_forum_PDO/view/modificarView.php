<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Bienvenido <?php echo $_SESSION['usuarioLogueado']; ?></h1>
<form action="<?php echo $helper->url("Usuarios","modificar"); ?>" method="POST">
	<input type="submit" name="cambiarCorreo" value="Cambiar correo">
	<input type="submit" name="cambiarPass" value="Cambiar pass">
	<input type="submit" name="cambiarNick" value="Cambiar nick">
</form><br>
<?php 
	if(isset($_POST['cambiarCorreo'])){
?>
	<form action="<?php echo $helper->url("Usuarios","cambiarCorreo"); ?>" method="POST">
		<label>Correo Nuevo</label><input type="text" name="correoNuevo" placeholder="Introduca el correo nuevo" required="required"><input type="submit" name="envioCorreoNuevo" value="Cambiar correo">
	</form>
<?php	
	}elseif(isset($_POST['cambiarPass'])) {
?>
<form>
		<label>Pass actual</label><input type="text" name="passAntiguo" placeholder="Introduca el pass antiguo" required="required"><br>
		<label>Pass nuevo</label><input type="text" name="passNuevo" placeholder="Introduca el pass nuevo" required="required"><br>
		<input type="submit" name="envioPassNuevo" value="Cambiar pass">
	</form>
<?php
}
 elseif(isset($_POST['cambiarNick'])) {
?>
	<form action="<?php echo $helper->url("Usuarios","actualizarNick"); ?>" method="POST">
		<label>Nick nuevo</label><input type="text" name="nickNuevo" placeholder="Introduca su nuevo nick" required="required"><input type="submit" name="envioNickNuevo" value="Cambiar nick">
	</form>
<?php
}
 
 ?>
 
 
</body>
</html>