<?php 
// if(isset($_COOKIE['email'])){
// 	echo "Hola usuario del email " . $_COOKIE['email'];
// }

if(isset($_SESSION['login'])){
	echo "Bienvenido: " . $_COOKIE['nombre_completo'];
}
else{
	header('Location:home.php');
}

?>

<a href="logout.php">Logout</a>
<a href="bienvenida.php">Volver</a>

