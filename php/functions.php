<?php

// recibe los datos del formulario
// y los valida uno por uno
function validarDatos($datos){
  $errores = [];
  if ($datos["nombre_completo"]=="") {
   $errores["nombre_completo"]="Por favor ingrese su nombre";
  }
  if ($datos["email"]=="") {
    $errores["email"]="Por favor ingrese su email";
  }elseif (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
    $errores["email"]="Por favor ingrese un email valido";
  }if ($datos["usuario"]=="") {
   $errores["usuario"]="Por favor ingrese su usuario";
  }
  if ($datos["password"]=="") {
    $errores["password"]= "Por favor ingrese una contraseña";
  }
  if ($datos ["repassword"]=="") {
    $errores["repassword"]= "Por favor reingrese su contraseña";
  }elseif ($datos["password"]!==$datos["repassword"]) {
    $errores["repassword"]="Las contraseñas no coinciden";
  }

  return $errores;

}

// creamos un array con los datos del usuario
// le pasamos el array post
function crearUsuario($datos){
  return [
    "nombre" => $datos["nombre_completo"],               
    "email" => $datos["email"],                  
    "usuario" => $datos ["usuario"],                                   
    "password" => password_hash($datos["password"],PASSWORD_DEFAULT),   
  ];

}


function guardarUsuario($usuario){
  $user= json_encode($usuario);              // pasamos a json el array usuario 
  $json= file_get_contents("usuarios.json");  // descargamos el contenido del archivo json
  $array= json_decode($json,true);            // pasamos a array el contenido del archivo json
  $array["usuarios"][]= $user;                // le agregamos un registro al array de usuario
  $array= json_encode($array);                // lo pasamos a json
  file_put_contents("usuarios.json",$array);  // y los ponemos de nuevo en el archivo
}


function guardarUsuario1($usuario){
  
  $json= file_get_contents("usuarios.json");  // descargamos el contenido del archivo json
  
  if($json){
    $user= json_encode($usuario); 
    $array= json_decode($json,true);            // pasamos a array el contenido del archivo json
    $array["usuarios"][]= $user;                // le agregamos un registro al array de usuario
    $array= json_encode($array);                // lo pasamos a json
    file_put_contents("usuarios.json",$array);  // y los ponemos de nuevo en el archivo
  
  }else{

     $usuarios = array("usuarios" => array(
     array(
     "nombre_completo" => $usuario['nombre_completo'],
     "email" => $usuario['email'],
     "usuario" => $usuario['usuario'],
     "password" => $password['password'],
     "repassword" => $repassword['repassword']
      )));

    
   $json_usuarios = json_encode($usuarios);
   $json = 'usuarios.json';
   file_put_contents($json,$json_usuarios);
  }
  
}

// verifficamos al archivo json
function test(){
  $json= file_get_contents("usuarios.json");  // ponemos el contenido del archivo json en una var
  $array= json_decode($json,true);            // la pasamos a un array 
  var_dump($array);                           // la vemos en vardump
}



 ?>


	