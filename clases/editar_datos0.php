<?php 
require_once 'consultas.php';


            $consultas = new Consultas();
            $usuario3 = $consultas->retornaUsuario("hola@email");
            
   

            var_dump($usuario3);


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
	<!-- <form id='register' method='post' enctype="multipart/form-data" action="editar_datos2.php">
                            
                <div><span class='error'></span></div>
                <div class='container'>
                    <h1>Podés editar tus datos <?php //echo $usuario3->getNombre_completo(); ?></h1><br>
                    <label for='name' >Nombre completo</label><br/>
                    <input type='text' name='nombre_completo' id='name' value='<?php //echo $usuario3->getNombre_completo();?>' maxlength="50" /><br/>
                    
                </div>
                <div class='container'>
                    <label for='email' >Email</label><br/>
                    <input type='text' name='email' id='email' value='<?php //echo $usuario3->getEmail();?>' maxlength="50" readonly /><br/>
                    
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*</label><br/>
                    <input type='text' name='usuario' id='username' value='<?php //echo $usuario3->getUsuario(); ?>' maxlength="50" /><br/>
                    
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Password</label><br/>
                    <input type='text' name='password' id='password' maxlength="50" value='<?php //echo $usuario->getPassword(); ?>'/>
                    <br>
                </div>
                
                
                <div class='container' style='height:80px;'>
                    <p >Editar Imagen</p><br/>
                    <label for='imagen' >Subir Nueva Imagen</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='file' name='imagen' id='imagen' size="20" />
                    <br>
                    
                    
                    

                </div>
                <div class='send'>
                       <input type='submit' value='Enviar' />
                    </div>

                

        </form>
 -->
        <h1>Podés editar tus datos <?php echo $usuario3->getNombre_completo(); ?></h1><br>

        <form action="editar_datos2.php" method='post' enctype="multipart/form-data" action="editar_datos2.php">
          <fieldset>
            <legend>Nombre completo:</legend>
            First name:<br>
            <input type="text" name="nombre_completo" value='<?php echo $usuario3->getNombre_completo();?>'><br>
            Email:<br>
            <input type="text" name="email" value="<?php echo $usuario3->getEmail();?>" readonly><br>
            Usuario:<br>
            <input type="text" name="usuario" value="<?php echo $usuario3->getUsuario();?>">
            <br>
            Password:<br>
            <input type="text" name="password" value="<?php echo $usuario3->getPassword();?>">
            <br>
            Select a file: <input type="file" name="avatar">
            <br>
            <input type="submit" name="enviar">
          </fieldset>
        </form>
</body>
</html>



