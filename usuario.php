<?php 
	/*
	*
	*
	*/
	class Usuario{
		private $id;
		private $nombre;
		private $clave;

		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getUsuario(){
			return $this->usuario;
		}

		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}
		
		public function getNombre(){
			return $this->nombre;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		
		public function getApellidoPaterno(){
			return $this->apellidopaterno;
		}

		public function setApellidoPaterno($apellidopaterno){
			$this->apellidopaterno = $apellidopaterno;
		}

		public function getApellidoMaterno(){
			return $this->apellidomaterno;
		}

		public function setApellidoMaterno($apellidomaterno){
			$this->apellidomaterno = $apellidomaterno;
		}
		
		public function getClave(){
			return $this->clave;
		}

		public function setClave($clave){
			$this->clave = $clave;
		}

		public function getEmail(){
			return $this->email;
		}

		public function setEmail($email){
			$this->email = $email;
		}
		
		public function getResponsable(){
			return $this->responsable;
		}

		public function setResponsable($responsable){
			$this->responsable = $responsable;
		}
		
		public function getTipo(){
			return $this->tipo;
		}				
		public function setTipo($tipo){
			$this->tipo = $tipo;
		}
	}
?>