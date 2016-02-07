<?php

require 'DbConexion.php';

if (!empty($_POST)) {


    $msg = '';
/*  $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $nivel = $_POST['nivel']; */

    $nombre_gasto =   $_POST['nombreGasto'];
    $tipo_gasto =   $_POST['TipoGasto'];
    $valor_gasto  = $_POST['ValorGasto']; 
    $fecha_gasto = date();
    
    $operacion = $_POST['operacion'];

    $pdo = Database::connect();
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    if ($operacion == 'insert') {
        $sql = "INSERT INTO gastos (nombre_gasto, tipo_gasto_id, cantidad_gasto, fecha_gasto )"
                . "VALUES(?,?,?,?,?)";

        $query = $pdo->prepare($sql);
        if ($query->execute( array( $nombre_gasto, $tipo_gasto, $pwd , $fecha_gasto) ) == false ) {
            $msg = 'Error: ' . $query->errorCode();
        } else {
            $msg = 'Nuevo gasto creado';
        }
    } else if ( $operacion == 'delete' ) {
        $id_usuario = $_POST['id_gasto'];
        $sql = "DELETE FROM gastos WHERE id_gasto = ?";
        $query = $pdo->prepare( $sql );
        if ( $query->execute( array( $id_usuario ) ) == false) {
            $msg = 'Error: ' . $query->errorCode();
        } else {
            $msg = 'Usuario eliminado';
        }
    } elseif ( $operacion == 'update' ) {

        $id_usuario = $_POST['id_gasto'];
        $sql = "UPDATE usuarios  SET nombre = ?, direccion = ?, telefono = ?, email = ?, contrasena = ? WHERE id_gasto = ?";
        $query = $pdo->prepare($sql);
        if ($query->execute( array($nombre, $direccion, $telefono, $email, $pwd, intval($id_usuario))) == false) {
            $msg = 'Error: ' . $query->errorCode();
        } else {
            $msg = 'Usuario Actualizado';
        }
    }
    Database::disconnect();
    echo $msg;
}