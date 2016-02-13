<?php 
	// Conectando, seleccionando la base de datos+
	$mysqli = mysqli_connect("localhost", "root", "", "prueba_ajax");	
	
	require ('../class/AmdGastosClass.php');

	$nombre = 	$_POST['name'];
	$correo =	$_POST['email'];

	$nombre_gasto = $_POST['nombreGasto'];
	$tipo_gasto = $_POST['TipoGasto'];
	$valor_gasto = $_POST['ValorGasto'];
	$id_gasto = $_GET['id'];

	//Crear nuevos gastos en bases de datos
	$gastos = new Gastos();
	$gastos->crearGasto( $nombre_gasto, $tipo_gasto, $valor_gasto );
	$gastos->editarGasto( $id_gasto );


	$sql = "INSERT INTO usuarios (nombre, correo) VALUES ('$nombre','$correo')";
	$result = mysqli_query( $mysqli, $sql );

	if( $result ){
		return $result;
	}	else { 
		echo "An error occurred!"; 
	}


 ?>