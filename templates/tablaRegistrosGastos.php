<div class="panel panel-danger gastos-table">
    <div class="panel-heading btn-red">
        <h3 class="panel-title color-font">Lista de Gastos</h3>
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
                foreach ( $pdo->query($sql) as $row ) {
                    echo "<tr>";
                    echo '<td><input type="text" id="id-gasto-edit" value="' . $row['id_gasto'] . '"/></td>';
                    echo '<td>' . $con . '</td>';
                    echo '<td>' . $row['id_gasto'] . '</td>';
                    echo '<td>' . $row['nombre_gasto'] . '</td>';
                    echo '<td>' . $row['tipo_gasto_id'] . '</td>';
                    echo '<td>' . $row['cantidad_gasto'] . '</td>';
                    echo '<td>' . $row['fecha_gasto'] . '</td>';
                    
                    echo '<td><button type="button" class="btn btn-success refress cargar" data-toggle="modal" data-target="#myModal">Editar</button>';
                    echo '<td><button class="btn btn-danger delete">Eliminar</button></td>';
                    echo '</tr>';
                    $con++;
                }
                require 'templates/EditarGastoView.php'; 
              
                Database::disconnect();
                ?>
            </tbody>
        </table>
    </div>
</div>