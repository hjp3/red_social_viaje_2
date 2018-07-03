<?php 
require_once 'consultas.php';

// if ($_POST) {
//     $json = $_FILES['json'];    
//     $consultas = new Consultas();
//     $consultas->migrarABaseDeDatos($json);       
   
// }





?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="css/styleform.css">
    <link rel="stylesheet" href="">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titan+One" rel="stylesheet">
	<title>Document</title>
</head>
<body>
	<form id='register' method='post' enctype="multipart/form-data" action="admin.php">
                            
        <div class='container' style='height:80px;'>
            <p >Migrar Datos</p><br/>
            <label for='imagen' >Ingreso el archivo json a insertar en la BD</label><br/>
            <div class='pwdwidgetdiv' id='thepwddiv' ></div>
            <input type='file' name='json' id='json' size="20" />
            <br>
            <div class='send'>
               <input type='submit' value='Ejecutar' />
            </div>
            
        </div>

                

        </form>
</body>
</html>



