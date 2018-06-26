<?php 
	require_once('conexion.php');
	require_once('usuario.php');
	
	class CrudUsuario{

		public function __construct(){}

		//inserta los datos del usuario
		public function insertar($usuario){
			$db=DB::conectar();
			$insert=$db->prepare('INSERT INTO USUARIOS VALUES(NULL, :usuario, :nombre, :apellidopaterno, :apellidomaterno, :clave, :email, :responsable, :tipo)');
			$insert->bindValue('usuario',$usuario->getUsuario());
			$insert->bindValue('nombre',$usuario->getNombre());
			$insert->bindValue('apellidopaterno',$usuario->getApellidoPaterno());
			$insert->bindValue('apellidomaterno',$usuario->getApellidoMaterno());
						//encripta la clave
			$pass=password_hash($usuario->getClave(),PASSWORD_DEFAULT);
			$insert->bindValue('clave',$pass);
			$insert->bindValue('email',$usuario->getEmail());
			$insert->bindValue('responsable',$usuario->getResponsable());
			$insert->bindValue('tipo',$usuario->getTipo());
			$insert->execute();
		}

		//obtiene el usuario para el login
		public function obtenerUsuario($usuario, $clave){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM USUARIOS WHERE usuario=:usuario');//AND clave=:clave
			$select->bindValue('usuario',$usuario);
			$select->execute();
			$registro=$select->fetch();
			$usuario=new Usuario();
			//verifica si la clave es conrrecta
			if (password_verify($clave, $registro['clave'])) {				
				//si es correcta, asigna los valores que trae desde la base de datos
				$usuario->setId($registro['Id']);
				$usuario->setUsuario($registro['usuario']);
				$usuario->setClave($registro['clave']);
			}			
			return $usuario;
		}

		//busca el nombre del usuario si existe
		public function buscarUsuario($usuario){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM USUARIOS WHERE usuario=:usuario');
			$select->bindValue('usuario',$usuario);
			$select->execute();
			$registro=$select->fetch();
			if($registro['Id']!=NULL){
				$usado=False;
			}else{
				$usado=True;
			}	
			return $usado;
		}
	}
?>