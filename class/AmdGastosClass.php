<?php 
//require 'class/DbConexion.php';


class Gastos {
	//atributos 
	public $nombre_gasto;
	public $tipo_gasto;
	public $valor_gasto;
	public $fecha_gasto;
	public $id_gasto;
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

		echo json_encode( $result );
	}
	
	public function consultarGasto( $id_gasto ) {
		$this->id_gasto =  $id_gasto;
		$sql = "SELECT * FROM gastos WHERE id = '$this->id_gasto' ";
		$result = mysqli_query( Gastos::conetarbd(), $sql ) or die (mysqli_error()); 
		var_dump($result);
		$contar = mysqli_num_rows( $result );
		if( $result === "0" ){
			echo "No se han encontrado resultados para '<b>".$this->id_gasto."</b>'.";
		} else {
			while( $row = $result->fetch_assoc() ){
				echo '<div class="form-group">
          <label for="nombre-gasto">Nombre de gasto:</label>
          <input type="text" class="form-control" id="" value="'.$row["nombre_gasto"].'">
        </div>
        <div class="form-group">
          <label for="tipo-gasto">Tipo de gasto</label>
          <input type="text" class="form-control" id="tipo-gasto" value="'.$row["nombre_gasto"].'">
        </div>
        <div class="form-group">
          <label for="cantidad-gasto">Cantidad de gasto</label>
          <input type="text" class="form-control" id="cantidad-gasto">
        </div>
        <button type="submit" class="btn btn-success update">Guardar</button>';    
			}
		}

	}

	public function editarGasto(){

	}

	public function eliminarGasto(){

	}

	public function paginacion(){
		
	}	

}

?>
