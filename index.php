<?php require('controller/directoriosCss.php'); ?>


	<!-- creandonuevas acciones  -->
  <div class="row">
    <div class="columns">    
      <input type="submit" class="button" name="usuario" value="Crear usuario" id="CrUsuario" />
      <input type="submit" class="button" name="ingreso" value="Crear Ingreso" id="CrIngreso" />
      <input type="submit" class="button" name="gasto" value="Crear Gasto" id="CrGasto" />
      <input type="submit" class="button" name="ahorro" value="Crear Ahorro" id="CrAhorro" />
    </div>
  </div>
  <?php require('layouts/walletTemplate.php'); ?>

	<div class="template"></div>
<?php require('controller/directoriosJs.php'); ?>
