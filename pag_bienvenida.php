<?php

 
  $nombre_viajero = $_POST["nombre_viajero"];
  $fecha_viaje = $_POST["fecha_viaje"];
 // $url_boleto_avion = $_POST["url_boleto_avion"];
 

			$servername = "localhost"; //NOMBRE DEL SERVIDOR  / O PUEDE SER  "127.0.0.1"
			$database = "examen_2"; //NOMBRE DE LA BD
			$username = "root"; //NOMBRE DE USUARIO 
			$password = ""; //CONTRASEÑA 

//1.2 funcion para conectarnos:

  
  
  
  //---------------------------------------------------------------------------
  
$conexion = mysqli_connect($servername,$username,$password,$database);

 if (ISSET($_POST["submit"])){
	 echo "se presiono un boton submit con metodo post </br>";
	 
	  
	 $archivoOrigen = $_FILES["fileToUpload"]["tmp_name"];
	 $archivoDestino =$_FILES["fileToUpload"]["name"];
	 
	 echo "el archivo a enviar es: ".$archivoDestino."</br>";
	 
	$imageFiletype = pathinfo ($archivoDestino, PATHINFO_EXTENSION);
	$check = getimagesize ($archivoOrigen ); 
	ECHO "Extension del archivo: ".$imageFiletype."</BR>";
	
	
	if ($check!==false){
	echo "el archivo es una imagen </br>";
		move_uploaded_file($archivoOrigen,$archivoDestino);
		  $query = "INSERT INTO viajero (id_viajero, nombre_viajero, fecha_viaje, url_boleto_avion) VALUES (NULL, '".$nombre_viajero."','".$fecha_viaje."', '".$archivoDestino."')"; 
		echo "query a ejecutar: ".$query."</BR>";
		
		if($query_a_ejecutar = mysqli_query($conexion,$query)){
			echo "query ejecutado correctamente </br>";
			HEADER ("Refresh:3, url = http://localhost:81/examenp2/mostrar_resultados.php");
		}else{
			echo "query no ejecutado :v <br>";
		}
	}else{
		echo "el archivo no es una imagen";
	}
 }
?>