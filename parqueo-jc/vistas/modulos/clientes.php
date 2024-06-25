
<style>
  @media (min-width: 768px){
.modal-dialog {
    width: 1219px;
    margin: 30px auto;
}
}

</style>
<?php

if ($_SESSION["perfil"] == "Especial") {

  echo '<script>

    window.location = "inicio";

  </script>';

  return;
}

?>

<div class="content-wrapper">

  <section class="content-header">

    <h1 style="color: white;font-family: 'Anton'; ">

      Administrar Abonados

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active" style="color: white;">Administrar Abonados</li>

    </ol>

  </section>

  <div class="btn-container">
    <button class="btn btn-primary" style="font-weight:500;font-size: 214%;margin-bottom: 6%;" data-toggle="modal" data-target="#Abonados">

      Abonados

    </button>
    <button class="btn btn-primary" style="font-weight:500;font-size: 214%;width: 11%;" data-toggle="modal" data-target="#planes">

      Planes

    </button>
    </div>
  </div>

  <!--=====================================
MODAL AGREGAR CLIENTE
======================================-->

  <div id="Abonados" class="modal fade" role="dialog">

    <div class="modal-dialog modal-xl">

      <div class="modal-content">

        <form role="form" method="post">

          <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

          <div class="modal-header" style="background:#3c8dbc; color:white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Agregar cliente</h4>

          </div>

          <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

          <div class="modal-body">

            <div class="box-body">

              <!-- ENTRADA PARA EL NOMBRE -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre" required>

                </div>

              </div>

              <!-- ENTRADA PARA EL DOCUMENTO ID -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar documento" required>

                </div>

              </div>

              <!-- ENTRADA PARA EL EMAIL -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                  <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>

                </div>

              </div>

              <!-- ENTRADA PARA EL TELÉFONO -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                  <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

                </div>

              </div>

              <!-- ENTRADA PARA LA DIRECCIÓN -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>

                  <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>

                </div>

              </div>

              <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                  <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

                </div>

              </div>

            </div>

          </div>

          <!--=====================================
        PIE DEL MODAL
        ======================================-->

          <div class="modal-footer">

            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

            <button type="submit" class="btn btn-primary">Guardar cliente</button>

          </div>

        </form>

        <?php

        $crearCliente = new ControladorClientes();
        $crearCliente->ctrCrearCliente();

        ?>

      </div>

    </div>

  </div>

  <!--=====================================
MODAL EDITAR CLIENTE
======================================-->

  <div id="planes" class="modal fade" role="dialog">

    <div class="modal-dialog modal-xl">

      <div class="modal-content">

        <form role="form" method="post">

          <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

          <div class="modal-header" style="background:#3c8dbc; color:white">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title">Editar cliente</h4>

          </div>

          <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

          <div class="modal-body">

            <div class="box-body">

              <!-- ENTRADA PARA EL NOMBRE -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-user"></i></span>

                  <input type="text" class="form-control input-lg" name="editarCliente" id="editarCliente" required>
                  <input type="hidden" id="idCliente" name="idCliente">
                </div>

              </div>

              <!-- ENTRADA PARA EL DOCUMENTO ID -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-key"></i></span>

                  <input type="number" min="0" class="form-control input-lg" name="editarDocumentoId" id="editarDocumentoId" required>

                </div>

              </div>

              <!-- ENTRADA PARA EL EMAIL -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                  <input type="email" class="form-control input-lg" name="editarEmail" id="editarEmail" required>

                </div>

              </div>

              <!-- ENTRADA PARA EL TELÉFONO -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                  <input type="text" class="form-control input-lg" name="editarTelefono" id="editarTelefono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

                </div>

              </div>

              <!-- ENTRADA PARA LA DIRECCIÓN -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>

                  <input type="text" class="form-control input-lg" name="editarDireccion" id="editarDireccion" required>

                </div>

              </div>

              <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                  <input type="text" class="form-control input-lg" name="editarFechaNacimiento" id="editarFechaNacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

                </div>

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

        $editarCliente = new ControladorClientes();
        $editarCliente->ctrEditarCliente();

        ?>



      </div>

    </div>

  </div>

  <?php

  $eliminarCliente = new ControladorClientes();
  $eliminarCliente->ctrEliminarCliente();

  ?>