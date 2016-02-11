<?php
$operacion = '';
require 'class/DbConexion.php';

$nombre = '';
$direccion = '';
$telefono = '';
$email = '';
$pwd = '';

if ( !empty( $_POST ) ) {



    $operacion = $_POST['operacion'];
    if ($operacion == 'update') {

        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $id_usuario = $_POST['id_usuario'];

        $sql = "SELECT * FROM usuarios WHERE id_usuario = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id_usuario));
        $data = $q->fetch(PDO::FETCH_ASSOC);

        $nombre = $data['nombre'];
        $direccion = $data['direccion'];
        $telefono = $data['telefono'];
        $email = $data['email'];
        $pwd = $data['contrasena'];
    }
    $msg = '';
}
?>
<link href="CSS/usuarios_css.css" rel="stylesheet" type="text/css"/>
<script src="JS/usuario_js.js" type="text/javascript"></script>

<div class="div_usu">
    <form id="formulario" class="form-horizontal" role="form" >
        <div id="alerta" class="alert alert-danger" role="alert"></div>
        <?php if ($operacion == 'update') {
            ?>
            <label for="id_usuario" >ID:</label>
            <input id="id_usuario" name="id_usuario" type="text" class="form-control" disabled value="<?php echo $id_usuario; ?>"/>
            <?php
        }
        ?>
        <label for="nombre" >Nombre:</label>
        <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre" required value="<?php echo $nombre; ?>"/>
        <label for="direccion" >Direccion:</label>
        <input id="direccion" name="direccion" type="text" class="form-control" placeholder="Direccion"/>
        <label for="telefono" >Telefono:</label>
        <input id="telefono" name="telefono" type="text" class="form-control" placeholder="Telefono" required value="<?php echo $telefono; ?>"/>
        <label for="email" >Email:</label>
        <input id="email" name="email" type="text" class="form-control" placeholder="Email" required value="<?php echo $email; ?>"/>
        <label for="pwd" >Contraseña:</label>
        <input id="pwd" name="pwd" type="password" class="form-control" placeholder="Contraseña" required value="<?php echo $pwd; ?>"/>
        <label for="ped2" >Repita la contraseña:</label>
        <input id="pwd2" type="password" class="form-control" placeholder="Repita la contraseña" required value="<?php echo $pwd; ?>"/>

        <br/>
        <input type="submit" value="Guardar" class="btn btn-primary"/>
    </form>
</div>