<div>
  <form id="usaurio" method="post" class="form-registro">
    <div class="row">
      <div class="large-6 columns col-md-3">
        Nombre:</br>
        <input type="text" name="name" id="name" /> Email:
        </br>
        <input type="text" name="email" id="email" /> Contraseña:
        </br>
        <input type="password" name="password" id="password" />
      </div>
    </div>
    <div class="row">
      <div class="large-3 columns">
        <input type="submit" class="button" name="Enviar" value="Enviar" id="crear" />
      </div>
    </div>
  </form>

  <form id="ingresos" method="post" class="form-registro">
    <div class="row">
      <div class="large-6 columns col-md-3">
        Nombre de ingreso:
        <input type="text" name="nombreIngreso" id="nombreIngreso" />
        <br/> tipo de ingreso:
        <input type="text" name="TipoIngreso" id="TipoIngreso" />
        <br/> Cantidad de ingreso:
        <input type="password" name="ValorIngreso" id="ValorIngreso" />
        <br/>
      </div>
    </div>

    <div class="row">
      <div class="columns">
        <input type="submit" class="button" name="Enviar" value="Enviar" id="crearIngresos" />
      </div>
    </div>
  </form>


  <form id="gastos" method="post" class="form-registro">
    <div class="row">
      <div class="large-6 columns">
        Nombre de gasto:
        <input type="text" name="nombreGasto" id="nombreGasto" />
        <br/> tipo de gasto:
        <input type="text" name="TipoGasto" id="TipoGasto" />
        <br/> Cantidad de gasto:
        <input type="password" name="ValorGasto" id="ValorGasto" />
        <br/>
      </div>
    </div>
    <div class="row">
      <div class="columns">
        <input type="submit" class="button" name="enviar" value="Enviar" id="crearGasto" />
      </div>
    </div>
  </form>


  <form id="ahorro" method="post" class="form-registro">
    <div class="row">
      <div class="large-6 columns">
        Nombre de gasto:
        <input type="text" name="nombreAhorro" id="nombreAhorro" />
        <br/> tipo de gasto:
        <input type="text" name="TipoAhorro" id="TipoAhorro" />
        <br/> Cantidad de gasto:
        <input type="password" name="ValorAhorro" id="ValorAhorro" />
        <br/>
      </div>
    </div>
    <div class="row">
      <div class="columns">
        <input type="submit" class="button" name="enviar" value="Enviar" id="crearAhorro" />
      </div>
    </div>
  </form>
</div>

Resultado: <span class="resultado"></span>