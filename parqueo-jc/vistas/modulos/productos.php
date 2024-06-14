<?php

if ($_SESSION["perfil"] == "Vendedor") {

  echo '<script>

    window.location = "inicio";

  </script>';

  return;
}

?>
<div class="content-wrapper">

  <section class="content-header" style="background-color:black;color:white">

    <h1 style="font-weight: 500;font-family: 'Anton';"> 

      Administrar Ingresos

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active" style="color:white">Administrar ingresos</li>

    </ol>

  </section>

  <section class="content" style="background-color:black;">

    <div class="box" style="background-color:black;">

      <div class="box-header with-border">

        <button class="btn btn-primary" style="font-weight:500;" data-toggle="modal" data-target="#modalAgregarProducto">

          Agregar Ingresos

        </button>

      </div>

      <div class="box-body">

        <table class="table table-bordered table-striped dt-responsive tablaProductos" style="font-weight:500;" width="100%">

          <thead>

            <tr>

              <th style="width:10px">#</th>
              <th style="font-weight:500;">Imagen</th>
              <th style="font-weight:500;">Código</th>
              <th style="font-weight:500;">Descripción</th>
              <th style="font-weight:500;">Categoría</th>
              <th style="font-weight:500;">Stock</th>
              <th style="font-weight:500;">Precio de compra</th>
              <th style="font-weight:500;">Precio de venta</th>
              <th style="font-weight:500;">Agregado</th>
              <th style="font-weight:500;">Acciones</th>

            </tr>

          </thead>

        </table>

        <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR PRODUCTO
======================================-->

<div id="modalAgregarProducto" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content" style="background-color:black;">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#000000; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Ingreso</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">

              <div class="input-group">

                <div class="input-with-background">

                  <input type="text" id="inputWithSpace" name="username" placeholder="# Placa">
                </div>



              </div>

            </div>

            <!-- ENTRADA PARA EL tipo de vehiculo-->

            <div class="input-group" style="margin-bottom:3%;">

              <span class="input-group-addon"><i class="fa fa-users"></i></span>

              <select class="form-control input-lg" name="nuevoPerfil" style="border-right: 2px solid #e3aa00;font-family: 'Anton';" required>

                <option value="">Selecionar Vehiculo</option>

                <option value="Administrador">Moto</option>

                <option value="Especial">Cuatrimoto</option>

              </select>

            </div>

            <!-- ENTRADA PARA LA DESCRIPCIÓN -->

            <div class="form-group" style="font-family: 'Anton';">
              
              <div style="display: flex;font-family: 'Anton';">
                <i class="fa fa-clock-o" style="color: #e3aa00;padding-left: 2%;padding-top: 2%;padding-bottom: 2%;font-size: 182%;margin-left: 0%;border-top: 2px solid #e3aa00;border-left: 2px solid #e3aa00;border-bottom: 2px solid #e3aa00;"></i>
                <div class="hora">Hora Actual:</div>
                <div id="hora" class="hora_2"></div>
              </div>
              
            </div>

            </div>

            <!-- ENTRADA PARA fecha-->

            <div class="form-group" style="font-family: 'Anton';">
              
              <div style="display: flex;font-family: 'Anton';">
                <i class="fa fa-clock-o" style="color: #e3aa00;padding-left: 2%;padding-top: 2%;padding-bottom: 2%;font-size: 182%;margin-left: 2%;border-top: 2px solid #e3aa00;border-left: 2px solid #e3aa00;border-bottom: 2px solid #e3aa00;"></i>
                <div class="fecha">Fecha Actual:</div>
                <div id="fecha" class="fecha_2"></div>
              </div>
              
            </div>

            <!-- ENTRADA PARA PRECIO COMPRA -->

            <div class="form-group row">

              <div class="col-xs-6">

                <div class="input-group" style="margin-left: 4%;font-family: 'Anton'; color:white;opacity:2!important;">

                  <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>

                  <input type="text" class="form-control input-lg" id="nuevoPrecioCompra" name="nuevoPrecioCompra" step="any" min="0" placeholder="# Cuviculo" style="width: 56%;" required>

                </div>

              </div>

              <!-- ENTRADA PARA PRECIO VENTA -->

              <div class="col-xs-6">

                <div class="input-group" style="margin-left: -27%;font-family: 'Anton'; color:white;opacity:2;">

                  <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>

                  <input type="text" class="form-control input-lg" id="nuevoPrecioVenta" name="nuevoPrecioVenta" step="any" min="0" placeholder="Descripcion articulos" required>

                </div>

                <br>

              </div>

            </div>          
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar producto</button>

        </div>

      </form>

      <?php

      $crearProducto = new ControladorProductos();
      $crearProducto->ctrCrearProducto();

      ?>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->

<div id="modalEditarProducto" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar producto</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">


            <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-th"></i></span>

                <select class="form-control input-lg" name="editarCategoria" readonly required>

                  <option id="editarCategoria"></option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL CÓDIGO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-code"></i></span>

                <input type="text" class="form-control input-lg" id="editarCodigo" name="editarCodigo" readonly required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DESCRIPCIÓN -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span>

                <input type="text" class="form-control input-lg" id="editarDescripcion" name="editarDescripcion" required>

              </div>

            </div>

            <!-- ENTRADA PARA STOCK -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-check"></i></span>

                <input type="number" class="form-control input-lg" id="editarStock" name="editarStock" min="0" required>

              </div>

            </div>

            <!-- ENTRADA PARA PRECIO COMPRA -->

            <div class="form-group row">

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span>

                  <input type="number" class="form-control input-lg" id="editarPrecioCompra" name="editarPrecioCompra" step="any" min="0" required>

                </div>

              </div>

              <!-- ENTRADA PARA PRECIO VENTA -->

              <div class="col-xs-6">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span>

                  <input type="number" class="form-control input-lg" id="editarPrecioVenta" name="editarPrecioVenta" step="any" min="0" readonly required>

                </div>

                <br>

                <!-- CHECKBOX PARA PORCENTAJE -->

                <div class="col-xs-6">

                  <div class="form-group">

                    <label>

                      <input type="checkbox" class="minimal porcentaje" checked>
                      Utilizar procentaje
                    </label>

                  </div>

                </div>

                <!-- ENTRADA PARA PORCENTAJE -->

                <div class="col-xs-6" style="padding:0">

                  <div class="input-group">

                    <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>

                    <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                  </div>

                </div>

              </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

            <div class="form-group">

              <div class="panel">SUBIR IMAGEN</div>

              <input type="file" class="nuevaImagen" name="editarImagen">

              <p class="help-block">Peso máximo de la imagen 2MB</p>

              <img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

              <input type="hidden" name="imagenActual" id="imagenActual">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>

      <?php

      $editarProducto = new ControladorProductos();
      $editarProducto->ctrEditarProducto();

      ?>

    </div>

  </div>

</div>

<?php

$eliminarProducto = new ControladorProductos();
$eliminarProducto->ctrEliminarProducto();

?>

<script>
  document.getElementById('inputWithSpace').addEventListener('input', function(event) {
    let inputValue = event.target.value.replace(/\s/g, ''); // Eliminar espacios en blanco
    let formattedValue = '';

    for (let i = 0; i < inputValue.length; i++) {
      if (i > 0 && i % 3 === 0) { // Agregar espacio después de cada tres caracteres
        formattedValue += '  ';
      }
      formattedValue += inputValue[i];
    }

    event.target.value = formattedValue;
  });


  document.getElementById('inputWithSpace').addEventListener('input', function(event) {
    event.target.value = event.target.value.toUpperCase(); // Convertir texto a mayúsculas
  });


  // Función para obtener la hora actual
  function obtenerHora() {
    // Obtenemos la fecha actual
    var fecha = new Date();

    // Formateamos la hora
    var hora = fecha.getHours();
    var minutos = fecha.getMinutes();
    var segundos = fecha.getSeconds();
    var ampm = hora >= 12 ? 'PM' : 'AM'; // Determinamos si es AM o PM

    // Convertimos la hora a formato de 12 horas
    hora = hora % 12;
    hora = hora ? hora : 12; // Si es 0, entonces es medianoche (12 AM)

    // Agregamos un cero delante si el número es menor que 10
    minutos = minutos < 10 ? '0' + minutos : minutos;
    segundos = segundos < 10 ? '0' + segundos : segundos;

    // Mostramos la hora en el elemento con id 'hora'
    document.getElementById('hora').innerHTML = hora + ':' + minutos + ':' + segundos + ' ' + ampm;

    // Retornamos la hora formateada
    return hora + ':' + minutos + ':' + segundos + ' ' + ampm;
  }

  // Llamamos a la función para que se ejecute al cargar la página
  obtenerHora();

  // Llamamos a la función cada segundo para que la hora se actualice
  setInterval(obtenerHora, 1000);

   // Función para obtener la fecha actual en el formato "Día de la semana, día de mes de año"
function obtenerFecha() {
  // Días de la semana en español
  var diasSemana = ["domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado"];

  // Meses del año en español
  var meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];

  // Obtenemos la fecha actual
  var fecha = new Date();

  // Obtenemos el día de la semana, el día del mes, el mes y el año
  var diaSemana = diasSemana[fecha.getDay()];
  var dia = fecha.getDate();
  var mes = meses[fecha.getMonth()];
  var año = fecha.getFullYear();

  // Formateamos la fecha
  var fechaFormateada = diaSemana + ", " + dia + " de " + mes + " del " + año;

  // Mostramos la fecha en el elemento con id 'fecha'
  document.getElementById('fecha').innerHTML = fechaFormateada;

  // Retornamos la fecha formateada
  return fechaFormateada;
}

// Llamamos a la función para que se ejecute al cargar la página
obtenerFecha();
</script>