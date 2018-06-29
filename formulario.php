
<HTML>
	<HEAD>
	<TITLE> EXAMEN SEGUNDO PARCIAL</TITLE>
		
			
	</HEAD>
<BODY>
<form ACTION = 'pag_bienvenida.php' METHOD = 'POST'
			ENCTYPE = 'multipart/form-data'>
			
		<label> nombre del viajero:  </label>
		<input TYPE = "TEXT" NAME = "nombre_viajero" />
		<br>
		<label> fecha del viaje: </label>
		<input TYPE = "TEXT" NAME = "fecha viaje" />
		<br>
			<INPUT TYPE = 'file' NAME = 'fileToUpload' id = 'fileToUpload' />
			<INPUT TYPE = 'submit' VALUE = 'Enviar foto' NAME = 'submit' />
		</form>


</BODY>
</HTML>
