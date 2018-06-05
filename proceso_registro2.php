<?php 

// $archivo_json = 'usuarios.json';
//         if(file_exists($archivo_json)){
//             echo "el archivo existe";
//         }
//         else{
//             echo "el archivo no existe";
//         }

//$usuario = crearUsuario($_POST);


// function crearUsuario($datos){
//   return [
//     "nombre_completo" => $datos["nombre_completo"],               
//     "email" => $datos["email"],                  
//     "usuario" => $datos ["usuario"],                                   
//     "password" => password_hash($datos["password"],PASSWORD_DEFAULT),   
//   ];

// }

// guardarUsuario($usuario);

// function guardarUsuario($usuario){
//   $user= json_encode($usuario);              // pasamos a json el array usuario 
//   $json_content= file_get_contents("usuarios6.json");  // descargamos el contenido del archivo json
//   $array= json_decode($json_content,true);            // pasamos a array el contenido del archivo json
//   $array["usuarios"][]= $usuario;                // le agregamos un registro al array de usuario
//   $array= json_encode($array);                // lo pasamos a json
//   file_put_contents("usuarios6.json",$array);  // y los ponemos de nuevo en el archivo

// }


// $usuario = $_POST;

// function guardarPrimerUsuario($usuario){
  
//   $usuarios = array("usuarios" => array(
//     array(
//       "nombre_completo" => $usuario['nombre_completo'],
//       "email" => $usuario['email'],
//       "usuario" => $usuario['usuario'],
//       "password" => password_hash($usuario['password'],PASSWORD_DEFAULT)
//     )
//   ));

//   $json_usuarios = json_encode($usuarios);
//   $json = 'usuarios4.json';
//   $handler = fopen($json, "w+");
//   fwrite($handler,$json_usuarios);
//   fclose($handler);
// }

// guardarPrimerUsuario($usuario);

// function validarDatos($datos){
//   $errores = [];
//   if ($datos["nombre_completo"]=="") {
//    $errores["nombre_completo"]="Por favor ingrese su nombre";
//   }
//   if ($datos["email"]=="") {
//     $errores["email"]="Por favor ingrese su email";
//   }elseif (!filter_var($datos["email"],FILTER_VALIDATE_EMAIL)) {
//     $errores["email"]="Por favor ingrese un email valido";
//   }if ($datos["usuario"]=="") {
//    $errores["usuario"]="Por favor ingrese su usuario";
//   }
//   if ($datos["password"]=="") {
//     $errores["password"]= "Por favor ingrese una contraseña";
//   }
//   if ($datos ["repassword"]=="") {
//     $errores["repassword"]= "Por favor reingrese su contraseña";
//   }elseif ($datos["password"]!==$datos["repassword"]) {
//     $errores["repassword"]="Las contraseñas no coinciden";
//   }

//   return $errores;

// }

// $email = $_POST['email'];
// var_dump($email);
// echo "<br>";

// function revisarMails($email)
// {
//     $bandera = "no hay coincidencia";
//     $json = file_get_contents("usuarios.json");
//     $array = json_decode($json,true);
//     foreach ($array as $value) {

//         foreach ($value as $value2) {
//         echo($value2['email']) . "<br>";
//           if($value2['email'] == $email){

//             $bandera = "hay coincidencia";
          
//           }else{

//             $bandera = "no hay coincidencia";
//           }


//         }
       
//     }
//     return $bandera;
// }

// echo revisarMails($email);

echo "<br>";
// $json = file_get_contents("usuarios6.json");
// $array = json_decode($json,true);
// var_dump($array);
echo("<br>");


// ?>




<?php 
    
    // foreach($array as $usuarios)
    // {
    //     echo "emails de los usuairios: ";
    //     foreach($usuarios as $usuario)
    //     {
    //         echo $usuario['email'] . "<br>";
    //     }
    //     echo "<br>";
    // }


    // foreach($array as $usuarios)
    // {
    //     echo "emails de los usuairios: ";
    //     foreach($usuarios as $key => $usuario)
    //     {
    //         echo $usuario->email . "<br>";
    //     }
    //     echo "<br>";
    // }

// $email = "vde@cs.com";
// echo "<br><br>";
// echo mailRepetido($email);

// function mailRepetido($email)
// {
//   $bandera = 0;
//   $json = file_get_contents("usuarios6.json");
//   $array = json_decode($json,true);   
//   foreach($array as $usuarios)
//     {
//         foreach($usuarios as $usuario)
//         {
//             if ($usuario['email'] == $email) {
//                 $bandera = 1;
//             }
            
//         }
//     }
//   return $bandera;
// }
// $email = "vde@csd.com";
// $password = "123";

// echo comprobarLogin($email,$password);

// function comprobarLogin($email, $password){
//     $json = file_get_contents("usuarios6.json");
//     $array = json_decode($json,true);
//     $bandera = 0;
//     foreach ($array as $usuarios) {
//         foreach ($usuarios as $usuario) {
//             if($usuario['email'] == $email && password_verify($password,$usuario['password'])){
//                 $bandera = 1;
//             }
//         }
//     }
//     return $bandera;
// }

// include_once("functions.php");


//       // $errores = validarDatosLogin($_POST);
//       // if(empty($errores)){
//           if(comprobarLogin($_POST['email'], $_POST['password'])){
//               header("Location:bienvenida.php");
//               setcookie("email",$_POST['email'],time()+3600*300);
//           }else{
//               header("Locarition:home.php");
//           }
      
          ?>
 <!DOCTYPE html>
 <html>
 <head>
     <title></title>
 </head>
 <body>
    <!-- <form action="imagenes.php" enctype="multipart/form-data" method="post">
        <input type="file" name="imagen" size="30">
        <input type='submit' name='Submit' value='Enviar' />
    </form> -->
 </body>
 </html>


<?php 
if(isset($_COOKIE['id_user']) && isset($_COOKIE['marca'])){
    if($_COOKIE['id_user']!="" || $_COOKIE['marca']!=""){
        $sql_c = mysql_query("SELECT * FROM users 
                    WHERE id_user='".$_COOKIE["id_user"]."' 
                    AND cookie='".$_COOKIE["marca"]."'
                    AND cookie<>'';");
    }
    if(mysql_num_rows($sql_c)){
        $row_c = mysql_fetch_array($sql_c);
        echo "El usuario ".$row_c['username']." se ha identificado correctamente.";
        $user_cookie = mysql_fetch_array($sql_c);
    }
}



 ?>
    



 