
	<!DOCTYPE html>
	<html>
	<head>
		<title><?php echo "Perfil de ".$_SESSION['usuarioLogueado'] ; ?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="./style/styles.css">
	</head>
	<body>
		<div id="ventanaMensaje">
			<form action="<?php echo $helper->url("Usuarios","controlClick"); ?>" method="POST">
				<h1>Bienvenido <?php echo $_SESSION['usuarioLogueado']; ?></h1><input type = "submit" name = "irAmodificarDatos" value = "Modificar_datos"><input type = "submit" name = "cerrarSesion" value = "Cerrar_sesion">
			
			</form>

			<form action="<?php echo $helper->url("Mensajes","bandejaDeEntrada"); ?>" method="POST">
				<input type = "submit" name = "irAbandejaDeEntrada" value = "Bandeja de entrada">
			</form><br>
	
			<form action="<?php echo $helper->url("Mensajes","crearMensaje"); ?>" method="POST">
			
				<textarea name = "comentario" placeholder = "¿Que estas pensando?"></textarea><br>
				<input type = "submit" name = "comentar" value = "Comentar">
			
			</form><br>
			<form action="<?php echo $helper->url("Mensajes","logueo"); ?>" method="POST">
				<input type = "submit" name = "escribirMensajePrivado" value = "Enviar mensaje privado">
			</form>

			<?php 
				if(isset($_POST['escribirMensajePrivado'])){
			?>
				<form action="<?php echo $helper->url("Mensajes","enviarMensajePrivado"); ?>" method="POST">
					<label>Destinatario</label><input type="text" name="destinatario">

					<!-- <select>
					<?php 
						// foreach($allNicks as $nick) { 
						// 	echo "<option>".$nick."</option>";
						// }
					?>
					</select>
					 -->
					 <br>Mensaje<br><textarea name="mensajePrivado" placeholder="Introduca el texto" required="required"></textarea><br><input type="submit" name="envioMensajePrivado" value="Enviar mensaje">
				</form>
			<?php	
				}
			?>
		</div>
			<table border="1px" id="foro">
			<?php 

				if(empty($allMesagges)){
					echo "<font color='orange'><b>El foro esta vacío,¡Animate a escribir el primero!</b></font>";
				}else{
			 ?>
				<tr><th><b>FORO GENERAL</b></th></tr>
					<?php 
						foreach($allMesagges as $mesagge) { 
			 		?>
	               				
				               		<tr><td><b> 
				               		<?php echo $mesagge->nick; ?> el <?php echo $mesagge->fecha; ?></b><br>
				               		 <?php echo $mesagge->texto; 
				               	?>
								<tr></td>
							
							<?php  
						}
				}
							?>	
        </table>
    </body>