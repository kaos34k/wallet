<?php 
//require 'class/DbConexion.php';


class Gastos {
	//atributos 
	public $nombre_gasto;
	public $tipo_gasto;
	public $valor_gasto;
	public $fecha_gasto;
	public $mysqli;	
	
	//metodos
	public function conetarbd() {
		return $mysqli = mysqli_connect("localhost", "root", "", "prueba_ajax");
	}

	public function crearGasto( $nombre_gasto, $tipo_gasto, $valor_gasto ) {
		$this->nombre_gasto = $nombre_gasto;
		$this->tipo_gasto = $tipo_gasto;
		$this->valor_gasto = $valor_gasto;

		$sql = "INSERT INTO gastos ( nombre_gasto, tipo_gasto_id, cantidad_gasto ) 
				VALUES ( '$this->nombre_gasto', '$this->tipo_gasto', '$this->valor_gasto' )";
		$result = mysqli_query( Gastos::conetarbd(), $sql ) or die (mysqli_error());

		echo json_encode($result);
	}
	
	public function consultarGasto( $id_gasto ){

	}

	public function editarGasto(){
		//terminar el update 
		$operacion = '';
		//require 'class/DbConexion.php';

		$nombre = '';
		$direccion = '';
		$telefono = '';
		$email = '';
		$pwd = '';

		if ( !empty( $_POST ) ) {

		    $operacion = $_POST['operacion'];
		    if ($operacion == 'update') {
			UPDATE table_name
			SET column1=value, column2=value2,...
			WHERE some_column=some_value 
		    }
		    $msg = '';
		}*/

	}

	public function eliminarGasto(){

	}	

}

 ?>
