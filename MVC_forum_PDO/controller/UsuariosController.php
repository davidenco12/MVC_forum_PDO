	<?php 


	class UsuariosController extends ControladorBase{

		

		public function __construct(){
			parent::__construct();
		}

		// Control de todas las posibilidades de cliqueo del usuario
		public function controlClick(){
			if($_POST['registro']){
				$this->redirect("Usuarios","registro");

			}

			if($_POST['volverIndex']){
				$this->redirect("Usuarios","index");

			}

			if($_POST['volverRegistro']){
				$this->redirect("Usuarios","registro");

			}

			if($_POST['volverLogin']){
				$this->redirect("Usuarios","index");

			}
			if($_POST['cerrarSesion']){
				session_destroy();
			 	$this->redirect("Usuarios","index");
			}

			if($_POST['irAmodificarDatos']){
				$this->redirect("Usuarios","modificar");

			}

		}

		public function index(){
			// cargamos la vista index y le pasamos valores
			$this->view("index", array());
		}

	// **********FUNCIONES DE REGISTRO**********
		public function registro(){
			$usuario = new Usuario(); //creamos instancia

			$allUsers = $usuario->getAll(); //conseguimos todos los usuarios

			// la vista con el nombre index,y le pasamos un array cone l primer indice allusers,que va a ser la variable etc...

			// cargamos la vista registro y le pasamos valores
			$this->view("registro", array(
				"allUsers" => $allUsers,
				"prueba" => "esto es una prueba MVC"

				));
		}

		public function registroOk(){

			// la vista con el nombre index,y le pasamos un array con el primer indice allusers,que va a ser la variable etc...

			// cargamos la vista registro y le pasamos valores
			$this->view("registroOk", array(
				));
		}

		



		public function crear(){

				$usuario = new Usuario(); //creo instancia de Usuario

				// guardo lo que llega del formulario de registro
				$idUsuario = $_POST['idUsuario'];
				$pass = $_POST['pass'];
				$nick = $_POST['nick'];
				$nombre = $_POST['nombre'];
				$apellidos = $_POST['apellidos'];
				$fechaAlta = date("d.m.y"); 

				
				// llamo a los setter de la instancia y les paso las variables del formulario
				$usuario->setIdUsuario($idUsuario);
				$usuario->setPass($pass);
				$usuario->setNick($nick);
				$usuario->setNombre($nombre);
				$usuario->setApellidos($apellidos);
				$usuario->setFechaAlta($fechaAlta);
				// $usuario->setFechaUltimaConexion($ultimaConexion):;

				$guardar = $usuario->guardarUsuario();

				// redireccionamos al controlador usuarios y metodo registroOk
			 
				$this->redirect("Usuarios","registroOk");
			
		}
	// **********************************************************************************

	// **********FUNCIONES DE LOGIN**********
		

		public function loguear(){

			$usuario = new Usuario();

				$idUsuario = $_POST['idUsuario']; //es el correo electronico
				$pass = $_POST['pass'];

				$usuario->setIdUsuario($idUsuario); //seteo el idUsuario
				$usuarioQueSolicitaLoguearse = $usuario->getIdUsuario(); //lo recojo
				$usuarioEnBaseDeDatos = $usuario->loguearUsuario($usuarioQueSolicitaLoguearse); //consulto a la base de datos el idUsuario introducido por el usuario

					if($usuarioQueSolicitaLoguearse == $usuarioEnBaseDeDatos[0] && $pass == $usuarioEnBaseDeDatos[1]){

						session_start();
						$_SESSION['idUsuario'] = $usuarioEnBaseDeDatos[0]; //guardo el nick
						$_SESSION['usuarioLogueado'] = $usuarioEnBaseDeDatos[2]; //guardo el nick
						$_SESSION['passUsuarioLogueado'] = $usuarioEnBaseDeDatos[1]; //guardo el pass
							
						
						// redireccciono al controlador y el metodo logueo
						$this->redirect("Usuarios","logueo");
					}else{
								
							//redireccciono al controlador y el metodo logueoNotFound
							$this->redirect("Usuarios","logueoNotFound");
					}
		}

		

		public function logueo(){
			session_start();
			$_SESSION['usuarioLogueado'];
			$_SESSION['passUsuarioLogueado'];
			$mensaje = new Mensaje(); //creamos instancia

			$allMesagges = $mensaje->getMesagges(); //conseguimos todos los usuarios


			// cargamos la vista registro y le pasamos valores
			$this->view("logueo", array(
				"allMesagges" => $allMesagges));
		}
		public function logueoFail(){
			$this->view("logueoFail", array());
		}
		public function logueoNotFound(){
			$this->view("logueoNotFound", array());
		}

		// **********FUNCIONES DE MODIFICAR**********

		// redireccion a la vista modificar
		public function modificar(){
			session_start();
			$_SESSION['usuarioLogueado'];
			$_SESSION['passUsuarioLogueado'];
			// cargamos la vista index y le pasamos valores
			$this->view("modificar", array());
		}

		// public function cambiarCorreo(){
		// 	session_start();
		// 	$_SESSION['usuarioLogueado'];
		// 	$_SESSION['passUsuarioLogueado'];

		// 	$usuario = new Usuario();

		// 		$idUsuario = $_POST['correoNuevo']; //correo que nos llega
		// 		$nick = $_SESSION['usuarioLogueado']; //cojo el nick para el where de la consulta

		// 		$correoNuevo = $usuario->actualizarCorreo($idUsuario, $nick);
		// 	// cargamos la vista index y le pasamos valores
		// 	$this->redirect("Usuarios","correoOk");
		// }

		// public function cambiarNick(){
		// 	session_start();
		// 	$_SESSION['usuarioLogueado'];
		// 	$_SESSION['passUsuarioLogueado'];

		// 	$usuario = new Usuario();

		// 		$idUsuario = $_SESSION['idUsuario']; //correo que nos llega
		// 		$nickNuevo = $_SESSION['nickNuevo']; //cojo el nick para el where de la consulta

		// 		$passNuevo = $usuario->actualizarNick($idUsuario, $nickNuevo);
		// 	// cargamos la vista index y le pasamos valores
		// 	$this->redirect("Usuarios","nickOk");
		// }

		public function correoOk(){

			// la vista con el nombre index,y le pasamos un array con el primer indice allusers,que va a ser la variable etc...

			// cargamos la vista registro y le pasamos valores
			$this->view("correoOk", array(
				));
		}

		public function nickOk(){

			// la vista con el nombre index,y le pasamos un array con el primer indice allusers,que va a ser la variable etc...

			// cargamos la vista registro y le pasamos valores
			$this->view("nickOk", array(
				));
		}
	

	}


	 ?>