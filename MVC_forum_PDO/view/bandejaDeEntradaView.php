<!DOCTYPE html>
<html>
<head>
	<title><?php echo "Perfil de ".$_SESSION['usuarioLogueado'] ; ?></title>
</head>
<body>
	
					<?php 
					if (!is_array($allMesagges)) {
						echo $allMesagges; //bandeja de entrada vacia
					}else{
						?>
						<table border="1px" id="foro">
						<tr><th><b>BANDEJA DE ENTRADA DE <?php echo $_SESSION['usuarioLogueado']?></b></th></tr>
					<?php 
						foreach($allMesagges as $mesagge) { 
			 		?>
	               			
				             <tr><td><b> 
				               		Enviado por <?php echo $mesagge->nick; ?> el <?php echo $mesagge->fecha; ?></b><br>
				               		 <?php echo $mesagge->texto;?>
			                </tr></td>
			            <?php 
			        	}
			        }
					?>
        </table>
        <form action="<?php echo $helper->url("Mensajes","logueo"); ?>" method="POST">
				<input type = "submit" name = "irAperfil" value = "Volver al perfil">
</body>
</html>