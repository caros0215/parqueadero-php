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

      Administrar Salidas

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active" style="color:white">Administrar Salidas</li>

    </ol>

  </section>

  <section class="content" style="background-color:black;">

    <div class="box" style="background-color:black;">

      <!-- ENTRADA PARA SELECCIONAR CATEGORÍA -->

      <div class="form-group" style="margin-top:2%;">

        <div class="grid text-center">
          <div class="g-col-6">
            <div style="display: flex; font-family: 'Anton';">
              <i class="fa fa-search" style="color: #e3aa00; padding-left: 2%; padding-top: 2%; padding-bottom: 2%; font-size: 182%; margin-left: 4%; border-top: 2px solid #e3aa00; border-left: 2px solid #e3aa00; border-bottom: 2px solid #e3aa00;"></i>
              <input type="text" class="buscador" id="buscador" placeholder="Buscar placa..." style="font-family: 'Anton'; text-transform: uppercase;">
            </div>
          </div>
          <div class="g-col-6">
            <div style="display: flex; font-family: 'Anton';margin-top:2%;">
              <i class="fa fa-search" style="color: #e3aa00; padding-left: 2%; padding-top: 2%; padding-bottom: 2%; font-size: 182%; margin-left: 4%; border-top: 2px solid #e3aa00; border-left: 2px solid #e3aa00; border-bottom: 2px solid #e3aa00;"></i>
              <input type="text" class="buscador" id="buscador" placeholder="Buscar ticket..." style="font-family: 'Anton'; text-transform: uppercase;">
            </div>
          </div>

          <div style="display: flex;justify-content: flex-end;margin-right: 35%;margin-top: -14.5%;zoom: 80%;">
            <div class="g-col-6">
              <div class="input-with-background">
                <input type="text" class="mostrar_placa" id="inputWithSpace" name="username" readonly>
              </div>
            </div>


          </div>

          <div class="grid text-center">
            <div class="g-col-6">
              <div class="form-group" style="font-family: 'Anton';    width: 30%;margin-left:4%;">

                <div style="display: flex;font-family: 'Anton';">
                  <i class="fa fa-clock-o" style="color: #e3aa00;padding-left: 2%;padding-top: 2%;padding-bottom: 2%;font-size: 182%;margin-left: 0%;border-top: 2px solid #e3aa00;border-left: 2px solid #e3aa00;border-bottom: 2px solid #e3aa00;"></i>
                  <div class="hora">Hora Entrada:</div>
                  <div class="hora_3"></div>
                </div>

              </div>
            </div>
            <div class="g-col-6">
              <div class="form-group" style="font-family: 'Anton';    width: 30%;margin-left:3.5%;">

                <div style="display: flex;font-family: 'Anton';">
                  <i class="fa fa-calendar" style="color: #e3aa00;padding-left: 2%;padding-top: 2%;padding-bottom: 2%;font-size: 182%;margin-left: 2%;border-top: 2px solid #e3aa00;border-left: 2px solid #e3aa00;border-bottom: 2px solid #e3aa00;"></i>
                  <div class="fecha">Fecha Entrada:</div>
                  <div class="fecha_3"></div>
                </div>

              </div>
            </div>

            <div class="g-col-6">
              <div class="form-group" style="font-family: 'Anton';    width: 30%;margin-right: 17%; float:right;margin-top: -10%;">

                <div style="display: flex;font-family: 'Anton';">
                  <i class="fa fa-clock-o" style="color: #e3aa00;padding-left: 2%;padding-top: 2%;padding-bottom: 2%;font-size: 182%;margin-left: 0%;border-top: 2px solid #e3aa00;border-left: 2px solid #e3aa00;border-bottom: 2px solid #e3aa00;"></i>
                  <div class="hora">Hora Salida:</div>
                  <div id="hora" class="hora_4"></div>
                </div>

              </div>
            </div>
            <div class="g-col-6">

              <div class="form-group" style="font-family: 'Anton';float:right; width: 31%;margin-right: 16.5%;margin-top: -4.9%;">
                <div style="display: flex;font-family: 'Anton';">
                  <i class="fa fa-calendar" style="color: #e3aa00;padding-left: 2%;padding-top: 2%;padding-bottom: 2%;font-size: 182%;margin-left: 2%;border-top: 2px solid #e3aa00;border-left: 2px solid #e3aa00;border-bottom: 2px solid #e3aa00;"></i>
                  <div class="fecha">Fecha Salida:</div>
                  <div id="fecha" class="fecha_4"></div>
                </div>

              </div>
            </div>


          </div>
          <div class="g-col-6">
            <div class="form-group" style="font-family: 'Anton';    width: 30%;margin-left:4%;">

              <div style="display: flex;font-family: 'Anton';">
                <i class="fa fa-motorcycle" style="color: #e3aa00;padding-left: 2%;padding-top: 2%;padding-bottom: 2%;font-size: 182%;margin-left: 0%;border-top: 2px solid #e3aa00;border-left: 2px solid #e3aa00;border-bottom: 2px solid #e3aa00;"></i>
                <div class="hora">Tipo Vehiculo:</div>
                <div class="hora_3"></div>
              </div>

            </div>
          </div>
          <div class="g-col-6">
            <div class="form-group" style="font-family: 'Anton';width: 26%;margin-right: 21.5%;float: right;margin-top: -5%;">

              <div style="display: flex;font-family: 'Anton';">
                <i class="fa fa-clock-o" style="color: #e3aa00;padding-left: 2%;padding-top: 2%;padding-bottom: 2%;font-size: 182%;margin-left: 2%;border-top: 2px solid #e3aa00;border-left: 2px solid #e3aa00;border-bottom: 2px solid #e3aa00;"></i>
                <div class="fecha">Tiempo Transcurrido:</div>
                <div class="fecha_3"></div>
              </div>

            </div>
          </div>

          <div class="g-col-6">
            <div class="form-group" style="font-family: 'Anton';width: 35%;margin-right: 12%;FLOAT: right;margin-top: 0%;">

              <div style="display: flex;font-family: 'Anton';">
                <i class="fa fa-money" style="color: #e3aa00;padding-left: 2%;padding-top: 2%;padding-bottom: 2%;font-size: 182%;margin-left: 0%;border-top: 2px solid #e3aa00;border-left: 2px solid #e3aa00;border-bottom: 2px solid #e3aa00;"></i>
                <div class="hora">Cobro:</div>
                <div class="hora_3"></div>
              </div>

            </div>
            
            <div class="g-col-4">

              <div class="form-group" style="font-family: 'Anton';    width: 26%;margin-left:4%;">

                <div style="display: flex;font-family: 'Anton';">
                  <i class="fa fa-clock-o" style="color: #e3aa00;padding-left: 2%;padding-top: 2%;padding-bottom: 2%;font-size: 182%;margin-left: 0%;border-top: 2px solid #e3aa00;border-left: 2px solid #e3aa00;border-bottom: 2px solid #e3aa00;"></i>
                  <div class="hora">Monto por Lavado:</div>
                  <div class="hora_3"></div>
                </div>

                <div class="grid text-center">

                  <div class="hora_8">Si:</div>

                  <div>
                    <div class="checkbox-wrapper-31" style="margin-left: 7%;position: absolute;bottom: 0%;">

                      <input type="checkbox" />
                      <svg viewBox="0 0 35.6 35.6">
                        <circle class="background" cx="17.8" cy="17.8" r="17.8"></circle>
                        <circle class="stroke" cx="17.8" cy="17.8" r="14.37"></circle>
                        <polyline class="check" points="11.78 18.12 15.55 22.23 25.17 12.87"></polyline>
                      </svg>
                    </div>
                  </div>
                  <div class="hora_9">No:</div>
                  <div>
                    <div class="checkbox-wrapper-31" style="position: absolute;left: 33%;bottom: 0%;">
                      <input type="checkbox" />
                      <svg viewBox="0 0 35.6 35.6">
                        <circle class="background" cx="17.8" cy="17.8" r="17.8"></circle>
                        <circle class="stroke" cx="17.8" cy="17.8" r="14.37"></circle>
                        <polyline class="check" points="11.78 18.12 15.55 22.23 25.17 12.87"></polyline>
                      </svg>
                    </div>
                    
                  </div>
                  
                </div>
                
                  
               

              </div>



            </div>

          </div>

         

  </section>
  <button class="reset anim-bg-gradient" data-bs-toggle="modal" data-bs-target="#modalPagar" style="float: right;margin-right: 45%;margin-top: 0%;width: 18%;">Ir a Pagar</button>
 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

</div>



<!--=====================================
MODAL EDITAR PRODUCTO
======================================-->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
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

  document.getElementById("buscador").addEventListener("input", function() {
    this.value = this.value.toUpperCase();
  });

  const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})
</script>

<style>
  .checkbox-wrapper-31:hover .check {
    stroke-dashoffset: 0;
  }

  .checkbox-wrapper-31 {
    position: relative;
    display: inline-block;
    width: 40px;
    height: 40px;
  }

  .checkbox-wrapper-31 .background {
    fill: #ccc;
    transition: ease all 0.6s;
    -webkit-transition: ease all 0.6s;
  }

  .checkbox-wrapper-31 .stroke {
    fill: none;
    stroke: #fff;
    stroke-miterlimit: 10;
    stroke-width: 2px;
    stroke-dashoffset: 100;
    stroke-dasharray: 100;
    transition: ease all 0.6s;
    -webkit-transition: ease all 0.6s;
  }

  .checkbox-wrapper-31 .check {
    fill: none;
    stroke: #fff;
    stroke-linecap: round;
    stroke-linejoin: round;
    stroke-width: 2px;
    stroke-dashoffset: 22;
    stroke-dasharray: 22;
    transition: ease all 0.6s;
    -webkit-transition: ease all 0.6s;
  }

  .checkbox-wrapper-31 input[type=checkbox] {
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    margin: 0;
    opacity: 0;
    -appearance: none;
    -webkit-appearance: none;
  }

  .checkbox-wrapper-31 input[type=checkbox]:hover {
    cursor: pointer;
  }

  .checkbox-wrapper-31 input[type=checkbox]:checked+svg .background {
    fill: #d5a000;
  }

  .checkbox-wrapper-31 input[type=checkbox]:checked+svg .stroke {
    stroke-dashoffset: 0;
  }

  .checkbox-wrapper-31 input[type=checkbox]:checked+svg .check {
    stroke-dashoffset: 0;
  }

  .anim-bg-gradient {
    padding: 0.6em 1.2em;
    border-radius: 0.375em;
    cursor: pointer;
    color: black;
    background: linear-gradient(29deg, #000000, #e3aa00, #696969);
    background-size: 200% 100%;
    background-position: 100% 0;
    transition: background-position .5s;
}

  .anim-bg-gradient:hover {
    background-position: 0 0;
  }

  /* demo stuff */
  /* body {
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
  } */
</style>