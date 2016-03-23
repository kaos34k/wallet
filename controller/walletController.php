<?php 
	// Conectando, seleccionando la base de datos+
	$mysqli = mysqli_connect("localhost", "root", "", "prueba_ajax");	
	
	require ('../class/AmdGastosClass.php');
		/*$nombre = 	empty( $_POST['name'] ) ? null : $nombre;
		$correo =	empty( $_POST['email'] ) ? null : $correo;

		$nombre_gasto = is_null( $_POST['nombreGasto'] ? false : $nombre_gasto);
		$tipo_gasto = is_null( $_POST['TipoGasto'] ) ? false : $tipo_gasto;
		$valor_gasto = is_null( $_POST['ValorGasto'] ) ? false : $valor_gasto;
*/
	$id_gasto =  $_POST['id_gasto'];
	var_dump($id_gasto);
	//Crear nuevos gastos en bases de datos
	$gastos = new Gastos();
	//$gastos->crearGasto( $nombre_gasto, $tipo_gasto, $valor_gasto );
	//Consultar gastos
	$gastos->consultarGasto( $id_gasto );
	// fin de gstos

/*
	$sql = "INSERT INTO usuarios (nombre, correo) VALUES ('$nombre','$correo')";
	$result = mysqli_query( $mysqli, $sql );

	if( $result ){
		return $result;
	}	else { 
		echo "An error occurred!"; 
	}
*/

 ?>