<?php
include_once("functions.php");


if ($_POST) {
    $errores = validarDatosLogin($_POST);
    if(empty($errores)){
        $usuario = crearUsuario($_POST);
        var_dump($usuario);
        guardarUsuario($usuario);
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/styleform.css">
    <link rel="stylesheet" href="">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titan+One" rel="stylesheet">
    <title>Contact us</title>
</head>
<body>

    <div id='fg_membersite'>
        <form id='register' action='' method='post'>
            <div>
                <h1>Registrate</h1>

                <div><span class='error'></span></div>
                <div class='container'>
                    <label for='name' >Nombre completo</label><br/>
                    <input type='text' name='nombre_completo' id='name' value='' maxlength="50" /><br/>
                    <span id='register_name_errorloc' class='error'><?php echo isset($errores["nombre_completo"])? $errores["nombre_completo"]:"";?></span>
                </div>
                <div class='container'>
                    <label for='email' >Email</label><br/>
                    <input type='text' name='email' id='email' value='' maxlength="50" /><br/>
                    <span id='register_email_errorloc' class='error'><?php echo isset($errores["email"])? $errores["email"]:"";?></span>
                </div>
                <div class='container'>
                    <label for='username' >Nombre de usuario*</label><br/>
                    <input type='text' name='usuario' id='username' value='' maxlength="50" /><br/>
                    <span id='register_username_errorloc' class='error'><?php echo isset($errores["usuario"])? $errores["usuario"]:"";?></span>
                </div>
                <div class='container' style='height:80px;'>
                    <label for='password' >Contaseña*</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='password' name='password' id='password' maxlength="50" />
                    <div id='register_password_errorloc' class='error' style='clear:both'><?php echo isset($errores["password"])? $errores["password"]:"";?></div>
                </div>

                <div class='container' style='height:80px;'>
                    <label for='repassword' >Repetir Contaseña*</label><br/>
                    <div class='pwdwidgetdiv' id='thepwddiv' ></div>
                    <input type='repassword' name='repassword' id='repassword' maxlength="50" />
                    <div id='register_repassword_errorloc' class='error' style='clear:both'><?php echo isset($errores["repassword"])? $errores["repassword"]:"";?></div>
                </div>


                <div class='send'>
                    <input type='submit' name='Submit' value='Enviar' />
                </div>

                <a href="home.php" class="btn">VOLVER</a>

            </div>
        </form>

    </body>
</html>
