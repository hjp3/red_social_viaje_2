<?php 
  include_once("functions.php");


  if ($_POST) {
  //     $errores = validarDatosLogin($_POST);
  //     if(empty($errores)){
          if(comprobarLogin($_POST['email'], $_POST['password'])){
              session_start();
              $_SESSION['login'] = $_POST['email'];
              header("Location:bienvenida.php");
          }else{
              header("Location:home.php");
          }
          if(isset($_POST['acordate'])){
            set_cookie("email",$_POST['email']);
            set_cookie("password",$_POST['password']);
          }
  //     }
  }


 ?>



 <!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Group Trip</title>
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titan+One" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="container">
      <section class="left">
        <header>
          <div class="header-class">
            <h1><img src="img/avion1-50.jpg"><a href="home.php">Group Trip</a></h1>
          </div>
          <?php require_once('nav.php'); ?>
        </header>
        <main>
          <section class="content">
            <h2>No tendrás un viaje aburrido!!</h2>
            <p class="intro"> Red Social que permite comunicarse con otras personas con mismos intereses y  posibilidades de viajar a distintas ciudades del mundo.</p>
            <p>Completá tus datos y ponete en contacto con gente cerca tuyo que quieren ir a dónde vas vos.</p>
            <h3 class="conectate">Conectate al mundo</h3>
          </section>

          <section class="login registrado">
            <?php 
            if(!isset($_SESSION['login'])){
              include('formulario_registro.php');
            }else{
             ?>  
              <a href='logout.php'>Logout</a>
            <?php 
            }
            ?>
          </section>
        </main>
      </section>
      <aside class="right">
      </aside>
    </div>
  </body>

</html>
