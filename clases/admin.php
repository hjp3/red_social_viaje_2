<?php 
    require_once 'datosMysql.php';
    require_once 'datosJson.php';

    $datosM = new DatosMysql();
    $datosJ = new DatosJson();
    
    if(isset($_FILES['json'])){
    	$json = $_FILES['json'];
    	$json2 = $datosM->cargarJson($json2);
    	$datosM->migrarABaseDeDatos($json2);
	    
    }

    if(isset($_POST['json'])){
    	$nombre = $_POST['json'];
    	$datosJ->pasarAjson($nombre);

    } 
 	
    $modo = $_POST['info'];
    $archivo = "tipo.txt";
 	file_put_contents($archivo,$modo);

 ?>



