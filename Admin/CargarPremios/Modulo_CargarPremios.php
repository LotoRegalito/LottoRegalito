<?php

date_default_timezone_set('America/Caracas');

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>




<body>

    <div class=" px-4 py-4 bg-white shadow-lg rounded-lg overflow-hidden h-full ">

        <h1 class="text-gray-500 text-lg text-center border-b border-gray-200 mb-5 ">Cargar Premios</h1>
        <div class="lg:flex lg:flex-row  flex flex-col gap-2">

            <div class="w-full">
                <h1 class="text-gray-500 text-lg text-center bg-blue-500 text-white ">Sorteo</h1>
                <div class=" w-full flex p-2 ">
                    <div class="mt-9 w-full p-2 border-r border-gray-100 flex justify-center">
                        <div>
                            <h3 class="inline-block">Fecha:</h3>
                            <input type="date" value="<?php echo date("Y-m-d");  ?>" id="fecha" class="lg:w-auto text-center border border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 ring-blue-200" id="fecha">

                            <button class="lg:w-full w-full p-2 my-2 bg-blue-400 text-white rounded-full focus:outline-none focus:ring-2 ring-blue-200 hover:bg-blue-500" id='btn_actualizar' onclick="consulta_tabla_Carga_de_premios(1)">Actualizar</button>
                        </div>
                    </div>


                </div>
                <div class=" contenedor max-h-96">

                    <div class="w-full flex justify-center lg:m-0 mb-2 " id="loader_tabla">
                        <div class="hidden" id="loader_v">

                            <svg class=" animate-spin -ml-1 mr-3 h-5 w-5 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                        </div>
                    </div>


                    <div id="tabla" class=" w-full hidden ">




                    </div>
                </div>
            </div>
            <!------------------------------------------------------------------------------------------------------------------------------->



            <div class="w-full ">
                <h1 id="datos_sorteo" class="text-gray-500 text-lg text-center bg-blue-500 text-white">Datos del Sorteo</h1>


                <div class="lg:m-0 mt-3">

                    <div class="w-full ">
                        <label class="flex   text-sm justify-center items-center content-between">
                            <span class="text-gray-700 w-1/4  ">
                                Codigo Sorteo:
                            </span>
                            <div class="opacity-75 relative text-gray-500   w-3/4 ">
                                <input id="cod_sorteo" type="number" disabled="" value="" id="cod_Agencia" class="border border-gray-200  rounded-md  block w-full pl-10 mt-1 text-sm text-black      focus:outline-none  form-input" required="">
                                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                                    </svg>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w-full ">
                        <label class="flex mt-3 text-sm justify-center items-center content-between">
                            <span class="text-gray-700 w-1/4  ">
                                Nombre Sorteo:
                            </span>
                            <div class="opacity-75 relative text-gray-500 focus-within:text-purple-600  w-3/4 ">
                                <input id="nomb_sorteo" type="text" disabled="" value="" id="cod_Agencia" class="border border-gray-200  rounded-md  block w-full pl-10 mt-1 text-sm text-black     focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" required="">
                                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                                    </svg>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w-full ">
                        <label class="flex mt-3 text-sm justify-center items-center content-between">
                            <span class="text-gray-700 w-1/4  ">
                                Tipo Sorteo:
                            </span>
                            <div class="opacity-75 relative text-gray-500 focus-within:text-purple-600  w-3/4 ">
                                <input id="tipo_sorteo" type="text" disabled="" value="" id="cod_Agencia" class="border border-gray-200  rounded-md  block w-full pl-10 mt-1 text-sm text-black     focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" required="">
                                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                                    </svg>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w-full ">
                        <label class="flex mt-3 text-sm justify-center items-center content-between">
                            <span class="text-gray-700 w-1/4  ">
                                Cierre Sorteo:
                            </span>
                            <div class="opacity-75 relative text-gray-500 focus-within:text-purple-600  w-3/4 ">
                                <input id="cierre_sorteo" type="text" disabled="" value="" id="cod_Agencia" class="border border-gray-200  rounded-md  block w-full pl-10 mt-1 text-sm text-black     focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input" required="">
                                <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                                    </svg>
                                </div>
                            </div>
                        </label>
                    </div>

                    <div class="w-full ">




                        <label id="caja_contenedora_select_ganador" class=" flex mt-3 text-sm justify-center items-center content-between">
                  
                            <span class="text-gray-700 w-1/4  ">
                               Ganador:
                            </span>
                            <div class=" relative text-gray-500   w-auto ">
                                <select class=" w-full text-black  text-center border border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 ring-blue-200" id="num_ganador">
                                    <div class="absolute inset-y-0 flex items-center ml-3 pointer-events-none mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                                        </svg>
                                    </div>
                            </div>
                        </label>



                        </select>
                        <div id="loaders">
                            <button id="select_loader" class=" hidden w-48 text-blue-500 text-center border border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 ring-blue-200 flex justify-center cursor-default">
                                <svg class=" animate-spin -ml-1 mr-3 h-5 w-5 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>

                            </button>
                        </div>

                    </div>
                </div>
                <div class="w-full ">

                    <!--<h3 class="text-sm mt-5" id="cierre_sorteo"><input type="radio" id="">Premiar Masivo Manualmente (Para Fechas Anteriores)</h3>--->

                    <div class="flex flex-col gap-1 mt-3">
                        <button class="  order-2      lg:w-full w-full p-2 my-2 bg-red-400 text-white rounded-full focus:outline-none focus:ring-2 ring-blue-200 hover:bg-red-500" onclick="ResultadosDelVendedor_view()">Anular Premiacion</button>
                        <button class=" order-1 lg:w-full w-full p-2 my-2 bg-green-400 text-white rounded-full focus:outline-none focus:ring-2  hover:bg-green-500 transition-colors" onclick="btn_premiar()">Premiar</button>
                    </div>



                </div>


            </div>
        </div>

    </div>

</body>

</html>




<template id="my-template">

    <swal-html>


        <h1 class="text-gray-500 text-lg text-center border-b border-gray-200 mb-5 ">Anular Sorteo</h1>
        <div class='mt-5 '>





            <div class='flex mt-2  '>
                <div class='w-48'>
                    <p class='inline-block'>Filtrar Fecha</p>
                </div>
                <div class='w-full'>
                    <input type="date" value="<?php echo date("Y-m-d");  ?>" class="w-full text-center border border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 ring-blue-200">
                </div>
            </div>




            <div class=" contenedor max-h-96 mt-2">

                <table id="tabla_modal" class="w-full ">



                </table>
            </div>


        </div>

    </swal-html>

    <swal-param name="allowEscapeKey" value="false" />
    <swal-param name="customClass" value='{ "popup": "my-popup" }' />
</template>



<script>
    $('#btn_actualizar').click(function() {


        $('input[type="text"]').val('');
        $('input[type="number"]').val('');
        $('select').html('');
    });


    $('#fecha').change(function() {


        $('input[type="text"]').val('');
        $('input[type="number"]').val('');
        $('select').html('');
    });
</script>


<script>
    consulta_tabla_Carga_de_premios();
</script>