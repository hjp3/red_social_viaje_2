<?php 
require_once 'conexion.php';
require_once 'usuario.php';
require_once 'datos.php';

class DatosMysql extends Datos
{
	
	public function guardarUsuario(Usuario $usuario)
	{
		//var_dump($usuario);
		// var_dump($usuario);
		// exit();
		$nombre = $usuario->getNombre_completo();
		$email = $usuario->getEmail();
		$password = $usuario->getPassword();
		$usu = $usuario->getUsuario();
		$avatar = $usuario->getAvatar();

		// creo un objeto de la clase conexion
		$modelo = new Conexion();
		// guardo la conexión en una variable
		$conexion = $modelo->getConexion();
		// ahora creamos la consulta
		$sql = "INSERT INTO usuarios (nombre_completo,usuario,email,password,avatar) VALUES (:nombre_completo,:usuario,:email,:password,:avatar)";
		
		$statement = $conexion->prepare($sql); 
		// $statement->bindParam(':nombre_completo',$usuario->getNombre_completo());
		// $statement->bindParam(':usuario',$usuario->getUsuario());
		// $statement->bindParam(':email',$usuario->getEmail());
		// $statement->bindParam(':password',$usuario->getPassword());
		// $statement->bindParam(':avatar',$usuario->getAvatar());
		
		$statement->bindParam(':nombre_completo',$nombre);
		$statement->bindParam(':usuario',$usu);
		$statement->bindParam(':email',$email);
		$statement->bindParam(':password',$password);
		$statement->bindParam(':avatar',$avatar);

		if (!$statement) {
			//return "error al insertar datos";
		}else{
			$statement->execute();
			//return "registro creado correctamente";
		}
	}

	public function crearUsuario($nombre_completo,$usuario,$email,$password,$avatar)
	{
		$hasheado = password_hash($password, PASSWORD_DEFAULT);
		$usuario2 = new Usuario();
		$usuario2->setNombre_completo($nombre_completo);
		$usuario2->setUsuario($usuario);
		$usuario2->setEmail($email);
		$usuario2->setPassword($hasheado);
		$usuario2->setAvatar($avatar);
		return $usuario2;
	}


    public function guardarDatosNuevos($nombre_completo,$usuario,$email,$password,$avatar){
    	// var_dump($usuario);
    	// exit();
    	$modelo = new Conexion();
		// guardo la conexión en una variable
		$conexion = $modelo->getConexion();
	    
	    $nombre = $usuario->getNombre_completo();
		$email = $usuario->getEmail();
		$password = $usuario->getPassword();
		$usu = $usuario->getUsuario();
		$avatar = $usuario->getAvatar();

		// var_dump($avatar);
		// exit();

	    $sql = "UPDATE usuarios SET nombre_completo=:nombre_completo, usuario=:usuario, email=:email, password=:password, avatar=:avatar WHERE email=:email"; 
	    
	    $consulta = $conexion->prepare($sql);
		
		$consulta->bindParam(':nombre_completo', $nombre);
		$consulta->bindParam(':email', $email);
		$consulta->bindParam(':password',$password);
		$consulta->bindParam(':usuario',$usu);
		$consulta->bindParam(':avatar',$avatar);
		$consulta->execute();

	}	


	public function retornaUsuario($email){
	   
       $modelo = new Conexion();
       // guardo la conexión en una variable
	   $conexion = $modelo->getConexion();

	   $sql = 'SELECT nombre_completo, email, usuario, password, avatar FROM usuarios WHERE email = :email';
       $consulta = $conexion->prepare($sql);
       $consulta->bindParam(':email', $email);
       $consulta->execute();

       $registro = $consulta->fetch();
       if($registro){
          return new Usuario($registro['nombre_completo'], $registro['usuario'], $registro['email'],$registro['password'],$registro['avatar']);
       }else{
          return false;
       }
    } 


    public function otrosUsuarios($email){
	   
       $modelo = new Conexion();
       // guardo la conexión en una variable
	   $conexion = $modelo->getConexion();

	   $sql = 'SELECT nombre_completo, email, usuario, password, avatar FROM usuarios WHERE email != :email';
       $consulta = $conexion->prepare($sql);
       $consulta->bindParam(':email', $email);
       $consulta->execute();

       $registros = $consulta->fetchAll(PDO::FETCH_ASSOC);
       
       
       if($registros){
          return $registros;

       }else{
          return false;
       }
    }  


    public function migrarABaseDeDatos($json)
	{
		$json_content= file_get_contents($json);  // descargamos el contenido del archivo json
        $array= json_decode($json_content,true);

        foreach($array as $usuarios)
	    {
	       foreach($usuarios as $usuario)
	       {
	       		$nombre_completo = $usuario['nombre_completo'];
		        $email = $usuario['email'];
		        $usu = $usuario['usuario'];
		        $password = $usuario['password'];
		        $avatar = $usuario['avatar'];

		        $usu2 = self::crearUsuario($nombre_completo,$usu,$email,$password,$avatar);
		        self::guardarUsuario($usu2);
		    }
	    }  
	}


}



 ?>
