<?php 
	require_once 'consultas.php';

	$consulta = new Consultas();

	$array = $consulta->otrosUsuarios('gonza@ew');


	



 ?>


 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="css/styleform.css">
    <link rel="stylesheet" href="">
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titan+One" rel="stylesheet">
    <title>Otros usuarios</title>
</head>
<body>

    <div id='fg_membersite'>
    
        <div>
            <h1>Otros Viajeros</h1>

        </div>

        <br>
        <br>
        <div>
            <?php  
            foreach ($array as $usuario) {
            ?>	
              <h3><?php echo $usuario['nombre_completo']; ?> </h3>
              <br>
              <h3><?php echo $usuario['email'] ?></h3>
              <br>
              <img src="<?php echo $usuario['avatar'] ?>">
              <br><br><br>
            <?php    
            }        
             ?>              
                    
        </div>
        <br>
        <br>
        <div>
            <a href="bienvenida.php" class="btn">Volver a tu página</a><br>
            <br>
            <a href="logout.php">Logout</a>
            <br>
            <a href="index.php">Volver a la página principal</a>
        </div>
    </div>
</body>
</html>