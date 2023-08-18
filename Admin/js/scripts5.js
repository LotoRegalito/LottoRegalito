let datos_sorteos = [];

let Sorteo_array = [];

let sorteo_open = [];
let sorteo_close = [];

function Modulo_cargarPremios() {
  $("#Modulo_principal").html(
    "<div class='px-4 py-4 bg-white shadow-lg rounded-lg flex justify-center' id='loader_v'><div class=' w-full lg:w-1/2 flex justify-center items-center'><p class='mr-2 text-gray-600'>Cargando</p><svg class=' animate-spin -ml-1 mr-3 h-5 w-5 ' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24'><circle class='opacity-25' cx='12' cy='12' r='10' stroke='currentColor' stroke-width='4'></circle><path class='opacity-75' fill='currentColor' d='M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z'></path></svg></div></div>"
  );
  $("#Modulo_principal").load("./CargarPremios/Modulo_CargarPremios.php");
  $("#btn_menu").trigger("click");
}

function ResultadosDelVendedor_view() {
  $("#Modulo_principal").html(
    "<div class='px-4 py-4 bg-white shadow-lg rounded-lg flex justify-center' id='loader_v'><div class=' w-full lg:w-1/2 flex justify-center items-center'><p class='mr-2 text-gray-600'>Cargando</p><svg class=' animate-spin -ml-1 mr-3 h-5 w-5 ' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24'><circle class='opacity-25' cx='12' cy='12' r='10' stroke='currentColor' stroke-width='4'></circle><path class='opacity-75' fill='currentColor' d='M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z'></path></svg></div></div>"
  );
  $("#Modulo_principal").load(
    "./ResultadosDeLosSorteos/modulo_ResultadosDeLosSorteos.php"
  );

  $("#btn_menu").trigger("click");
}

function historial_de_acciones_robot_view() {
  $("#Modulo_principal").html(
    "<div class='px-4 py-4 bg-white shadow-lg rounded-lg flex justify-center' id='loader_v'><div class=' w-full lg:w-1/2 flex justify-center items-center'><p class='mr-2 text-gray-600'>Cargando</p><svg class=' animate-spin -ml-1 mr-3 h-5 w-5 ' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24'><circle class='opacity-25' cx='12' cy='12' r='10' stroke='currentColor' stroke-width='4'></circle><path class='opacity-75' fill='currentColor' d='M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z'></path></svg></div></div>"
  );
  $("#Modulo_principal").load(
    "./HistorialdeAccionesRobots/modulo_historial_de_acciones_robot.php");

  $("#btn_menu").trigger("click");
}

function historial_de_acciones_view() {
  $("#Modulo_principal").html(
    "<div class='px-4 py-4 bg-white shadow-lg rounded-lg flex justify-center' id='loader_v'><div class=' w-full lg:w-1/2 flex justify-center items-center'><p class='mr-2 text-gray-600'>Cargando</p><svg class=' animate-spin -ml-1 mr-3 h-5 w-5 ' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24'><circle class='opacity-25' cx='12' cy='12' r='10' stroke='currentColor' stroke-width='4'></circle><path class='opacity-75' fill='currentColor' d='M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z'></path></svg></div></div>"
  );
  $("#Modulo_principal").load(
    "./HistorialDeAcciones/modulo_historial_de_acciones.php"
  );
  $("#btn_menu").trigger("click");
}

function resultados_de_los_sorteos_tabla(cod_sorteo) {
  var url = "./ResultadosDeLosSorteos/resultados_de_los_sorteos_tabla.php";
  var tipo = $("#tipo").val();
  var fecha = $("#fecha").val();
  if (cod_sorteo == "") {
    cod_sorteo = 0;
  }
  $.ajax({
    type: "POST",
    url: url,
    data: { fecha: fecha, cod_sorteo: cod_sorteo, tipo: tipo },
    success: function (data) {

      json = JSON.parse(data);

      $('#table').DataTable({
        "bDestroy": true,
        order: [[0, 'asc']],
        paging: true,
        select: true,
        targets: 5,
        "processing": true,
        "autoWidth": false,
        language: {
          //?dataTable en Español
          url: '//cdn.datatables.net/plug-ins/1.12.0/i18n/es-ES.json',
          //? input de buscar tengo un texto
          searchPlaceholder: "Filtrar"

        },
        "data": json,
        "columns": [
          { "data": "sorteo" },
          { "data": "ganador" },
          { "data": "descripcion" },
          { "data": "fecha" },
          {
            data: null,
            bSortable: false,
            mRender: function (data, type, value) {
              return (
                "<button onclick='Anular_Premiacion(`" + data['fecha'] + "`,`" + data['cod_sorteo'] + "`,`" + data['ganador'] + "`,`" + data['descripcion'] + "`)' class='flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-red-600 rounded-lg  focus:outline-none focus:shadow-outline-gray' aria-label='Edit'><svg class='w-5 h-5' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'><path stroke-linecap='round' stroke-linejoin='round' d='M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z' /></svg></button>");
            },
          },
        ],
        responsive: true,
      }).columns.adjust();

      //Anular_Premiacion(fecha, cod_sorteo, ganador)
      //   $("#tabla").html(data);
      // $("#cod_sorteo").val(cod_sorteo);
    },
  });
}

function Movimientos_usuario_tabla(cod) {
  var url = "./HistorialDeAcciones/Movimientos_usuario_tabla.php";
  var fecha = $("#fecha").val();

  $.ajax({
    type: "POST",
    url: url,
    data: { fecha: fecha, cod: cod },
    success: function (data) {

      json = JSON.parse(data);

      $('#table').DataTable({
        "bDestroy": true,
        order: [[0, 'asc']],
        paging: true,
        select: true,
        targets: 5,
        "processing": true,
        "autoWidth": false,
        language: {
          //?dataTable en Español
          url: '//cdn.datatables.net/plug-ins/1.12.0/i18n/es-ES.json',
          //? input de buscar tengo un texto
          searchPlaceholder: "Filtrar"

        },
        "data": json,
        "columns": [
          { "data": "usuario" },
          { "data": "sorteo" },
          { "data": "ganador" },
          { "data": "fecha" },
          { "data": "hora_proceso" },
          {
            "data": null,
            "bSortable": false,
            "mRender": function (data, type, value) {
              if (data.Accion == 'Premiado') {
                return '<span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Premiado</span>';
              } else {
                return '<span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Anulado</span>';
              }

            }
          },

        ],
        responsive: true,
      }).columns.adjust();

      //Anular_Premiacion(fecha, cod_sorteo, ganador)
      //   $("#tabla").html(data);
      // $("#cod_sorteo").val(cod_sorteo);
    },
  });
}

function Movimientos_tabla_robot() {
  var url = "./HistorialdeAccionesRobots/Movimientos_usuario_tabla.php";
  var fecha = $("#fecha").val();
  var tipo = $("#tipo").val();
  $.ajax({
    type: "POST",
    url: url,
    data: { fecha: fecha,tipo:tipo},
    success: function (data) {
      json = JSON.parse(data);
      $('#table').DataTable({
        "bDestroy": true,
        order: [[0, 'asc']],
        paging: true,
        select: true,
        targets: 5,
        "processing": true,
        "autoWidth": false,
        language: {
          //?dataTable en Español
          url: '//cdn.datatables.net/plug-ins/1.12.0/i18n/es-ES.json',
          //? input de buscar tengo un texto
          searchPlaceholder: "Filtrar"

        },
        "data": json,
        "columns": [
          { "data": "sorteo" },
          { "data": "descripcion" },
          { "data": "fecha" },
          { "data": "hora_proceso" },

        ],
        responsive: true,
      }).columns.adjust();

      //Anular_Premiacion(fecha, cod_sorteo, ganador)
      //   $("#tabla").html(data);
      // $("#cod_sorteo").val(cod_sorteo);
    },
  });
}

function tipo_options(tipo) {
  var url = "./ResultadosDeLosSorteos/tipo_options.php";
  $.ajax({
    type: "POST",
    url: url,
    data: { tipo: tipo },
    success: function (data) {
      $("#options").html(data);
    },
  });
}

function usuario_options() {
  var url = "./HistorialDeAcciones/tipo_options.php";
  $.ajax({
    type: "POST",
    url: url,
    success: function (data) {
      $("#options").html(data);
    },
  });
}

function consulta_tabla_Carga_de_premios() {
  let loader_hidden = $("#loader_tabla .hidden").toArray().length;

  if (loader_hidden > 0) {
    $("#tabla").addClass("hidden");

    $("#loader_v").removeClass("hidden");
  } else if (loader_hidden < 0) {
    $("#loader_v").addClass("hidden");
    $("#tabla").removeClass("hidden");
  }

  var url = "./CargarPremios/consulta_tabla_Carga_de_premios.php";
  var fecha = $("#fecha").val();

  $.ajax({
    type: "POST",
    url: url,
    data: { fecha: fecha },
    success: function (data) {
      if (data.length > 0) {
        if (data == 'false') {
          location.href = './index.php?error3=`Sesion Expirada`';
          return;
        }
        $("#loader_v").addClass("hidden");
        $("#tabla").removeClass("hidden");
        $("#tabla").html(data);
        datos_sorteos = [];
      }
    },
  });

}

function cargar_datos_inputs_Carga_de_premios(
  id,
  descripcion,
  tipo,
  fecha,
  grupo_animal,
  soloterminal,
  status
) {

  if (status == "NO") {
    datos_sorteos = [];
    datos_sorteos.push({
      id: id,
      descripcion: descripcion,
      tipo: tipo,
      fecha: fecha,
      grupo_animal: grupo_animal,
      soloterminal: soloterminal,
    });

    $(location).attr("href", "#datos_sorteo");
  }
}

function asignar_valores_Carga_de_premios() {
  for (let index = 0; index < datos_sorteos.length; index++) {
    $("#cod_sorteo").val(datos_sorteos[index]["id"]);
    $("#nomb_sorteo").val(datos_sorteos[index]["descripcion"]);
    $("#tipo_sorteo").val(datos_sorteos[index]["tipo"]);
    $("#cierre_sorteo").val(datos_sorteos[index]["fecha"]);
  }
}

function consulta_select_Carga_de_premios(grupo_animal, soloterminal, tipo, status) {
  var url = "./CargarPremios/consulta_select_Carga_de_premios.php";

  if (status == "SI") {

    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
    })

    Toast.fire({
      icon: 'info',
      title: 'Sorteo ya Premiado'
    });
    return;

  }

  $.ajax({
    type: "POST",
    url: url,
    data: {
      grupo_animal: grupo_animal,
      soloterminal: soloterminal,
      tipo: tipo,
    },
    beforeSend: function () {
      let cantidad = $("#loaders .hidden").toArray().length;


      if (cantidad > 0) {
        $("#select_loader").removeClass("hidden");
        $("#num_ganador").addClass("hidden");

      } else if (cantidad == 0) {
        $("#num_ganador").addClass("hidden");
      }
    },
    success: function (data) {
      if (data.length > 0) {

        if (data == 'false') {
          location.href = './index.php?error3=`Sesion Expirada`';
        }
        $("#select_loader").addClass("hidden");
        $("#num_ganador").removeClass("hidden");

        $("#num_ganador").html(data);
      }
    },
  });
}

function extraer_jugada(jugada) {
  let jugada01 = "";
  let inicio = 0;
  for (let index = 0; index < jugada.length; index++) {
    if (jugada.substring(index, index + 1) == "\u00a0") {
      inicio = 1;
      index = index + 1;
    }
    if (inicio == 1) {
      jugada01 = jugada01 + jugada.substring(index, index + 1);
    }
  }
  return jugada01;
}

function btn_premiar() {
  let parametro = $("#num_ganador").val();

  if (datos_sorteos.length > 0 && parametro != "") {
    let parametro = $("#num_ganador").val();
    let nombre_select = $("#num_ganador option:selected").text();
    nombre_select = extraer_jugada(nombre_select);
    let cod_sorteo = datos_sorteos[0]["id"];
    //let ganador = parametro; //$("#num_ganador option:eq(" + parametro + ")").attr("tittle");
    let descripcion = datos_sorteos[0]["descripcion"];
    let fecha = $("#fecha").val();
    let hora = datos_sorteos[0]["fecha"];

    let text_select = $("#num_ganador option:eq(" + parametro + ")").text();

    Swal.fire({
      title: "Estas Seguro que desea Premiar:",
      html:
        "El Sorteo:" +
        datos_sorteos[0]["descripcion"] +
        "<br>" +
        "Con el Ganador: " +
        parametro,
      showDenyButton: true,
      confirmButtonText: "Procesar",
      denyButtonText: `Cancelar`,
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire("Saved!", "", "success");

        let url = "./CargarPremios/Premiar.php";
        $.ajax({
          type: "POST",
          url: url,
          data: {
            cod_sorteo: cod_sorteo,
            ganador: parametro,
            descripcion: nombre_select,
            fecha: fecha,
            hora: hora,
          },
          beforeSend: function () {
            Swal.fire({
              title: "Espere",
              didOpen: () => {
                Swal.showLoading(); //abrir loader
              },
            });
          },
          success: function (data) {
            //$("#num_ganador").html(data);

            if (data > 0) {
              datos_sorteos = [];
              Swal.close(); //cerrar el loader
              consulta_tabla_Carga_de_premios(0);
              const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener("mouseenter", Swal.stopTimer);
                  toast.addEventListener("mouseleave", Swal.resumeTimer);
                },
              });

              Toast.fire({
                icon: "success",
                title: "Premiado",
              });

              $('input[type="text"]').val("");
              $('input[type="number"]').val("");
              $("select").html("");
            } else if (data == 0) {
              Swal.fire({
                icon: "error",
                text: 'Ya se Premio el Sorteo',
              });
            } else if (data == 'false') {
              location.href = './index.php?error3=`Sesion Expirada`';
            }
          },
        });
      } else if (result.isDenied) {
        Swal.close(); //cerrar el loader
      }
    });
  } else {
    Swal.fire({
      icon: "error",
      title: "Error",
    });
  }
}

function btn_anular() {
  modal_tabla_anular_sorteo();

  Swal.fire({
    template: "#my-template",
  });
}

function RemoverDeArray(arr, item) {
  var i = arr.indexOf(item);

  if (i !== -1) {
    arr.splice(i, 1);
  }
}

function Comprobar_session() {
  let url = './php/Comprobar_session.php';
  $.ajax({
    url: url,
    type: 'POST',
    success: function (data) {
      if (data == 'false') {
        location.href = './index.php?error3=`Sesion Expirada`';
      }
    },
  });
}

function Anular_Premiacion(fecha, cod_sorteo, ganador, descripcion) {
  Swal.fire({
    title: "Estas Seguro de Anular?",
    showDenyButton: true,
    confirmButtonText: "Procesar",
    denyButtonText: `Cancelar`,
  }).then((result) => {
    if (result.isConfirmed) {
      let url = "./CargarPremios/Anular_Premiacion.php";
      $.ajax({
        type: "POST",
        url: url,
        data: {
          fecha: fecha,
          cod_sorteo: cod_sorteo,
          ganador: ganador,
          descripcion: descripcion
        },
        beforeSend: function () {
          Swal.fire({
            title: "Espere",
            didOpen: () => {
              Swal.showLoading(); //abrir loader
            },
          });
        },

        success: function (data) {
          if (data == 0) {
            ResultadosDelVendedor_view();
            Swal.close();

            const Toast = Swal.mixin({
              toast: true,
              position: "top-end",
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener("mouseenter", Swal.stopTimer);
                toast.addEventListener("mouseleave", Swal.resumeTimer);
              },
            });

            Toast.fire({
              icon: "success",
              title: "Procesado",
            });
          } else if (data == 1) {
            const Toast = Swal.mixin({
              toast: true,
              position: "top-end",
              showConfirmButton: false,
              timer: 3000,
              timerProgressBar: true,
              didOpen: (toast) => {
                toast.addEventListener("mouseenter", Swal.stopTimer);
                toast.addEventListener("mouseleave", Swal.resumeTimer);
              },
            });

            Toast.fire({
              icon: "error",
              title: "Ocurrio un Error!",
            });
          } else if (data == 'false') {
            location.href = './index.php?error3=`Sesion Expirada`';
          }
        },
      });
    } else if (result.isDenied) {
    }
  });
}

function modal_tabla_anular_sorteo() {
  let url = "./CargarPremios/modal_tabla_anular_sorteo.php";
  $.ajax({
    type: "POST",
    url: url,
    success: function (data) {
      $("#tabla_modal").html(data);
    },
  });
}

function ocultar_mostrar(id_nombre, nombre_original, validar2) {
  let validar_t = $("#" + id_nombre).attr("name");

  if (validar_t == "0") {
    //cerrado
    $("#" + id_nombre).hide("fast");

    $("#" + id_nombre).attr("name", "1");
    /*
        $("#titulo_" + id_nombre).html(
          nombre_original +
            "<svg xmlns='http://www.w3.org/2000/svg' class='inline-block h-4 w-4' fill='none' viewBox='0 0 24 24' stroke='currentColor' stroke-width='2'><path stroke-linecap='round' stroke-linejoin='round' d='M19 9l-7 7-7-7' /></svg> "
        );*/

    $("#titulo_" + id_nombre).html(
      nombre_original +
      "<svg xmlns='http://www.w3.org/2000/svg' class='inline-block h-4 w-4' fill='none' viewBox='0 0 24 24' stroke='currentColor' stroke-width='2'><path stroke-linecap='round' stroke-linejoin='round' d='M19 9l-7 7-7-7' /></svg> "
    );

    if (validar2 == true) {
      sorteo_close.push({
        nombre_id: id_nombre,
        nombre_original: nombre_original,
      });
    }
  } else if (validar_t == "1") {
    if (validar2 == true) {
      sorteo_open.push({
        nombre_id: id_nombre,
        nombre_original: nombre_original,
      });
    }

    $("#" + id_nombre).show("fast");
    $("#" + id_nombre).attr("name", "0");
    $("#titulo_" + id_nombre).html(
      nombre_original +
      "<svg xmlns='http://www.w3.org/2000/svg' class='inline-block h-4 w-4' fill='none' viewBox='0 0 24 24' stroke='currentColor' stroke-width='2'><path stroke-linecap='round' stroke-linejoin='round' d='M5 15l7-7 7 7' /></svg>"
    );
  }
}

function mostrarTodos_sorteos(validar) {
  for (let index = 0; index < sorteo_close.length; index++) {
    let validar_t = $("#" + sorteo_close[index]["nombre_id"]).attr("name");
    if (validar_t == 1) {
      ocultar_mostrar(
        sorteo_close[index]["nombre_id"],
        sorteo_close[index]["nombre_original"],
        validar
      );

    }
  }
}
function ocultarTodos_sorteos(validar) {
  for (let index = 0; index < sorteo_open.length; index++) {
    ocultar_mostrar(
      sorteo_open[index]["nombre_id"],
      sorteo_open[index]["nombre_original"],
      validar
    );



  }

  sorteo_open = [];
}
