<?php 
	// Conectando, seleccionando la base de datos+
	$mysqli = mysqli_connect("localhost", "root", "", "prueba_ajax");	
	$nombre = 	$_POST['name'];
	$correo =	$_POST['email'];
	$sql = "INSERT INTO usuarios (nombre, correo) VALUES ('$nombre','$correo')";
	$result = mysqli_query( $mysqli, $sql );

	if( $result ){
		return $result;
	}	else { 
		echo "An error occurred!"; 
	}
 ?>