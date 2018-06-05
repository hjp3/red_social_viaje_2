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
  }elseif(mailRepetido($datos["email"])){
    $errores["email"] = "el email ya está en la base de datos, ingresá otro";
  }

  if ($datos["usuario"]=="") {
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


function validarDatosLogin($datos){
  $errores = [];
  if ($datos["email"]=="") {
    $errores["email"]="Por favor ingrese su email";
  }elseif (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
    $errores["email"]="Por favor ingrese un email valido";
  }

  if ($datos["password"]=="") {
    $errores["password"]= "Por favor ingrese una contraseña";
  }
  

return $errores;

}

// creamos un array con los datos del usuario
// le pasamos el array post
function crearUsuario($datos){
  return [
    "nombre_completo" => $datos["nombre_completo"],               
    "email" => $datos["email"],                  
    "usuario" => $datos ["usuario"],                                   
    "password" => password_hash($datos["password"],PASSWORD_DEFAULT),   
  ];
}


function retornaUsuario($email){
  $json = file_get_contents("usuarios6.json");
  $array = json_decode($json,true);   
  foreach($array as $usuarios)
    {
        foreach($usuarios as $usuario)
        {
            if ($usuario['email'] == $email) {
                return $usuario['nombre_completo'];
                
            }
            
        }
    }
  
}


// function guardarUsuario($usuario){
//   //$user= json_encode($usuario);              // pasamos a json el array usuario 
//   $json= file_get_contents("usuarios2.json");  // descargamos el contenido del archivo json
//   $array= json_decode($json,true);            // pasamos a array el contenido del archivo json
//   $array["usuarios"][]= $usuario;                // le agregamos un registro al array de usuario
//   $array= json_encode($array);                // lo pasamos a json
//   file_put_contents("usuarios2.json",$array,FILE_APPEND | LOCK_EX);  // y los ponemos de nuevo en el archivo
// }

function guardarUsuario($usuario){
  $user= json_encode($usuario);              // pasamos a json el array usuario 
  $json_content= file_get_contents("usuarios6.json");  // descargamos el contenido del archivo json
  $array= json_decode($json_content,true);            // pasamos a array el contenido del archivo json
  $array["usuarios"][]= $usuario;                // le agregamos un registro al array de usuario
  $array= json_encode($array);                // lo pasamos a json
  file_put_contents("usuarios6.json",$array);  // y los ponemos de nuevo en el archivo

}




// verifficamos al archivo json
function test(){
  $json= file_get_contents("usuarios.json");  // ponemos el contenido del archivo json en una var
  $array= json_decode($json,true);            // la pasamos a un array 
  var_dump($array);                           // la vemos en vardump
}




function mailRepetido($email)
{
  $bandera = 0;
  $json = file_get_contents("usuarios6.json");
  $array = json_decode($json,true);   
  foreach($array as $usuarios)
    {
        foreach($usuarios as $usuario)
        {
            if ($usuario['email'] == $email) {
                $bandera = 1;
            }
            
        }
    }
  return $bandera;
}


function comprobarLogin($email, $password){
    $json = file_get_contents("usuarios6.json");
    $array = json_decode($json,true);
    $bandera = 0;
    foreach ($array as $usuarios) {
        foreach ($usuarios as $usuario) {
            if($usuario['email'] == $email && password_verify($password,$usuario['password'])){
                $bandera = 1;
            }
        }
    }
    return $bandera;
}





function asignarId()
{
   if(isset($_COOKIE['id_usuario']))
  { 
    // Caduca en un año 
    setcookie('id_usuario', $_COOKIE['id_usuario'] + 1, time() + 365 * 24 * 60 * 60); 
     
  } 
  else 
  { 
    // Caduca en un año 
    setcookie('id_usuario', 1, time() + 365 * 24 * 60 * 60); 
    
  }

  return $_COOKIE['id_usuario'];  
}



 ?>


  