<div class=" px-4 py-4 bg-white shadow-lg rounded-lg lg:h-max ">

  <h1 class="text-gray-500 text-lg text-center border-b border-gray-200 mb-5 w-auto ">Resultado de los Sorteos</h1>

  <div class="flex lg:flex-row flex-col gap-1">

    <div class="lg:w-1/5 inline-block lg:h-full w-full lg:border-r  lg:border-gray-200 lg:pr-2" id="caja_inputs">
      <div class="h-auto">
        <p class="text-gray-500 lg:text-sm  lg:text-center w-auto">Tipo de Sorteo</p>

        <select class="text-center lg:w-full w-full border border-gray-300 p-1 my-2 rounded-md focus:outline-none focus:ring-2 ring-blue-200" id="tipo">
          <option value="%" selected>Todos</option>
          <option value="1">Ruletas Animalitos</option>
          <option value="2">Numeros</option>
        </select>


      </div>

      <div>
        <p class="text-gray-500 lg:text-sm  lg:text-center w-auto ">Fecha</p>

        <input id="fecha" type="date" class="text-center lg:w-full w-full border border-gray-300 p-1 my-2 rounded-md focus:outline-none focus:ring-2 ring-blue-200" value="<?php date_default_timezone_set('America/Caracas'); echo date("Y-m-d");  ?>">
      </div>


      <div class="bg-gray-100 overflow-scroll h-48 rounded-lg p-2 mt-5 lg:text-sm contenedor" id="options">

      </div>

      <input type="hidden" value="" id="cod_sorteo">

    </div>

    <div class="lg:w-4/5 lg:pl-5 lg:float-right overflow-scroll ">

      <table id="table" class="display">
        <thead>
          <tr>
            <th class='lg:px-4 lg:py-3 text-sm px-2'>Sorteo</th>
            <th class='lg:px-4 lg:py-3 text-sm px-2'>Cod</th>
            <th class='lg:px-4 lg:py-3 text-sm px-2'>Ganador</th>
            <th class='lg:px-4 lg:py-3 text-sm px-2'>Fecha</th>
            <th class='lg:px-4 lg:py-3 text-sm px-2'>Accion</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>




    </div>

  </div>




  <script>
    $('#table').DataTable({
      language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "first": "Primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      }

    });

    tipo_options('%');
    resultados_de_los_sorteos_tabla(0);

    $('#tipo').change(function() {

      var select = $('#tipo').val();
      tipo_options(select);
      resultados_de_los_sorteos_tabla(0);


    });


    $('#fecha').change(function() {

      var select = $('#tipo').val();

      resultados_de_los_sorteos_tabla($('#cod_sorteo').val());


    });
  </script>