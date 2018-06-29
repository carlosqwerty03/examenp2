
<html>   
	<head> 
		<title> MOSTRAR DATOS EN LA BD </title>
	</head>
	<body>  
		
		<?PHP
			//CONFIGURAR CONEXION A BD 
			//PASO1: DECLARAR LAS VARIABLIES DE CONEXION
			$servername = "localhost"; //NOMBRE DEL SERVIDOR  / O PUEDE SER  "127.0.0.1"
			$database = "examen_2"; //NOMBRE DE LA BD
			$username = "root"; //NOMBRE DE USUARIO 
			$password = ""; //CONTRASEÑA 
			//1.1 MENSAJE DE INICIO DE CONEXION 
			print ("comenzando la conexion... </BR>");
			//----------------------
			$conexion = mysqli_connect($servername, $username, $password, $database);

//1.3 bandera que monitorea la conexion
  $banderaconexion = true;
  
  if($conexion) { //si hubo conexion...
	  echo "conexion exitosa <br>";
  } else{
		  echo "conexion fallida <br>";
		  $banderaconexion = true;
	  }
	  // 2 consulta
	  
	  if($banderaconexion == true ){
		  echo "ejecutando consulta <br>";
		  $query = "SELECT * FROM viajero";
		  //2.2 ejecutar la consulta
		  echo  $query."<br>";
		  $resultados = mysqli_query($conexion, $query);
		  //2.3 validar la ejecucion 
		  $banderaconsulta = true;
		  if($resultados){ //si hubo resultados en la consulta
			  echo "insercion ejecutada con exito <br>";
		  }
		  else{
			  echo "insercion fallida <br>";
			  $banderaconexion = false;
		  }
		  if($banderaconsulta){ 
		  $num_filas = mysqli_num_rows($resultados); //2.4  estableciendo el limite del arreglo  
		  //delimitado el numero de filas
			  echo "imprimiendo ".$num_filas." resultados<br>";
		  }
		  else{
			  echo "no se imprimira resultados <br>";
			  $banderaconexion = false;
		  }
		  
	  }else {
		  echo "no se ejecutara consultar por falla de conexion <br>";
	  }
	
			//------------------------
			
			print ("<TABLE BORDER = 1>");
				print ("<TH> id_viajero </TH>");
				print ("<TH>nombre_viajero</TH>");
				print ("<TH> fecha_viajero</TH>");
				print ("<TH> url</TH>");
				
					//3.1implementando ciclo for
				for($i=0; $i<=$row = mysqli_fetch_array($resultados, MYSQLI_ASSOC); $i++){
					
					//3.1 atrapar los indices 
					$id_viajero = $_POST["id_viajero"];
					$nombre_viajero = $_POST["nombre_viajero"];
					$fecha_viaje = $_POST["fecha_viaje"];
					$url_boleto_avion = $_POST["url_boleto_avion"];
				
					//3.3 imprimir resultados
					
					echo "<tr>";
					echo "<td>".$id_viajero."</td>";
					echo "<td>".$nombre_viajero."</td>";
					echo "<td>".$fecha_viaje."</td>";
					echo "<td>".$url_boleto_avion."</td>";
						
						echo"</tr>";
						
						
			}
			
			print ("</TABLE >");
			
			//2.-CONECTAR A LA BD CON EL METODO: mysqli_connect
			//OCUPA 4 PARAMETROS ( 1,. SERVIDOR 2.- USUARIO 3.- PASSWORD 4.-BD )
			
			$conexion = mysqli_connect($servername, $username, $password, $database);
			//3.- BANDERA DE CONEXION QUE SE APAGARA EN CASO DE ERROR
			$banderaconexion = true;
			if($conexion){ //PREGUNTA SI HUBO CONEXION 
				print("conexion exitosa...</BR>");
			}else{
				print("ERROR: conexion fallida </BR>");
				$banderaconexion = false;
				
			}
			
		?>
	</body>
	
</html>