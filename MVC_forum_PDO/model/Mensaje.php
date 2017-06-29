		<?php 
		
		class Mensaje extends EntidadBase{

				private $database;
				private $idMensaje; //A.I
				private $nick;
				private $fecha; 
				private $texto;
				private $destinatario;
				private $publico;

				public function __construct(){
					$table = "mensajes";
					parent::__construct($table);
				}

				
			public function getTexto()
			{
			    return $this->texto;
			}
			
			public function setTexto($texto)
			{
			    $this->texto = $texto;
			    return $this;
			}

			public function getNick()
			{
			    return $this->nick;
			}
			
			public function setNick($nick)
			{
			    $this->nick = $nick;
			    return $this;
			}

			public function getIdMensaje()
			{
			    return $this->idMensaje;
			}
			
			public function setIdMensaje($idMensaje)
			{
			    $this->idMensaje = $idMensaje;
			    return $this;
			}
			public function getFecha()
			{
			    return $this->fecha;
			}
			
			public function setFecha($fecha)
			{
			    $this->fecha = $fecha;
			    return $this;
			}

			public function getDestinatario()
			{
			    return $this->destinatario;
			}
			
			public function setDestinatario($destinatario)
			{
			    $this->destinatario = $destinatario;
			    return $this;
			}

			public function getPublico()
			{
			    return $this->publico;
			}
			
			public function setPublico($publico)
			{
			    $this->publico = $publico;
			    return $this;
			}
				
				



			public function guardarMensaje(){
				$query = "INSERT INTO mensajes (idMensaje,nick,fecha,texto,destinatario,publico)". " VALUES('".$this->idMensaje."',"
									."'".$this->nick."',"
									."'".$this->fecha."',"
									."'".$this->texto."',"
									."'".$this->destinatario."',"
									."'".$this->publico."'"
									.")";

				$guardar = $this->db()->prepare($query); //metodo db eheredado de EntidadBase,le pasamos la query
				$guardarMpublic = $guardar->execute();
				
				return $guardarMpublic;

			}

			public function guardarMensajePrivado(){
				$query = "INSERT INTO mensajes (idMensaje,nick,fecha,texto,destinatario,publico)". " VALUES('".$this->idMensaje."',"
									."'".$this->nick."',"
									."'".$this->fecha."',"
									."'".$this->texto."',"
									."'".$this->destinatario."',"
									."'".$this->publico."'"
									.")";

				$guardar = $this->db()->prepare($query); //metodo db eheredado de EntidadBase,le pasamos la query
				$guardarMprivate = $guardar->execute();
				
				return $guardarMprivate;

			}

		

			
				

		}
		 ?>