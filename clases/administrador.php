<?php 
//require_once 'consultas.php';
	echo "Hola mundo";
	$json = $_FILES['json'];
	var_dump($json);
	exit();
	$consultas = new Consultas();
	$json2 = $consultas->cargarfoto1($json);
	var_dump($json2);
	exit()
	//$consultas->migrarABaseDeDatos($json2);       
    $json_content= file_get_contents($json2);  // descargamos el contenido del archivo json
    
     $array= json_decode($json_content,true);
     var_dump($array);
     exit();

     foreach($array as $usuarios)
    {
       foreach($usuarios as $usuario)
       {
       		$nombre_completo = $usuario['nombre_completo'];
	        $email = $usuario['email'];
	        $usu = $usuario['usuario'];
	        $password = $usuario['password'];
	        $avatar = $usuario['avatar'];

	        $usu2 = $this->crearUsuario($nombre_completo,$usuario,$email,$password,$avatar);
	        $this->guardarUsuario($usu2);
	    }
    }   



 ?>

