<?php 
// require_once 'consultas.php';
// require_once 'usuario.php';

	// $consultas = new Consultas();

	// $foto = $consultas->cargarFoto1($_FILES['avatar']);

	// $usuario3 = new Usuario($_POST['nombre_completo'], $_POST['usuario'], $_POST['email'], $_POST['password'], $foto);

	
	// $consultas->guardarDatosNuevos($usuario3);

	// var_dump($usuario3);
require_once 'datosMysql.php';
require_once 'datosJson.php';
session_start();
var_dump($_SESSION['login']);
exit();

if(!isset($_SESSION['login'])){     // un usuario si sesión es enviado a la página de inicio
	header('Location:home.php');
	
}


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


 ?>