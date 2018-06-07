<?php 
require_once 'functions.php';
session_start();

if(!isset($_SESSION['login'])){
	header('Location:home.php');
	
}
$usuario = retornaUsuario($_SESSION['login']);
echo "Bienvenido: " . $usuario['nombre_completo'];

	
?>
<img src="<?php echo $usuario['avatar']; ?>" alt="imagen del usuario" width="254">
<a href="editar_datos.php">Cambia tus datos</a>
<a href="logout.php">Logout</a>
<a href="home.php">Volver a la página principal</a>

 