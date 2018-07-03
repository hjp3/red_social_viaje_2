<?php 

include_once 'validaciones.php';


$validaciones = new Validaciones();

foreach ($_POST as $key => $value) {
	switch ($key) {
		case 'nombre_completo':
			echo $validaciones->validarNombre($_POST['nombre_completo']);
			echo("<br>");
			break;
		
		case 'usuario':
			echo $validaciones->validarUsuario($_POST['usuario']);
			echo("<br>");
			break;

		case 'email':
			echo $validaciones->validarEmail($_POST['email']);
			echo("<br>");
			break;

		case 'password':
			echo $validaciones->validarPassword($_POST['password']);
			echo("<br>");
			break;

		case 'repassword':
			echo $validaciones->validarRepassword($_POST['repassword']);
			echo("<brRep");
			break;					
	}
}

// if($validaciones->validarPassword($_POST['password'])&& $validaciones->validarRepassword($_POST['password'])){
// 	echo $validaciones->passwordCoincidente($_POST['password'],$_POST['repassword']);
// }



 ?>