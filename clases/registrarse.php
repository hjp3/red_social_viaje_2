<?php 

require_once 'consultas.php';

$consultas = new Consultas();

$imagen = $consultas->cargarFoto1($_FILES['imagen']);
            
$usuario = $consultas->crearUsuario($_POST['nombre_completo'],$_POST['usuario'],$_POST['email'],$_POST['password'],$imagen);
            
$mensaje = $consultas->guardarUsuario($usuario);

echo($mensaje);



 ?>