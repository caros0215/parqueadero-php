<?php

if($_SESSION["perfil"] == "Vendedor"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<div class="content-wrapper">

  <section class="content-header" style="color:white">
    
    <h1>
      
      Administrar Tarifas
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active" style="color:white">Administrar Tarifas</li>
    
    </ol>

  </section>

  <section class="content" style="background-color:black !important;">

    <div class="box">

      <div class="box-header with-border" style="background-color:black !important;">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarTarifa">
          
          Agregar Tarifa

        </button>

      </div>

      <div class="box-body" style="background-color:black !important;">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th style="width:10px;font-weight: 500;">Vehiculo</th>
           <th style="width:10px;font-weight: 500;">Precio por hora o fraccion</th>
           <th style="width:10px;font-weight: 500;">Precio por dia</th>
           <th style="width:10px;font-weight: 500;">Precio por lavado</th>
           <th style="width:10px;font-weight: 500;">Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

          foreach ($categorias as $key => $value) {
           
            echo ' <tr>

                    <td>'.($key+1).'</td>

                    <td class="text-uppercase">'.$value["categoria"].'</td>

                    <td>

                      <div class="btn-group">
                          
                        <button class="btn btn-warning btnEditarCategoria" idCategoria="'.$value["id"].'" data-toggle="modal" data-target="#modalAgregarTarifa"><i class="fa fa-pencil"></i></button>';

                        if($_SESSION["perfil"] == "Administrador"){

                          echo '<button class="btn btn-danger btnEliminarCategoria" idCategoria="'.$value["id"].'"><i class="fa fa-times"></i></button>';

                        }

                      echo '</div>  

                    </td>

                  </tr>';
          }

        ?>

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR CATEGORÍA
======================================-->

<div id="modalAgregarTarifa" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content" style="border-radius: 3px;">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#000000; color:white; ">

          <button type="button" class="close" data-dismiss="modal" style="color:white !important;opacity:1 !important;">&times;</button>

          <h4 class="modal-title">Agregar Tarifa</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" style="background-color: black;">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-car"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoVehiculo" placeholder="Ingresar Vehiculo" required>

              </div>
            </div>
            <div class="form-group">

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-usd"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaHora" placeholder="Ingresar Precio por hora" required>

              </div>
            </div>  

            <div class="form-group">

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-money "></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDia" placeholder="Ingresar Precio por dia" required>

              </div>
            </div>  

            <div class="form-group">

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-tachometer"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoLavado" placeholder="Ingresar precio por lavado" required>

              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer" style="background-color: black;border-top:3px solid #e3aa00;">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Tarifa</button>

        </div>

        <?php

          $crearCategoria = new ControladorCategorias();
          $crearCategoria -> ctrCrearCategoria();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR CATEGORÍA
======================================-->

<div id="modalEditarCategoria" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar categoría</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="editarCategoria" id="editarCategoria" required>

                 <input type="hidden"  name="idCategoria" id="idCategoria" required>

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

      <?php

          $editarCategoria = new ControladorCategorias();
          $editarCategoria -> ctrEditarCategoria();

        ?> 

      </form>

    </div>

  </div>

</div>

<?php

  $borrarCategoria = new ControladorCategorias();
  $borrarCategoria -> ctrBorrarCategoria();

?>


