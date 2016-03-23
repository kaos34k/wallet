<?php //require('includes/directorios.php'); ?>
<?php 
    //$directorios = new Componentes();
    //$directorios->head();
 ?>
<body>
  <?php// require('templates/nav.php'); ?>
    <!-- Image Background Page Header -->
    <!-- Note: The background image is set within the business-casual.css file. -->
    <header class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline"></h1>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Content -->
    <div class="container">
        <hr>
        <div class="row">
            <div class="col-sm-8">
                <h2></h2>
                <p></p>
                <p></p>
                <p>
                  <canvas id="canvas" height="300%" width="700%"></canvas>
                </p>
            </div>
            <div class="col-sm-4">
                <h2>Contacto</h2>
                <address>
                    <strong>Cartera Personal</strong>
                    <br>
                    <br>Medellin-Antioquia
                    <br>
                </address>
                <address>
                    <abbr title="Phone">Telefono:</abbr> 313 627 5193
                    <br>
                    <abbr title="Email">Correo:</abbr> <a href="mailto:#">kaos34k@gmail.com</a>
                </address>
            </div>
        </div>
        <!-- /.row -->

        <hr>
        <!-- fomularios -->
        <?php //require('templates/formContent.php') ?>  
        <!-- template listas-->
        <?php //require('templates/tablaRegistrosGastos.php') ?>  

        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Cartera personal 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>
    </div>
    <!-- /.container -->
</body>
<?php  $directorios->javaScript(); ?>