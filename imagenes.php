<?php 
        $nombre_imagen = $_FILES['imagen']['name'];
        $tipo_imagen = $_FILES['imagen']['type'];
        $size_imagen = $_FILES['imagen']['size'];

        if($size_imagen <= 2000000 && $tipo_imagen == "image/jpeg" || $tipo_imagen == "image/jpg" || $tipo_imagen == "image/gif" || $tipo_imagen == "image/jpeg" ){
        	
        		// guardamos la ruta de la carpeta destino de la imagen
		        $carpeta_destino = $_SERVER['DOCUMENT_ROOT'] . "/digitalhouse/RedSocialViaje2/img";
		        // copiamos la imagen desde la carpeta temporal del servidor a la carpeta elegida
		        move_uploaded_file($_FILES['imagen']['tmp_name'],$carpeta_destino . $nombre_imagen);
        	
        }
         
        	
       
        
        


 ?>
