	<?php 

	// metodos de consulta(a nivel de app)

	class UsuariosModel extends ModeloBase{

		private $table;

		public function __construct(){
			$this->table = "usuarios";
			parent::__construct($this->table);
		}

		// metodos de consulta
		
		public function getUsuario(){
			$query = "SELECT * FROM usuarios WHERE idUsuario = 'daviceta@gmail.com'";
			$usuario = $this->ejecutarSql($query);
			return $usuario;
		}


	}

	 ?>