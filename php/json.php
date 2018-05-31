 <?php 	
	// $nombre_fichero = '/path/to/foo.txt';
	$json_usuarios = file_get_contents("usuarios.json");
	$arrayJson = json_decode($json_usuarios,true);
	var_dump($arrayJson);
	echo("<br>");

	$nombre_completo = $_POST['nombre_completo'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$repassword = $_POST['repassword'];

	$array = [
		    "nombre_completo" => $nombre_completo,
			"email" => $email,
			"usuario" => $usuario,
			"password" => $password,
			"repassword" => $repassword
		];


	var_dump($array);
	echo("<br>");
	
	echo("<br>");
?>
<pre>
 <?php 
 	$arrayJson["usuarios"][] = $array;
	var_dump($arrayJson);
 ?>	
</pre>
<?php 

	$json = json_encode($arrayJson);
	file_put_contents("usuarios.json", $json);

 ?>
	

	//     var_dump($arrayJson);
	// die();

	// if (file_exists($archivo){
		
	// 	$array = [
	// 	    "nombre_completo" => $nombre_completo,
	// 		"email" => $email,
	// 		"usuario" => $usuario,
	// 		"password" => $password,
	// 		"repassword" => $repassword
	// 	];

	// 	$arrayJson = json_decode($json_usuarios,true);
	//     // $arrayJson[] = $array;

	//     var_dump($arrayJson);
	
	// } else {
	//     // creamos el archivo json a partir de un array por referencias
	// 	$usuarios = array("usuarios" => array(
	// 					array(
	// 					"nombre_completo" => $nombre_completo,
	// 					"email" => $email,
	// 					"usuario" => $usuario,
	// 					"password" => $password,
	// 					"repassword" => $repassword
	// 				    )

	// 				));

		
	// 	$json_usuarios = json_encode($usuarios);
	// 	var_dump($json_usuarios);


	// 	$handler = fopen("usuarios.json", "w+");
	// 	fwrite($handler, $json_usuarios);
	// 	fclose($handler);

	// 	$read = json_decode($json_usuarios,true);
	// 	var_dump($read);
	// 	echo("<br>");
	// 	echo "nombre completo: " . $read['usuarios'][0]['nombre_completo'] . "<br>";
	// 	echo "email: " . $read['usuarios'][0]['email'] . "<br>";
	// 	echo "usuario: " . $read['usuarios'][0]['usuario'] . "<br>";
	// 	echo "password: " . $read['usuarios'][0]['password'] . "<br>";
	// 	echo "repassword: " . $read['usuarios'][0]['repassword'] . "<br>";
	// }
	

?>	
			
	
	

 