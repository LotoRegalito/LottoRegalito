<!DOCTYPE html>

<html lang="es" data-theme="cmyk">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link rel="icon" href="../img/logo-color-solo.png">

    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.5.1/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <script src="../js/index.js?v=8"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>



    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/index.css">

    <script>
        tailwind.config = {

            theme: {

                extend: {

                    fontFamily: {

                        sans: ['Inter', 'sans-serif'],

                    },

                }

            }

        }
    </script>

    <title>Resultados de los Sorteos</title>

</head>



<script>
    $(window).on('load', function() {

        console.log('listo');

        //  $("#loader").fadeOut("slow");

    });
</script>


<style>
    .lds-ring {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
    }

    .lds-ring div {
        box-sizing: border-box;
        display: block;
        position: absolute;
        width: 64px;
        height: 64px;
        margin: 8px;
        border: 8px solid #44ADEE;
        border-radius: 50%;
        animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
        border-color: #44ADEE transparent transparent transparent;
    }

    .lds-ring div:nth-child(1) {
        animation-delay: -0.45s;
    }

    .lds-ring div:nth-child(2) {
        animation-delay: -0.3s;
    }

    .lds-ring div:nth-child(3) {
        animation-delay: -0.15s;
    }

    @keyframes lds-ring {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>

<body class="[ bg-[#197291] h-full ] ">



    <!--  
    <div id="loader" class="fixed top-0 left-0 w-screen h-screen flex items-center justify-center bg-white   z-50">
        <div class="loader">

            Página Insolvente
           

              <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
         

        </div>
    </div>
   --------->
    <div class="navbar bg-base-100 z-20">
        <div class="navbar-start">
            <div class="[ dropdown ] [ md:hidden ] [ lg:hidden ]">
                <label tabindex="0" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </label>
                <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a href="../Afiche/index.html">Afiche HD</a></li>
                    <li><a href="../#">Contactanos</a></li>
                </ul>
            </div>
            <a href="../" class="btn btn-ghost normal-case text-xl">
                <img src="../img/logo-color.png" class="w-20">
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">

            </ul>
        </div>
        <div class="[ navbar-end    gap-3 ] [ md:flex ] [ lg:flex ] ">
            <a href="../Resultados/" class="[ btn btn-primary text-white ] [ md:flex ] [ lg:flex ]"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                    <path fill-rule="evenodd" d="M4.5 2A1.5 1.5 0 003 3.5v13A1.5 1.5 0 004.5 18h11a1.5 1.5 0 001.5-1.5V7.621a1.5 1.5 0 00-.44-1.06l-4.12-4.122A1.5 1.5 0 0011.378 2H4.5zm2.25 8.5a.75.75 0 000 1.5h6.5a.75.75 0 000-1.5h-6.5zm0 3a.75.75 0 000 1.5h6.5a.75.75 0 000-1.5h-6.5z" clip-rule="evenodd" />
                </svg>
                Ver Resultados</a>
            <a href="../Afiche/" class="[ btn btn-primary text-white hidden ] [ md:flex ] [ lg:flex ]"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                    <path d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625z" />
                    <path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z" />
                </svg>

                Afiche HD</a>
            <a href="../#Contactanos" class="[ btn btn-primary text-white hidden ] [ md:flex ] [ lg:flex ]"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z" clip-rule="evenodd" />
                </svg>

                Contactanos</a>
        </div>
    </div>


    <section data-aos="fade-up" class="px-2 sm:px-32 py-2.5 border-gray-200  aos-init aos-animate">

        <div class="rounded-lg flex justify-between flex-col gap-5 px-5 shadow-lg bg-white  ">

            <section class="border-b border-gray-200  mt-5 border-gray-200  font-bold   rounded-md py-5 flex justify-between">

                <span style="font-family: 'Roboto', sans-serif;" class=" lg:text-3xl sm:text-2xl text-xl self-center    whitespace-nowrap text-black">

                    Sorteos

                    <input type="date" class="rounded-lg  border-gray-300   text-black  text-center " value="<?php echo date("Y-m-d"); ?>" id="fecha">

                </span>

                <a href="../ResultadosDeLaSemana/" class="[ btn btn-active ] [ md:flex ] [ lg:flex ]">Por Semana</a>



            </section>



            <script>
                async function show_result(id_sorteo) {



                    $('#resultados').html(`<div class="flex py-5 justify-center text-center">

               <div role="status">

                   <svg class="inline mr-2 w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">

                       <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>

                       <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>

                   </svg>

                   <span class="">Cargando...</span>

               </div>

           </div>`);

                    $('#resultados').removeClass('grid');
                    try {
                        let data = await consutlar_resultados_por_sorteo(id_sorteo); //* Consultamos la Api
                        data = JSON.parse(data);
                        if (data.length == 0) { //* Si no  Obtenemos Ningun Resultado
                            $('#resultados').html(`<div class="flex py-5 justify-center text-center"><div role="status"><span class="">Sin Resultados</span></div></div>`);
                            $('#resultados').removeClass('grid');
                            return;

                        }
                        //* obtenemos el Nombre de la Carpeta Segun el Codgio Del Sorteo
                        let img_src = '';
                        if (id_sorteo == '1097') {
                            img_src = 'lottoregalito_compress';
                        }

                        $('#resultados').html('');
                        $('#resultados').addClass('grid');
                        for (let i = 0; i < data.length; i++) { //* Iteramos en Cada elementos Del Array para Colocar Los Resultados En Pantalla
                            //el nombre de las imagenes vienen con un espacio emtonces con el split se quita y se resuelve el problema  
                            let ganador = data[i].ganador; //* obtenemos el valor 
                            ganador = ganador.split(' '); //* dividimos
                            cadena = ganador[0]; //* obtenemos el id del Ganador

                            if (cadena.length == 1 || cadena.length == 2) { //* si la cadena contiene 1 o 2 digitos , colocamos de manera directa los id para las imagenes
                                $('#resultados').append(`<div   class=" relative max-w-md mx-auto md:max-w-2xl mt-6 min-w-0 break-words bg-white/10 w-full mb-6 shadow-lg rounded-xl mt-16"><div class="px-6"> <div class="flex flex-wrap justify-center"> <div class="w-full flex justify-center"> <div class="relative"> <img loading="lazy" src="../img/${img_src}/${cadena}.png" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]"> </div> </div> <div class="w-full text-center mt-20"> </div> </div> <div class="text-center mt-2"> <h3 class="text-2xl  font-bold text-primary leading-normal mb-1">${data[i].ganador} ${data[i].descripcion}</h3> <div class="text-base mt-0 mb-2  text-slate-500 font-bold uppercase"> ${data[i].sorteo} </div> </div> </div> </div>`);
                            }
                            if (cadena.length == 3 || cadena.length == 4) {
                                //* si la cadena contiene 3 digitos ,se le agrega un 0 al valor que le haga falta para complir con la sintaxis [00-00]
                                //* si la cadena contiene 4 digitos, se divide el valor para obtener los 2 primeros y los 2 uktimos digitos para colocarlos en url de la imagen cumpliendo con la sintaxys [00-00] 
                                let separar1 = cadena.substr(-4, 2);
                                let separar2 = cadena.substr(2, 3);
                                if (separar1.length == 1) {
                                    separar1 = "0" + separar1;
                                }
                                if (separar2.length == 1) {
                                    separar2 = "0" + separar2;
                                }

                                $('#resultados').append(`<div   class=" relative max-w-md mx-auto md:max-w-2xl mt-6 min-w-0 break-words bg-white/10 w-full mb-6 shadow-lg rounded-xl mt-16"><div class="px-6"> <div class="flex flex-wrap justify-center"> <div class="w-full flex justify-center"> <div class="relative"> <img loading="lazy" src="../img/${img_src}/${separar1+"-"+separar2}.png" class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px]"> </div> </div> <div class="w-full text-center mt-20"> </div> </div> <div class="text-center mt-2"> <h3 class="text-2xl  font-bold text-primary leading-normal mb-1">${data[i].ganador} ${data[i].descripcion}</h3> <div class="text-base mt-0 mb-2  text-slate-500 font-bold uppercase"> ${data[i].sorteo} </div> </div> </div> </div>`);
                            }
                        }
                        return;
                    } catch (error) {
                        $('#resultados').html(`<div class="flex py-5 justify-center text-center"><div role="status"><span class="">Sin Resultados ...</span></div></div>`);
                        return;
                    }
                }
            </script>

            <div id="resultados" class="grid grid-flow-row gap-8 text-neutral-600 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 ">
            </div>

        </div>


    </section>



    <!----

    <footer class="p-4 mt-3 bg-slate-800 rounded-lg shadow md:px-6 md:py-8 dark:bg-gray-900">

        <div class="md:flex md:justify-between">

            <div class="mb-6 md:mb-0">

                <a href="#" class="flex items-center">

                    <svg id="svg_nav" xmlns="http://www.w3.org/2000/svg" class="mr-3 h-6 sm:h-9 fill-white" viewBox="0 0 162.096 29" width="162.096" height="29">

                        <g fill="#E96B00" color="#E96B00" transform="translate(0, 0) scale(0.29)"><svg width="100.0" height="100.0" x="0.0" y="0.0" viewBox="0 0 100 100">

                                <g transform="translate(0,-952.36218)">

                                    <g transform="translate(5.9921265,962.35824)">

                                        <path class="fill-white" d="M 9.8149605,0 C 9.035433,0.07086614 8.3267716,0.67322834 8.0787401,1.4173228 L 0.10629921,27.283464 C 0.03543307,27.496063 0,27.673228 0,27.885827 l 0,50.137795 c 0,1.027559 0.9566929,1.984252 1.9842519,1.984252 l 76.0039361,0 c 0.744095,0 1.452756,-0.46063 1.807087,-1.133859 2.728346,-5.562992 5.598425,-11.232283 7.972441,-15.980315 0.141732,-0.283464 0.212598,-0.566929 0.248031,-0.885826 l 0,-59.988189 C 88.015747,0.95669291 87.059054,0 85.996062,0 L 9.8149605,0 z m 1.6653545,4.003937 71.787401,0 -6.732284,22.003937 -71.8936998,0 z m 32.527559,4.9251968 c -12.011811,0 -21.826772,2.7637792 -21.826772,6.0944882 0,3.330709 9.814961,6.023622 21.826772,6.023622 11.976377,0 21.755905,-2.692913 21.755905,-6.023622 0,-3.330709 -9.779528,-6.0944882 -21.755905,-6.0944882 z m 0,2.1259842 c 7.866141,0 14.173228,1.771654 14.173228,3.968504 0,2.161417 -6.307087,3.933071 -14.173228,3.933071 -7.901575,0 -14.244095,-1.771654 -14.244095,-3.933071 0,-2.19685 6.34252,-3.968504 14.244095,-3.968504 z m 40.003936,4.216535 0,46.275591 -4.003937,8.007874 0,-41.314961 z m -80.007873,14.740158 71.999999,0 0,32.066929 c -0.744094,-0.992126 -1.629921,-1.84252 -2.65748,-2.515748 0.425197,-1.098425 0.637795,-2.30315 0.637795,-3.543307 0,-5.527559 -4.5,-10.027559 -9.992126,-10.027559 -2.338582,0 -4.464567,0.81496 -6.165354,2.161417 -0.885827,-4.606299 -4.96063,-8.149606 -9.814961,-8.149606 -2.976377,0 -5.669291,1.311023 -7.51181,3.401575 -1.736221,-1.488189 -4.03937,-2.409449 -6.484252,-2.409449 -3.543307,0 -6.661418,1.877952 -8.468504,4.677165 C 24.448819,45.248031 23.244094,45 22.003937,45 c -5.492126,0 -9.992126,4.5 -9.992126,9.992126 0,1.062992 0.141732,2.090551 0.46063,3.047244 -0.177166,0 -0.318898,-0.03543 -0.46063,-0.03543 -3.2598426,0 -6.2007874,1.594488 -8.007874,4.03937 l 0,-32.031496 z M 48.01181,44.007874 c 3.330709,0 5.988189,2.65748 5.988189,5.988189 0,3.366141 -2.65748,6.023622 -5.988189,6.023622 -3.366141,0 -6.023621,-2.657481 -6.023621,-6.023622 0,-3.330709 2.65748,-5.988189 6.023621,-5.988189 z M 34.015748,45 c 1.771653,0 3.366141,0.779527 4.464567,2.019685 -0.318898,0.92126 -0.496063,1.948819 -0.496063,2.976378 0,1.559055 0.389763,3.011811 1.027559,4.322834 -1.062993,1.629922 -2.905512,2.692914 -4.996063,2.692914 -3.366142,0 -6.023622,-2.657481 -6.023622,-5.988189 C 27.992126,47.65748 30.649606,45 34.015748,45 z m -12.011811,4.003937 c 0.744094,0 1.488189,0.141732 2.161417,0.425197 -0.106299,0.496063 -0.177165,1.027559 -0.177165,1.594488 0,2.799212 1.204724,5.350393 3.11811,7.15748 -1.062992,1.700787 -2.940945,2.834646 -5.102362,2.834646 -3.330709,0 -5.988189,-2.657481 -5.988189,-6.023622 0,-3.330709 2.65748,-5.988189 5.988189,-5.988189 z m 41.988188,0.992126 c 3.330709,0 6.023622,2.65748 6.023622,6.023622 0,3.330708 -2.692913,5.988189 -6.023622,5.988189 -3.330708,0 -5.988189,-2.657481 -5.988189,-5.988189 0,-3.366142 2.657481,-6.023622 5.988189,-6.023622 z M 41.492126,57.57874 c 0.425196,0.354331 0.850393,0.673228 1.311023,0.956693 -1.452756,0.496063 -2.728346,1.311023 -3.791338,2.338582 -0.318898,-0.283464 -0.637796,-0.531496 -0.956693,-0.779527 1.311023,-0.602362 2.515748,-1.452756 3.437008,-2.515748 z m 12.791338,0.744094 c 1.027559,4.216536 4.748031,7.440945 9.212598,7.653544 -1.098425,1.240157 -2.692913,2.019685 -4.5,2.019685 -3.330708,0 -5.988189,-2.657481 -5.988189,-5.988189 0,-1.417323 0.496063,-2.657481 1.275591,-3.68504 z m -42.271653,3.68504 c 0,3.791338 2.161417,7.122047 5.31496,8.822834 -1.027559,1.877953 -3.011811,3.188977 -5.31496,3.188977 -3.3661418,0 -6.0236221,-2.657481 -6.0236221,-6.023622 0,-3.330709 2.6574803,-5.988189 6.0236221,-5.988189 z m 19.984252,0 c 1.913385,0 3.614173,0.885826 4.712598,2.267716 C 36.248031,65.444881 36,66.685039 36,67.996063 c 0,1.311023 0.248031,2.551181 0.708661,3.685039 -1.098425,1.417323 -2.763779,2.338583 -4.712598,2.338583 -2.30315,0 -4.322835,-1.311024 -5.314961,-3.188977 3.153543,-1.700787 5.314961,-5.031496 5.314961,-8.822834 z m 13.996062,0 c 1.133859,0 2.161418,0.318897 3.082678,0.850393 0.177165,2.374016 1.240157,4.570866 2.834645,6.165355 -0.496063,2.870078 -2.940945,4.996063 -5.917323,4.996063 -3.330708,0 -5.988188,-2.657481 -5.988188,-6.023622 0,-3.330709 2.65748,-5.988189 5.988188,-5.988189 z m 25.192914,0.921259 c 1.700787,1.02756 2.799212,2.905512 2.799212,5.06693 0,3.366141 -2.65748,6.023622 -5.988189,6.023622 -2.161417,0 -4.03937,-1.133859 -5.102362,-2.834646 2.728347,-1.133858 4.818898,-3.472441 5.669291,-6.307087 0.992126,-0.496063 1.877953,-1.169291 2.622048,-1.948819 z m -55.098425,0.1063 c 1.665354,1.240157 3.720472,1.984252 5.917323,1.984252 2.19685,0 4.251968,-0.744095 5.917323,-1.984252 -0.496063,2.834645 -2.940945,4.96063 -5.917323,4.96063 -2.976378,0 -5.42126,-2.125985 -5.917323,-4.96063 z m 39.366141,8.291338 C 56.515747,71.716535 57.649606,72 58.85433,72 c 0.673228,1.594488 1.807087,2.976378 3.188976,4.003937 l -10.027559,0 c 1.559056,-1.169292 2.76378,-2.799213 3.437008,-4.677166 z M 21.188976,71.929133 C 21.437008,71.964566 21.720472,72 22.003937,72 c 0.283464,0 0.531496,-0.03543 0.81496,-0.07087 0.708662,1.629922 1.807087,3.047245 3.22441,4.074804 l -8.07874,0 c 1.381889,-1.027559 2.515748,-2.444882 3.224409,-4.074804 z M 4.003937,73.984252 c 0.5669291,0.779527 1.2401574,1.452755 2.019685,2.019685 l -2.019685,0 z m 71.999999,0 0,2.019685 -2.019685,0 c 0.744095,-0.56693 1.452756,-1.240158 2.019685,-2.019685 z M 39.011811,75.11811 c 0.318897,0.35433 0.673228,0.602362 1.062992,0.885827 l -2.125985,0 c 0.354331,-0.283465 0.708662,-0.531497 1.062993,-0.885827 z" style="" fill="currentColor" fill-opacity="1" fill-rule="nonzero" stroke="none"></path>

                                    </g>

                                </g>

                            </svg></g>

                        <line x1="41" y1="1" x2="41" y2="28" stroke-linecap="round"></line>

                        <path class="fill-dark dark:fill-white" fill-rule="nonzero" d="M10.54 15.96L10.54 18.94L5.45 18.94Q2.57 18.94 1.28 17.82Q0 16.70 0 14.18L0 14.18L0 1.85L3.34 1.85L3.34 14.18Q3.34 15.19 3.79 15.58Q4.25 15.96 5.45 15.96L5.45 15.96L10.54 15.96ZM20.38 12.74L20.38 12.74L20.38 11.50Q20.38 9.72 19.86 8.78Q19.34 7.85 17.71 7.85L17.71 7.85Q15.07 7.85 15.07 11.40L15.07 11.40L15.07 12.65Q15.07 16.46 17.71 16.46L17.71 16.46Q19.42 16.46 19.94 15.19L19.94 15.19Q20.38 14.18 20.38 12.74ZM23.50 12.02L23.50 12.02Q23.50 16.46 21.82 17.98L21.82 17.98Q20.40 19.27 17.71 19.27L17.71 19.27Q14.28 19.27 13.08 17.26L13.08 17.26Q11.95 15.41 11.95 12.02L11.95 12.02Q11.95 8.86 13.08 7.06L13.08 7.06Q14.33 5.04 17.63 5.04Q20.93 5.04 22.21 6.80Q23.50 8.57 23.50 12.02ZM31.85 16.30L31.85 18.94L29.90 18.94Q28.13 18.94 27.20 17.88Q26.28 16.82 26.28 15.36L26.28 15.36L26.28 8.16L24.96 8.16L24.96 5.78L26.28 5.78L26.28 3.10L29.40 3.10L29.40 5.78L31.61 5.78L31.61 8.16L29.40 8.16L29.40 15.17Q29.40 16.30 30.48 16.30L30.48 16.30L31.85 16.30ZM41.86 12.74L41.86 12.74L41.86 11.50Q41.86 9.72 41.34 8.78Q40.82 7.85 39.19 7.85L39.19 7.85Q36.55 7.85 36.55 11.40L36.55 11.40L36.55 12.65Q36.55 16.46 39.19 16.46L39.19 16.46Q40.90 16.46 41.42 15.19L41.42 15.19Q41.86 14.18 41.86 12.74ZM44.98 12.02L44.98 12.02Q44.98 16.46 43.30 17.98L43.30 17.98Q41.88 19.27 39.19 19.27L39.19 19.27Q35.76 19.27 34.56 17.26L34.56 17.26Q33.43 15.41 33.43 12.02L33.43 12.02Q33.43 8.86 34.56 7.06L34.56 7.06Q35.81 5.04 39.11 5.04Q42.41 5.04 43.69 6.80Q44.98 8.57 44.98 12.02ZM65.14 9.74L65.14 18.94L62.02 18.94L62.02 10.42Q62.02 9.14 61.72 8.64Q61.42 8.14 60.67 8.14L60.67 8.14L57.86 9.31L57.86 18.94L54.74 18.94L54.74 10.42Q54.74 8.14 53.16 8.14L53.16 8.14L50.59 9.31L50.59 18.94L47.47 18.94L47.47 5.23L49.80 5.23L50.52 6.86L54.12 5.09Q55.99 5.09 56.95 6.91L56.95 6.91L61.42 5.09Q63.29 5.09 64.21 6.35Q65.14 7.61 65.14 9.74L65.14 9.74ZM77.93 5.14L77.93 18.94L75.84 18.94L74.88 17.28L71.54 19.08Q68.76 19.08 67.80 17.06L67.80 17.06Q67.32 16.08 67.14 14.94Q66.96 13.80 66.96 12.56Q66.96 11.33 66.98 10.74Q67.01 10.15 67.10 9.37Q67.20 8.59 67.38 8.06Q67.56 7.54 67.90 6.97Q68.23 6.41 68.71 6.07L68.71 6.07Q69.79 5.33 71.52 5.33L71.52 5.33L74.81 5.33L77.93 5.14ZM72.43 15.79L74.81 14.57L74.81 8.14L72.43 8.14Q71.11 8.14 70.60 9.14Q70.08 10.15 70.08 12.16Q70.08 14.16 70.57 14.98Q71.06 15.79 72.43 15.79L72.43 15.79ZM91.94 9.74L91.94 18.94L88.82 18.94L88.82 10.18Q88.82 9 88.34 8.57Q87.86 8.14 87 8.14L87 8.14L84.19 9.31L84.19 18.94L81.07 18.94L81.07 5.23L83.40 5.23L84.12 6.86L87.96 5.09Q89.57 5.09 90.76 6.28Q91.94 7.46 91.94 9.74L91.94 9.74ZM96.65 0Q97.78 0 98.11 0.35Q98.45 0.70 98.45 1.81Q98.45 2.93 98.10 3.28Q97.75 3.62 96.64 3.62Q95.52 3.62 95.17 3.26Q94.82 2.90 94.82 1.80Q94.82 0.70 95.17 0.35Q95.52 0 96.65 0ZM98.18 5.74L98.18 18.94L95.06 18.94L95.06 5.74L98.18 5.74ZM111.10 5.14L111.10 18.94L109.01 18.94L108.05 17.28L104.71 19.08Q101.93 19.08 100.97 17.06L100.97 17.06Q100.49 16.08 100.31 14.94Q100.13 13.80 100.13 12.56Q100.13 11.33 100.15 10.74Q100.18 10.15 100.27 9.37Q100.37 8.59 100.55 8.06Q100.73 7.54 101.06 6.97Q101.40 6.41 101.88 6.07L101.88 6.07Q102.96 5.33 104.69 5.33L104.69 5.33L107.98 5.33L111.10 5.14ZM105.60 15.79L107.98 14.57L107.98 8.14L105.60 8.14Q104.28 8.14 103.76 9.14Q103.25 10.15 103.25 12.16Q103.25 14.16 103.74 14.98Q104.23 15.79 105.60 15.79L105.60 15.79Z" transform="translate(51, 5.032)"></path>

                    </svg>



                </a>

            </div>

            <div class="">





                <div class="">

                    <h2 class="text-center mb-6 text-sm font-semibold  uppercase text-white">Horarios De La Gran Ruleta

                    </h2>

                    <ul class="text-gray-400">

                        <li class="mb-4">

                            <p class="text-center  break-words">09:30 AM - 10:30 AM - 11:30 AM</p>

                            <p class="text-center  break-words"> 12:30 PM - 01:30 PM - 02:30 PM</p>

                            <p class="text-center  break-words">03:30 PM - 04:30 PM - 05:30 PM</p>

                            <p class="text-center  break-words">06:30 PM - 07:30 PM</p>

                        </li>

                    </ul>

                </div>









            </div>

            <div class="">

                <h2 class="text-center mb-6 text-sm font-semibold  uppercase text-white">Horarios De La Granjita

                </h2>

                <ul class="text-gray-400">

                    <li class="mb-4">

                        <p class="text-center  break-words">09:00 AM - 10:00 AM - 11:00 AM</p>

                        <p class="text-center  break-words"> 12:00 PM - 01:00 PM - 02:00 PM</p>

                        <p class="text-center  break-words">03:00 PM - 04:00 PM - 05:00 PM</p>

                        <p class="text-center  break-words">06:00 PM - 07:00 PM</p>

                    </li>

                </ul>

            </div>



            <div class="">

                <h2 class="text-center mb-6 text-sm font-semibold  uppercase text-white">Horarios De LottoActivo

                </h2>

                <ul class="text-gray-400">

                    <li class="mb-4">

                        <p class="text-center  break-words">09:00 AM - 10:00 AM - 11:00 AM</p>

                        <p class="text-center  break-words"> 12:00 PM - 01:00 PM - 02:00 PM</p>

                        <p class="text-center  break-words">03:00 PM - 04:00 PM - 05:00 PM</p>

                        <p class="text-center  break-words">06:00 PM - 07:00 PM</p>

                    </li>

                </ul>

            </div>

        </div>

        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />

        <span class="block text-sm text-gray-400 sm:text-center dark:text-gray-400">© 2022 <a href="#" class="hover:underline">Lotomania</a>. Todos los Derechos Reservados. Solo para mayores de 18 años

        </span>

    </footer>

--->



</body>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
    // A $( document ).ready() block.
    $(document).ready(function() {
        AOS.init();
        show_result(`1097`);
        $("#sorteos > button").click(function() {



            $("#sorteos > button").removeClass("border-white text-white bg-white/10 selected ");

            $("#sorteos > button").addClass("text-slate-500  ");

            $(this).removeClass("text-slate-500 text-black");

            $(this).addClass("border-white text-white  bg-white/10 text-white selected ");

        });


        //al cambiar la fecha consulta el sorteo previamente seleccionado
        $("#fecha").change(function() {
            show_result(`1097`);
        });

        document.querySelectorAll("[class='flex flex-row gap-2 w-full overflow-y-auto'] > button")[0].click();
    });
</script>



</html>