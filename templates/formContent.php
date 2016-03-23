
        <div class="row">
          <div class="col-sm-4">
            <div class="CrIngreso">
              <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
            </div>
            <h2 class="text-center">Crea un Nuevo Ingreso</h2>
            <p></p>
            <form id="ingresos" method="post" class="form-registro">
              <div class="row">
                <div class="large-6 columns col-md-12">
                  Nombre de ingreso:
                  <input type="text" class="form-control" name="nombreIngreso" id="nombreIngreso" />
                  <br/> tipo de ingreso:
                  <input type="text"  class="form-control" name="TipoIngreso" id="TipoIngreso" />
                  <br/> Cantidad de ingreso:
                  <input type="text" class="form-control" name="ValorIngreso" id="ValorIngreso" />
                  <input type="text" class="form-control hide"  name="operacion" value='insert' id="operacion"/>
                  <br/>
                  <input type="submit" class="button btn btn-primary btn-block"  name="Enviar" value="Enviar" id="crearIngresos" />
                </div>
              </div>
            </form>
          </div>
            <div class="col-sm-4">
              <div class="CrGasto">
                <img class="img-circle img-responsive img-center"  src="http://placehold.it/300x300" alt="">
              </div>
                <h2 class="text-center">Crea un Nuevo Gasto</h2>
                <p></p>
                  <form id="gastos" method="post" class="form-registro">
                    <div class="row">
                      <div class="large-6 columns col-md-12">
                        Nombre de gasto:
                        <input type="text" class="form-control" name="nombreGasto" id="nombreGasto" />
                        <br/> tipo de gasto:
                        <input type="text" class="form-control" name="TipoGasto" id="TipoGasto" />
                        <br/> Cantidad de gasto:
                        <input type="text" class="form-control" name="ValorGasto" id="ValorGasto" />
                         
                        <input type="text" class="form-control hide" name="operacion" value='insert' id="operacion" />
                        <br/>
                        <input type="submit" class="button btn btn-danger btn-block" name="enviar" value="Enviar" id="crearGasto" />
                      </div>
                    </div>
                  </form>
            </div>
            <div class="col-sm-4">
              <div class="CrAhorro">
                <img class="img-circle img-responsive img-center" src="http://placehold.it/300x300" alt="">
              </div>
                <h2 class="text-center">Crea Un nuevo Ahorro</h2>
                <p></p>
                  <form id="ahorro" method="post" class="form-registro">
                    <div class="row">
                      <div class="large-6 columns col-md-12">
                        Nombre de gasto:
                        <input type="text" class="form-control" name="nombreAhorro" id="nombreAhorro" />
                        <br/> tipo de gasto:
                        <input type="text" class="form-control"  name="TipoAhorro" id="TipoAhorro" />
                        <br/> Cantidad de gasto:
                        <input type="text" class="form-control" name="ValorAhorro" id="ValorAhorro" />
                        <input type="text" class="form-control hide" name="operacion"  value="insert" id="ValorAhorro" />
                        <br/>
                        <input type="submit" class="button btn btn-success btn-block" name="enviar" value="Enviar" id="crearAhorro" />
                      </div>
                    </div>
                  </form>        
            </div>
        </div>
        <!-- /.row -->