<?php 
session_start();

if(isset($_SESSION['login'])){
	echo "Bienvenido: " . retornaUsuario($_SESSION['login']);
}
else{
	header('Location:home.php');
}

?>
<img src="<?php //ruta de la imagen ?>" alt="imagen del usuario" width="254">

<a href="editar_datos.php">Cambia tus datos</a>
<a href="logout.php">Logout</a>


 