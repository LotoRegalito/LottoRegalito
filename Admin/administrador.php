<?php

session_start();

if (isset($_SESSION['data']) == false) {

  header("Location: ./index.php");

  exit();
}

date_default_timezone_set('America/Caracas');





?>



<!DOCTYPE html>

<html lang="es">



<head>

  <meta charset="UTF-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="icon" href="../img/vectorpaint.png">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

  <link rel="stylesheet" href="./css/estilos.css?v=29">



  <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>



  <!---------------------libreria para crear cookies-------------------------------->

  <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>

  <!-------------------------------------------------------------->



  <!--Sweeet Alert---->

  <script src="./js/SweetAlert.js"></script>

  <!-------------------------------------------------------------->



  <!-------------------Tailwind------------------------------->

  <script src="./js/Tailwind.js"></script>

  <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>


  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

  <script src="./js/Tail-WindJS.js"></script>

  <script src="./js/scripts5.js?v=91"></script>

  <style type="text/tailwindcss">

    @layer utilities {

        .content-auto {

          content-visibility: auto;

        }

      }

    </style>

  <!-------------------------------------------------------------->







  <title>Administrador</title>







</head>



<body class='bg-slate-900' onload="Modulo_cargarPremios()">



  <script type="text/javascript">
    $(window).load(function() {

      $(".loader-animarion").fadeOut("slow");

    });

    $(window).focus(function() {

      Comprobar_session();

    });
  </script>









  <div class="loader-animarion" style="display: flex;">



    <div>

    </div>

    <div>

    </div>

    <div>

    </div>







  </div>



  <div class=" md:hidden hidden bg-white w-full lg:flex justify-end p-4">

    <div class="flex gap-3">

      <p class="uppercase gap-1 flex items-center text-xs italic tracking-widest lg:text-xs lg:italic lg: lg:text-gray-900 lg:rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

          <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />

        </svg>

        <?php

        if (!isset($_SESSION['data'])) {

          header("Location: ./index.php");
        } else {

          echo  $_SESSION['data']['usuario'];
        }



        ?>

      <p class="text-gray-500 flex items-center text-sm">

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">

          <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 8.25h15m-16.5 7.5h15m-1.8-13.5l-3.9 19.5m-2.1-19.5l-3.9 19.5" />

        </svg>

        <?php

        if (!isset($_SESSION['data'])) {

          header("Location: ./index.php");
        } else {

          echo  $_SESSION['data']['cod_usuario'];
        }



        ?>

      </p>

      </p>



    </div>

  </div>

  <div class=" md:flex md:flex-row transition-all    lg:flex lg:flex-row lg:h-screen  ">



    <!-------------------------------------------->





    <div id="aside_box" class="hidden lg:block md:block  w-auto  row-span-2 bg-white hover:scale-x-105 transition-all	 ease-in duration-150">





      <div @click="open = !close" class=" ">

        <div @click.away="open = false" class="flex-shrink-0text-gray-700 md:w-auto dark-mode:text-gray-200 dark-mode:bg-gray-800" x-data="{ open: false }">

          <div class="flex flex-row items-center justify-center flex-shrink-0 px-4 py-4">



            <a href="#" class="flex flex-row text-sm font-semibold tracking-widest text-gray-900 rounded-lg lg:text-lg dark-mode:text-white focus:outline-none focus:shadow-outline">

              <img src="../../img/logo.png" alt="logo" class="float-left w-10 h-10">

              <p id="titulo" class="hidden float-left mt-2">Administrador <p class='block float-left mt-2 text-sm font-semibold tracking-widest text-gray-900 lg:hidden md:hidden'></p>

            </a>

            <button id="btn_menu" class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">

              <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">

                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>

                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>

              </svg>

            </button>





          </div>

          <nav :class="{'block': open, 'hidden': !open}" class="mt-3 w-auto flex flex-row flex-grow px-4 pb-4 text-left item-center md:block md:pb-0 md:overflow-y-auto ">









            <button id="" class="hidden block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" onclick=" ">Saldos</button>



            <button id="" class="h-10 block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" onclick="Modulo_cargarPremios(0)">

              <div class="flex flex-row text-left item-center ">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">

                  <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />

                </svg>

                <span class="hidden">Cargar Premios</span>

              </div>

            </button>



            <button id="" class="h-16 block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" onclick="ResultadosDelVendedor_view()">



              <div class="flex flex-row text-left items-center ">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">

                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />

                </svg>

                <span class="hidden">Resultado de los Sorteos</span>

              </div>

            </button>



            <button id="" class="hidden block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" onclick="">Verificador de Ventas</button>



            <button id="" class="hidden block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" onclick="">Robots</button>











            <button id="" class=" h-16 block mt-2 px-4 py-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" onclick="historial_de_acciones_view()">



              <div class="flex gap-2 flex-row text-left items-center ">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />

                </svg>

                <span class="hidden">Historial de Acciones Por Usuario</span>

              </div>

            </button>



            <button id="" class=" h-16 block mt-2 px-4 py-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" onclick="historial_de_acciones_robot_view()">



              <div class="flex gap-2 flex-row text-left items-center ">

                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">

                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />

                </svg>

                <span class="hidden">Historial de Acciones Robots</span>

              </div>

            </button>















            <button id="" onclick="window.location.href ='./logout.php';" class="block px-5 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" onclick="ResultadosDelVendedor_view()">



              <div class="flex flex-row text-left item-center ">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">

                  <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />

                </svg>

                <span class="hidden">Salir</span>

              </div>

            </button>









          </nav>

        </div>

      </div>

    </div>



    <div class="block lg:hidden md:hidden bg-white p-5 ">



      <div id="" class="flex justify-between">

        <!---img box-->

        <div class="">

          <a href="#" class="flex items-center gap-2 flex-row text-sm font-semibold tracking-widest text-gray-900 rounded-lg lg:text-lg dark-mode:text-white focus:outline-none focus:shadow-outline">

            <img src="../../img/logo.png" alt="logo" class="float-left w-10 h-10">

            <p class=" float-left  lg:hidden">Administrador </p>

            <p class="block float-left mt-2 text-sm font-semibold tracking-widest text-gray-900 "></p>

          </a>



        </div>

        <!---menu-->

        <div id="point_menu" onclick="menu_desplegar()" class="flex justify-center items-center">

          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />

          </svg>

        </div>



      </div>



      <script>
        function menu_desplegar() {



          let status = $('#menu_contenido').attr('name');







          if (status == '1') {

            $("#menu_contenido").show("slow");

            // $('#menu_contenido').removeClass('hidden');

            $('#menu_contenido').attr('name', 0);

            $('#point_menu').html("<svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'><path stroke-linecap='round' stroke-linejoin='round' d='M6 18L18 6M6 6l12 12' /></svg>");



            return;

          } else {



            $("#menu_contenido").hide("slow");

            // ('#menu_contenido').addClass('hidden');

            $('#menu_contenido').attr('name', 1);

            $('#point_menu').html("<svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='1.5' stroke='currentColor' class='w-6 h-6'><path stroke-linecap='round' stroke-linejoin='round' d='M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z'></path></svg>");





            return;

          }







        }
      </script>





      <div name='1' id="menu_contenido" class="hidden bg-gray-300 p-2 rounded-lg mt-3">

        <ul>

          <li>

            <button id="" class="h-10 block px-4 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" onclick="Modulo_cargarPremios(0),menu_desplegar()">

              <div class="gap-2 flex flex-row text-left items-center ">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">

                  <path stroke-linecap="round" stroke-linejoin="round" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>

                </svg>

                <span class="block">Cargar Premios</span>

            </button>

          </li>

          <li>

            <button id="" class="h-16 block px-4 py-2  text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" onclick="ResultadosDelVendedor_view(),menu_desplegar()">

              <div class="gap-2 flex flex-row text-left items-center ">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">

                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>

                </svg>

                <span class="block">Resultado de los Sorteos</span>

              </div>

            </button>

          </li>



          <li>

            <button id="" class="h-16 block px-4 py-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" onclick="historial_de_acciones_view()">



              <div class="flex gap-2 flex-row text-left items-center ">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">

                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />

                </svg>

                <span class="">Historial de Acciones Por Usuario</span>

              </div>

            </button>



          </li>



          <li>

            <button id="" class="h-16 block px-4 py-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" onclick="historial_de_acciones_robot_view()">



              <div class="flex gap-2 flex-row text-left items-center ">

                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">

                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />

                </svg>

                <span class="">Historial de Acciones Robots</span>

              </div>

            </button>

          </li>



          <li>

            <button id="" onclick="window.location.href ='./logout.php',menu_desplegar()" class="block px-5 py-2 mt-2 text-sm font-semibold text-gray-900 bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">

              <div class="gap-2 flex flex-row text-left items-center ">

                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">

                  <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>

                </svg>

                <span class="block">Salir</span>

              </div>

            </button>

          </li>



        </ul>

      </div>



    </div>



    <script>
      $("#aside_box").hover(

        function() {

          for (let i = 0; i < $('#aside_box nav button div span ').length; i++) {



            let valor = $('#aside_box nav button div span ')[i];

            valor.className = 'block';



          }

          $('#titulo').removeClass('hidden');

          $('#titulo').addClass('block');



        }

      );

      $("#aside_box").mouseleave(function() {



        for (let i = 0; i < $('#aside_box nav button div span ').length; i++) {



          let valor = $('#aside_box nav button div span ')[i];

          valor.className = 'hidden';

        }



        $('#titulo').removeClass('block');

        $('#titulo').addClass('hidden');

      });
    </script>

    <!-------------------------------------------->

    <div id="Modulo_principal" class="transition-all col-start-2 col-end-8 row-span-2 p-5 bg-slate-900 w-full">









    </div>



  </div>





</body>