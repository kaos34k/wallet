<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">Lista de Gastos</h3>
    </div>
    <div class="panel-body">
        <table class="table table-striped">

            <thead>
            <th>#</th>
            <th>ID gasto</th>
            <th>Nombre Gasto</th>
            <th>Tipo de Gasto</th>
            <th>Cantidad de Gasto</th>
            <th>Fecha</th>
            <th colspan="2">Modificar</th>            
            </thead>
            <tbody>
                <?php
                require 'class/DbConexion.php';

                $pdo = Database::connect();
                $sql = 'SELECT * FROM gastos';

                $con = 1;
                foreach ($pdo->query($sql) as $row) {

                    echo "<tr>";
                    echo '<td>' . $con . '</td>';
                    echo '<td>' . $row['id_gasto'] . '</td>';
                    echo '<td>' . $row['nombre_gasto'] . '</td>';
                    echo '<td>' . $row['tipo_gasto_id'] . '</td>';
                    echo '<td>' . $row['cantidad_gasto'] . '</td>';
                    echo '<td>' . $row['fecha_gasto'] . '</td>';
                    echo '<input type="text" class="form-control hide" name="id_gasto" id="id_gasto" value="' . $row['id_gasto'] . '"/>' . $row['fecha_gasto'] . '</td>';
                    echo '<td><button class="btn btn-primary update" value="' . $row['id_gasto'] . '">Editar</button></td>';
                    echo '<td><button class="btn btn-primary delete" value="' . $row['id_gasto'] . '">Eliminar</button></td>';
                    echo '</tr>';
                    $con++;
                }
                Database::disconnect();
                ?>
            </tbody>
        </table>

    </div>
</div>