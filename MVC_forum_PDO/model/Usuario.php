	<?php 

	class Usuario extends EntidadBase{

		private $database;
		private $idUsuario; //PK (CORREO ELECTRONICO)
		private $pass;
		private $nick; //unique(clave alternativa)
		private $nombre;
		private $apellidos;
		private $fechaAlta;
		private $fechaUltimaConexion;

		public function __construct(){
			$table = "usuarios";
			parent::__construct($table);
		}

		public function getIdUsuario()
		{
			return $this->idUsuario;
		}
		
		public function setIdUsuario($idUsuario)
		{
		    $this->idUsuario = $idUsuario;
		}

		public function getPass()
		{
		    return $this->pass;
		}
		
		public function setPass($pass)
		{
		    $this->pass  = $pass;
		}

		public function getNick()
		{
		    return $this->nick;
		}
		
		public function setNick($nick)
		{
		    $this->nick = $nick;
		}

		public function getNombre()
		{
		    return $this->nombre;
		}
		
		public function setNombre($nombre)
		{
		    $this->nombre = $nombre;
		}

		public function getApellidos()
		{
		    return $this->apellidos;
		}
		
		public function setApellidos($apellidos)
		{
		    $this->apellidos = $apellidos;
		}

		public function getFechaAlta()
		{
		    return $this->fechaAlta;
		}
		
		public function setFechaAlta($fechaAlta)
		{
		    $this->fechaAlta = $fechaAlta;
		}

		public function getFechaUltimaConexion()
		{
		    return $this->fechaUltimaConexion;
		}
		
		public function setFechaUltimaConexion($fechaUltimaConexion)
		{
		    $this->fechaUltimaConexion = $fechaUltimaConexion;
		}


		public function guardarUsuario(){

			$query = "INSERT INTO usuarios (idUsuario,pass,nick,nombre,apellidos,fechaAlta,fechaUltimaConexion)". " VALUES('".$this->idUsuario."',"
							."'".$this->pass."',"
							."'".$this->nick."',"
							."'".$this->nombre."',"
							."'".$this->apellidos."',"
							."'".$this->fechaAlta."',"
							."'".$this->fechaUltimaConexion."'"
							.")";

					$guardar = $this->db()->prepare($query); //metodo db eheredado de EntidadBase,le pasamos la query
					$guardarUser = $guardar->execute();
					return $guardarUser;

		}


		

		public function loguearUsuario($idUsuario)
    	{
    		$consulta = $this->db()->prepare("SELECT idUsuario,pass,nick FROM usuarios WHERE idUsuario = '" . $idUsuario . "'");
    		$consulta->execute();


    		while ($fila = $consulta->fetch()) {
				$usuario[] = $fila[0];
				$usuario[] = $fila[1];
				$usuario[] = $fila[2];
			}

			return $usuario;

    	}

    	public function getNicks()
     	{
     		$consulta = $this->db()->prepare("SELECT nick FROM usuarios");
     		$consulta->execute();


     		while ($fila = $consulta->fetch()) {
			 	$nicks[] = $fila[2];
			 }

			 return $nicks;

     	}

		

  	// 	public function actualizarNick($idUsuario,$nick){
			// $query = "UPDATE usuarios SET  nick = '$nick' WHERE idUsuario = '".$idUsuario."'";
		 // 	$resultado = $this->db()->prepare($query);
		 // 	$actualizacionNick = $resultado->execute();
		 // 	return $actualizacionNick;
		 // }

		
}


	 ?>