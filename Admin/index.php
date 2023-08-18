<?php

//Comprobacion si si existe una session activa

session_start();

if (isset($_SESSION['data']) == true) {

    header("Location: administrador.php");

    exit();
}

date_default_timezone_set('America/Caracas');

?>



<!DOCTYPE html>

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Entrar Master</title>


    <link rel="icon" href="../img/vectorpaint.png">

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <!---------------------libreria para crear cookies-------------------------------->

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>

    <!-------------------------------------------------------------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

    <style>
        .loader-animarion {

            display: flex;

            justify-content: center;

            align-self: center;

            margin: 0 auto;

            background: white;

            width: 100vw;

            height: 100vh;

            z-index: 100;

            position: fixed;

        }



        .loader-animarion>div {



            width: 1.6rem;

            height: 1.6rem;

            margin: 400px .5rem;

            background: #29A7DF;

            border-radius: 50%;

            animation: loader-animarion .6s infinite alternate;



        }



        @keyframes loader-animarion {

            to {

                opacity: .1;

                transform: translate3d(0, -1rem, 0);

            }

        }



        .loader-animarion>div:nth-child(2) {



            animation-delay: .2s;



        }



        .loader-animarion>div:nth-child(3) {



            animation-delay: .3s;



        }



        .slideInLeft {

            -webkit-animation-name: slideInLeft;

            animation-name: slideInLeft;

            -webkit-animation-duration: 1s;

            animation-duration: 1s;

            -webkit-animation-fill-mode: both;

            animation-fill-mode: both;

        }



        @-webkit-keyframes slideInLeft {

            0% {

                -webkit-transform: translateX(-100%);

                transform: translateX(-100%);

                visibility: visible;

            }



            100% {

                -webkit-transform: translateX(0);

                transform: translateX(0);

            }

        }



        @keyframes slideInLeft {

            0% {

                -webkit-transform: translateX(-100%);

                transform: translateX(-100%);

                visibility: visible;

            }



            100% {

                -webkit-transform: translateX(0);

                transform: translateX(0);

            }

        }



        .slideInRight {

            -webkit-animation-name: slideInRight;

            animation-name: slideInRight;

            -webkit-animation-duration: 1s;

            animation-duration: 1s;

            -webkit-animation-fill-mode: both;

            animation-fill-mode: both;

        }



        @-webkit-keyframes slideInRight {

            0% {

                -webkit-transform: translateX(100%);

                transform: translateX(100%);

                visibility: visible;

            }



            100% {

                -webkit-transform: translateX(0);

                transform: translateX(0);

            }

        }



        @keyframes slideInRight {

            0% {

                -webkit-transform: translateX(100%);

                transform: translateX(100%);

                visibility: visible;

            }



            100% {

                -webkit-transform: translateX(0);

                transform: translateX(0);

            }

        }



        .fadeInRight {

            -webkit-animation-name: fadeInRight;

            animation-name: fadeInRight;

            -webkit-animation-duration: 1s;

            animation-duration: 1s;

            -webkit-animation-fill-mode: both;

            animation-fill-mode: both;

        }



        @-webkit-keyframes fadeInRight {

            0% {

                opacity: 0;

                -webkit-transform: translate3d(100%, 0, 0);

                transform: translate3d(100%, 0, 0);

            }



            100% {

                opacity: 1;

                -webkit-transform: none;

                transform: none;

            }

        }



        @keyframes fadeInRight {

            0% {

                opacity: 0;

                -webkit-transform: translate3d(100%, 0, 0);

                transform: translate3d(100%, 0, 0);

            }



            100% {

                opacity: 1;

                -webkit-transform: none;

                transform: none;

            }

        }



        .zoomInDown {

            -webkit-animation-name: zoomInDown;

            animation-name: zoomInDown;

            -webkit-animation-duration: 1s;

            animation-duration: 1s;

            -webkit-animation-fill-mode: both;

            animation-fill-mode: both;

        }



        @-webkit-keyframes zoomInDown {

            0% {

                opacity: 0;

                -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);

                transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);

                -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);

                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);

            }



            60% {

                opacity: 1;

                -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);

                transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);

                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);

                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);

            }

        }



        @keyframes zoomInDown {

            0% {

                opacity: 0;

                -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);

                transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);

                -webkit-animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);

                animation-timing-function: cubic-bezier(0.550, 0.055, 0.675, 0.190);

            }



            60% {

                opacity: 1;

                -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);

                transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);

                -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);

                animation-timing-function: cubic-bezier(0.175, 0.885, 0.320, 1);

            }

        }
    </style>

</head>









<body class=' bg-slate-900 lg:p-1'>



    <div class="loader-animarion" style="display: flex;">

        <div>

        </div>

        <div>

        </div>

        <div>

        </div>

    </div>



    <script type="text/javascript">
        $(window).on('load', function() {

            $(".loader-animarion").fadeOut("slow");

        });
    </script>







    <!---04148815454--->



    <div class="p-5 min-h-screen bg-center bg-no-repeat bg-cover ">



        <div class="flex justify-center">

            <div class="flex items-center justify-center w-full min-h-screen bg-slate-900 lg:w-1/2">

                <!---
                <div class='flex w-full p-5  gap-2 items-center bg-white rounded-lg lg:w-5/6'>



                    <form action="login.php" method="POST" class='w-full' autocomplete="off" id="formulario">

                        <div>



                            <h1 class="text-lg font-semibold tracking-widest text-center text-gray-900 rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Entrar <?php if (isset($_REQUEST['error3'])) {

                                                                                                                                                                                            echo "<label class='text-red-400 text-sm'>" . $_REQUEST['error3'] . "</label>";
                                                                                                                                                                                        } ?></h1>

                        </div>



                        <div class="mt-5">

                            <label class="subpixel-antialiased  font-medium block mb-2 text-md text-base text-gray-500  font-sans" for="usuario">Usuario</label>

                            <span class="login-notificacion ">

                                <input class="w-full px-4 py-2 text-sm border-2 rounded-md outline-none focus:border-blue-400" type="text" name="usuario" id="user" autocomplete="off" placeholder="Usuario">

                                <?php if (isset($_REQUEST['error'])) {

                                    echo "<label class='text-red-400 text-sm'>" . $_REQUEST['error'] . "</label>";
                                }

                                ?>

                        </div>







                        <div class="mt-5">

                            <label class="subpixel-antialiased font-medium block mb-2 text-md text-base text-gray-500  font-sans" for="password">Clave</label>

                            <span class="login-notificacion ">

                                <input class="w-full px-4 py-2 text-sm border-2 rounded-md outline-none focus:border-blue-400" type="password" name="clave" id="clave" autocomplete="off" placeholder="Clave">

                                <?php if (isset($_REQUEST['error2'])) {

                                    echo "<label class='text-red-400 text-sm'>" . $_REQUEST['error2'] . "</label>";
                                }

                                ?>

                                <div class='flex flex-row  items-center gap-1 mt-2'>

                                    <input type="checkbox" name='recordar_usuario_check' id="recordar_usuario_check"> <label for="recordar_usuario_check" class=''>Recordar Usuario</label>

                                </div>

                        </div>







                        <div class="">

                            <button class="w-full py-2 mt-4 mb-3 text-white transition duration-100 bg-blue-500 rounded-full hover:bg-blue-400 " id="btn_Entrar">Entrar</button>



                        </div>

                    </form>

                    <svg class='hidden lg:inline-block h-auto' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="667.89824" height="531.39369" viewBox="0 0 667.89824 531.39369">

                        <polygon points="177.27478 122.14261 97.82164 111.55026 113.90043 30.12255 199.25237 46.97622 177.27478 122.14261" fill="#2f2e41" />

                        <path d="M100.89824,474.41435V138.49443c0-6.0874,4.95215-11.04004,11.04004-11.04004H656.8582c6.0874,0,11.04004,4.95264,11.04004,11.04004V474.41435c0,6.0874-4.95264,11.04004-11.04004,11.04004H111.93828c-6.08789,0-11.04004-4.95264-11.04004-11.04004ZM665.89824,138.49443c0-4.99268-4.04736-9.04004-9.04004-9.04004H111.93828c-4.99268,0-9.04004,4.04736-9.04004,9.04004V474.41435c0,4.99268,4.04736,9.04004,9.04004,9.04004H499.26438c92.02934,0,166.63386-74.60452,166.63386-166.63386V138.49443Z" fill="#3f3d56" />

                        <g>

                            <path d="M612.72706,177.75075l-8.22992-3.89856c3.37555,4.71082,6.28418,12.06805,7.84137,17.92249,2.63654-5.45343,6.88672-12.1261,11.09375-16.11194l-8.69812,2.23767c5.35974-26.26794,25.5191-45.12573,48.60437-45.12573l.32679-.9488c-24.11316,0-45.46577,18.59639-50.93824,45.92488Z" fill="#3f3d56" />

                            <path d="M650.60627,217.77471h-52c-2.20557,0-4-1.79443-4-4s1.79443-4,4-4h52c2.20557,0,4,1.79443,4,4s-1.79443,4-4,4Z" fill="#3b82f6" />

                        </g>

                        <g class="zoomInDown">

                            <path d="M496.2159,247.81797v106c0,9.37402-7.62598,17-17,17h-106c-9.37402,0-17-7.62598-17-17v-106c0-9.37402,7.62598-17,17-17h106c9.37402,0,17,7.62598,17,17Zm-23.57585,121c11.91601,0,21.57585-9.65984,21.57585-21.57585v-46.8651c0-37.31184-30.24722-67.55906-67.55906-67.55906h-53.44094c-8.28427,0-15,6.71573-15,15v91.21062c0,16.45222,13.33716,29.78938,29.78938,29.78938h84.63478Z" fill="#3f3d56" />

                            <g>

                                <path d="M440.32637,274.11016h-34.22061c-.86273,0-1.56471-.70199-1.56471-1.56472,0-.86273,.70199-1.56439,1.56471-1.56439h34.22061c.86273,0,1.56439,.70166,1.56439,1.56439s-.70166,1.56471-1.56439,1.56471Z" fill="#3f3d56" />

                                <path d="M440.32637,307.47378h-34.22061c-.86273,0-1.56471-.70199-1.56471-1.56472,0-.86273,.70199-1.56439,1.56471-1.56439h34.22061c.86273,0,1.56439,.70166,1.56439,1.56439s-.70166,1.56471-1.56439,1.56471Z" fill="#3f3d56" />

                                <path d="M423.32637,353.47378h-34.22061c-.86273,0-1.56471-.70199-1.56471-1.56472,0-.86273,.70199-1.56439,1.56471-1.56439h34.22061c.86273,0,1.56439,.70166,1.56439,1.56439s-.70166,1.56471-1.56439,1.56471Z" fill="#3f3d56" />

                                <path d="M458.68951,290.80291h-70.94689c-.86273,0-1.56471-.70199-1.56471-1.56472s.70199-1.56439,1.56471-1.56439h70.94689c.86273,0,1.56439,.70166,1.56439,1.56439,0,.86273-.70166,1.56471-1.56439,1.56471Z" fill="#3f3d56" />

                            </g>

                        </g>

                        <path d="M183.61978,302.61995H66.34496c9.8298-21.93448,15.87304-42.82434,6.42592-59.44071l110.8489-6.42599c-5.5394,22.43144-6.2165,44.44525,0,65.8667Z" fill="#ffb6b6" />

                        <path d="M224.00986,485.45439h-86.21598c-.62359,0-1.19236-.35629-1.46448-.91737l-.52506-1.08263-11.45719-23.51785c-.73767-1.5142-3.0078-1.04796-3.08896,.63441l-1.10388,22.88344-.02268,.45363c-.0433,.86625-.75827,1.54637-1.6256,1.54637H33.61971c-.85776,0-1.56884-.66712-1.62511-1.52303-.01048-.15948-.02067-.31851-.03028-.47697-5.41998-83.65002,14.07001-140.35004,25.5-165.72003l.01001-.01001c4.48999-9.97998,7.75-15.10999,7.75-15.10999l1.13-.01001h.01001l22.82996-.39996h.01001l20.22003-.34003,15.27997-.25,6.13-.10999h.01001l3.84003-.06,19.08997-.33002,17.04999-.28998,12.24005-.20001h.33997l1.82001,7.84998v.01001l.07001,.35004v.01001l.31,1.28998,.01001,.03998,.62,2.71002v.02002l.03998,.14996v.01001l.15002,.65002,.01001,.02997,1.44,6.22998,2.32996,10.13,3.07001,13.25,3.87,16.82001,1.96002,8.47003,2.69,11.66998,23.79999,103.14001h0c.24008,1.02157-.53506,2-1.58446,2Z" fill="#2f2e41" />

                        <path d="M166.68852,107.28386l-46.6709-1.62849-18.44831,24.73856-9.7071,2.10791c-14.55116,3.1598-24.53307,16.58027-23.37361,31.42535l4.40964,102.84751,2,12,110,18,24.73388-155.64774-32.54609-11.69246-10.39751-22.15064Z" fill="#3b82f6" />

                        <circle cx="149.65671" cy="61.49005" r="41.8927" fill="#ffb6b6" />

                        <g class="fadeInRight">

                            <path d="M616.18463,481.56505l-36.31872-13.49725c-5.44735-2.02442-8.23214-8.10321-6.20769-13.55067l35.68052-96.00996c2.02442-5.44735,8.10321-8.23214,13.55056-6.20772l36.31872,13.49725c5.44725,2.02438,8.23203,8.10317,6.20762,13.55052-13.65214,38.80589-28.54458,82.40946-35.68052,96.00997-2.02446,5.44746-8.10325,8.23224-13.55049,6.20786Z" fill="#3f3d56" />

                            <path d="M656.46909,404.97193c-.2305-.08566-.48759,.03212-.57325,.26262l-4.97021,13.37395c-.08566,.2305,.03212,.48759,.26262,.57325s.48759-.03212,.57325-.26262l4.97021-13.37395c.08566-.2305-.03212-.48759-.26262-.57325Z" fill="#3f3d56" />

                            <path d="M664.47535,378.99786l-35.67988,96.00824c-1.76209,4.74148-6.89382,7.24846-11.67191,5.81524l-.00209-.00078c-.07052-.02145-.14102-.04289-.21285-.0672-.12562-.03956-.24969-.08328-.37506-.12988,0,0-.4473-.20429-1.26406-.57917-.82511-.37799-2.02516-.93099-3.51945-1.62663-.44861-.20716-.92075-.42781-1.41929-.66064-.99287-.46412-2.08295-.97388-3.24987-1.52646-.46587-.21832-.94691-.44703-1.43839-.67963-2.51228-1.18813-5.32196-2.52958-8.27724-3.96558-.50037-.24067-1.00415-.48496-1.51134-.73291-.13248-.06588-21.67089-14.86742-21.25464-15.9875l35.67988-96.00824c1.83509-4.9379,7.32401-7.45246,12.26193-5.61737l5.33704,1.98342c.85259,.31685,1.29104,1.23609,1.04812,2.11377-.01471,.05875-.0294,.1175-.03992,.1778-.163,.91215,.39931,1.79893,1.26861,2.12199l18.75941,6.97163c.8693,.32306,1.87426,.01873,2.34652-.77849,.03142-.05254,.05866-.10662,.0859-.16072,.38921-.82332,1.32157-1.23312,2.17417-.91627l5.33705,1.98343c4.9379,1.83509,7.45246,7.32401,5.61737,12.26191Z" fill="#3b82f6" />

                            <path d="M603.40442,373.83554c-.2305-.08566-.48759,.03212-.57325,.26262l-1.24255,3.34349c-.08566,.2305,.03212,.48759,.26262,.57325s.48759-.03212,.57325-.26262l1.24255-3.34349c.08566-.2305-.03212-.48759-.26262-.57325Z" fill="#3f3d56" />

                            <path d="M599.67677,383.866c-.2305-.08566-.48759,.03212-.57325,.26262l-2.40744,6.47801c-.08566,.2305,.03212,.48759,.26262,.57325s.48759-.03212,.57325-.26262l2.40744-6.47801c.08566-.2305-.03212-.48759-.26262-.57325Z" fill="#3f3d56" />

                            <path d="M596.25975,393.06059c-.2305-.08566-.48759,.03212-.57325,.26262l-2.40744,6.47801c-.08566,.2305,.03212,.48759,.26262,.57325s.48759-.03212,.57325-.26262l2.40744-6.47801c.08566-.2305-.03212-.48759-.26262-.57325Z" fill="#3f3d56" />

                            <rect x="618.65109" y="355.11225" width="8.69434" height="1.11466" rx=".08614" ry=".08614" transform="translate(162.92241 -194.74653) rotate(20.38675)" fill="#e6e6e6" />

                            <circle cx="654.21998" cy="366.91587" r=".89173" fill="#e6e6e6" />

                            <circle cx="656.51863" cy="367.77013" r=".89173" fill="#e6e6e6" />

                            <circle cx="658.81727" cy="368.62438" r=".89173" fill="#e6e6e6" />

                        </g>

                        <g class="slideInRight">

                            <path d="M527.13739,178.39369h-31.3623c-4.03564,0-7.31885-3.2832-7.31885-7.31885v-35.3623c0-4.03564,3.2832-7.31885,7.31885-7.31885h31.3623c4.03564,0,7.31885,3.2832,7.31885,7.31885v35.3623c0,4.03564-3.2832,7.31885-7.31885,7.31885Z" fill="#fff" />

                            <path d="M527.13739,178.39369h-31.3623c-4.03564,0-7.31886-3.28321-7.31886-7.31885-1.57703-13.02136-2.01147-25.14868,0-35.3623,0-4.03564,3.28322-7.31884,7.31886-7.31884h31.3623c4.03564,0,7.31885,3.2832,7.31885,7.31885v35.3623c0,4.03564-3.2832,7.31885-7.31885,7.31885Zm-31.3623-49c-3.48438,0-6.31885,2.83447-6.31885,6.31885v35.3623c0,3.48438,2.83447,6.31885,6.31885,6.31885h31.3623c3.48438,0,6.31885-2.83447,6.31885-6.31885v-35.3623c0-3.48438-2.83447-6.31885-6.31885-6.31885h-31.3623Z" fill="#3f3d56" />

                            <path d="M523.96846,149.89369h-25.84115c-1.09605,0-1.98778-.89174-1.98778-1.98778s.89174-1.98778,1.98778-1.98778h25.84115c1.09605,0,1.98778,.89174,1.98778,1.98778s-.89174,1.98778-1.98778,1.98778Z" fill="#3b82f6" />

                            <path d="M523.96846,160.89369h-25.84115c-1.09605,0-1.98778-.89174-1.98778-1.98778s.89174-1.98778,1.98778-1.98778h25.84115c1.09605,0,1.98778,.89174,1.98778,1.98778s-.89174,1.98778-1.98778,1.98778Z" fill="#3b82f6" />

                            <path d="M523.96846,138.89369h-25.84115c-1.09605,0-1.98778-.89174-1.98778-1.98778s.89174-1.98778,1.98778-1.98778h25.84115c1.09605,0,1.98778,.89174,1.98778,1.98778s-.89174,1.98778-1.98778,1.98778Z" fill="#3b82f6" />

                        </g>

                        <g>

                            <path d="M135.41246,116.42483c2.29554,4.32749,5.37816,7.77771,8.64644,10.00985l19.26405,42.60633,20.00564-9.75968-21.69542-42.16906c-.01513-3.95779-1.14294-8.44495-3.43848-12.77244-5.24414-9.88614-14.59531-15.19504-20.88646-11.85785-6.29115,3.33719-7.13991,14.05672-1.89579,23.94283l.00002,.00002Z" fill="#ffb6b6" />

                            <path d="M178.78963,143.2799s29.34127-15.37561,38.44501,.76875c7.7674,13.77452,13.37977,82.70112,14.86009,102.63982,.25983,3.49976-.65327,6.97551-2.5962,9.89799v.00002c-5.75394,8.65487-18.15819,9.47999-25.00778,1.6635l-59.45564-117.06693,28.20206-13.4031,6.89737,16.70483-1.34492-1.20489Z" fill="#3b82f6" />

                        </g>

                        <path d="M241.52013,308.20187c.64418-.91274,1.02384-2.02553,1.02384-3.22764v-102.59386c0-3.09594-2.50975-5.60566-5.60566-5.60566H81.85817c-3.09592,0-5.60566,2.50973-5.60566,5.60566v102.59386c0,1.20211,.37965,2.3149,1.02383,3.22764h-19.36854v5.37802c67.3402,3.76631,135.00048,3.76631,202.98088,0v-5.37802h-19.36855Z" fill="#3f3d56" />

                        <g class="slideInLeft">

                            <path d="M408.13739,531.39369h-31.3623c-4.03564,0-7.31885-3.2832-7.31885-7.31885v-35.3623c0-4.03564,3.2832-7.31885,7.31885-7.31885h31.3623c4.03564,0,7.31885,3.2832,7.31885,7.31885v35.3623c0,4.03564-3.2832,7.31885-7.31885,7.31885Z" fill="#fff" />

                            <path d="M408.13739,531.39369h-31.3623c-4.03564,0-7.31886-3.28321-7.31886-7.31885-1.57703-13.02136-2.01147-25.14868,0-35.3623,0-4.03564,3.28322-7.31884,7.31886-7.31884h31.3623c4.03564,0,7.31885,3.2832,7.31885,7.31885v35.3623c0,4.03564-3.2832,7.31885-7.31885,7.31885Zm-31.3623-49c-3.48438,0-6.31885,2.83447-6.31885,6.31885v35.3623c0,3.48438,2.83447,6.31885,6.31885,6.31885h31.3623c3.48438,0,6.31885-2.83447,6.31885-6.31885v-35.3623c0-3.48438-2.83447-6.31885-6.31885-6.31885h-31.3623Z" fill="#3f3d56" />

                            <path d="M404.96846,502.89369h-25.84115c-1.09605,0-1.98778-.89174-1.98778-1.98778s.89174-1.98778,1.98778-1.98778h25.84115c1.09605,0,1.98778,.89174,1.98778,1.98778s-.89174,1.98778-1.98778,1.98778Z" fill="#3b82f6" />

                            <path d="M404.96846,513.89369h-25.84115c-1.09605,0-1.98778-.89174-1.98778-1.98778s.89174-1.98778,1.98778-1.98778h25.84115c1.09605,0,1.98778,.89174,1.98778,1.98778s-.89174,1.98778-1.98778,1.98778Z" fill="#3b82f6" />

                            <path d="M404.96846,491.89369h-25.84115c-1.09605,0-1.98778-.89174-1.98778-1.98778s.89174-1.98778,1.98778-1.98778h25.84115c1.09605,0,1.98778,.89174,1.98778,1.98778s-.89174,1.98778-1.98778,1.98778Z" fill="#3b82f6" />

                        </g>

                        <g>

                            <path d="M134.5386,294.62831c-4.89857,.02591-9.38514,1.15606-12.87879,3.01579l-46.68092-2.7008-.63535,22.25024,47.42155,.34406c3.51312,1.82273,8.01139,2.90535,12.90996,2.87945,11.19077-.05918,20.23205-5.88017,20.19437-13.00155-.03768-7.12138-9.14005-12.84637-20.33079-12.78719h-.00003Z" fill="#ffb6b6" />

                            <path d="M89.68917,132.57829s-39.68241-4.42168-49.79093,20.19641c-7.72191,18.80578-27.78296,92.1002-39.04032,134.06299-4.11574,15.34178,7.07334,30.53237,22.94515,31.16096l70.09517,2.77605,4.05432-31.00906-50.05432-7.99094,28-84,13.79093-65.19641Z" fill="#3b82f6" />

                        </g>

                        <path d="M191.56027,29.14839c2.01449-10.20198-10.34929-14.16434-19.60836-18.89805l-7.86094-6.64878c-8.2413-4.21337-17.8775-4.75517-26.53916-1.49218l-27.03182,8.99811c-12.26987,4.62226-16.55126,15.62535-23.62176,26.66722l-11.85183,15.8224c-6.96029,10.86977-4.87941,27.83983-3.24718,40.64348l.68396,5.3652-6.51175,15.57165,50.04462,8.93446,10.08683-24.03093-6.29473-11.42158c-2.23346-4.05255-1.33972-9.11391,2.1466-12.15646l.00003-.00002c12.54082-10.94449,14.94346-29.72819,14.94346-29.72819l10.60165,9.3493c7.70458,2.89056,14.81705,4.38096,21.34709,4.49414,7.18186,.12447,13.65922-1.41696,19.44496-4.59378l1.01841,15.49073c-2.99055,18.31255-7.45406,22.33938-27.56367,36.34892l24.2032,24.13365,1.13429-9.82756c2.6983-23.3783,14.35607-39.64923,17.51203-58.45856,2.18226-13.00611-2.85552-26.17979-13.03592-34.56314h-.00001Z" fill="#2f2e41" />

                    </svg>





                </div>

--->

                <div class="
          flex flex-col
          bg-white
          shadow-md
          px-4
          sm:px-6
          md:px-8
          lg:px-10
          py-8
          rounded-3xl
          w-50
          max-w-md
        ">
                    <div class="font-medium self-center text-xl sm:text-3xl text-gray-800">
                        Inicio de Sesion <?php if (isset($_REQUEST['error3'])) {

                                                echo "<label class='text-red-400 text-sm'>" . $_REQUEST['error3'] . "</label>";
                                            } ?>
                    </div>
                    <div class="mt-4 self-center text-xl sm:text-sm text-gray-800">
                        Ingrese sus Datos
                    </div>

                    <div class="mt-10">
                        <form action="login.php" method="POST" class='w-full' autocomplete="off" id="formulario">
                            <div class="flex flex-col mb-5">
                                <?php if (isset($_REQUEST['error'])) {

                                    echo "<label class='text-red-400 text-sm'>" . $_REQUEST['error'] . "</label>";
                                }

                                ?>
                                <label for="email" class="mb-1 text-xs tracking-wide text-gray-600">Usuario:</label>
                                <div class="relative">
                                    <div class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  ">
                                        <i class="fas fa-user text-blue-500"></i>
                                    </div>

                                    <input id="usuario" type="text" name="usuario" class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400
                  " placeholder="Ingrese su Usuario">
                                </div>
                            </div>

                            <div class="flex flex-col mb-6">
                                <label for="password" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">Clave:</label>
                                <div class="relative">
                                    <div class="
                    inline-flex
                    items-center
                    justify-center
                    absolute
                    left-0
                    top-0
                    h-full
                    w-10
                    text-gray-400
                  ">
                                        <span>
                                            <i class="fas fa-lock text-blue-500"></i>
                                        </span>
                                    </div>

                                    <input id="clave" type="password" name="clave" class="
                    text-sm
                    placeholder-gray-500
                    pl-10
                    pr-4
                    rounded-2xl
                    border border-gray-400
                    w-full
                    py-2
                    focus:outline-none focus:border-blue-400
                  " placeholder="Ingrese su Clave">
                                </div>
                            </div>
                            <?php if (isset($_REQUEST['error2'])) {

                                echo "<label class='text-red-400 text-sm'>" . $_REQUEST['error2'] . "</label>";
                            }
                            ?>
                            <div class='flex flex-row  items-center gap-1 mt-2'>

                                <input type="checkbox" name='recordar_usuario_check' id="recordar_usuario_check"> <label for="recordar_usuario_check" class='text-xs sm:text-sm tracking-wide text-gray-600'>Recordar Usuario</label>

                            </div>

                            <div class="flex w-full">
                                <button id="btn_Entrar" type="submit" class="
                  flex
                  mt-2
                  items-center
                  justify-center
                  focus:outline-none
                  text-white text-sm
                  sm:text-base
                  bg-blue-500
                  hover:bg-blue-600
                  rounded-2xl
                  py-2
                  w-full
                  transition
                  duration-150
                  ease-in
                ">
                                    <span class="mr-2 uppercase">Entrar</span>
                                    <span>
                                        <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                            <path d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </form>


                        <script>
                            //todo Si el contenido de la variable es true se coloca el contenido

                            if (Cookies.get('Admin_check') == 'true') {

                                $("#recordar_usuario_check").prop('checked', true);

                                $('#user').val(Cookies.get('admin_user'));

                            }

                            //?al hacer click en el checbox se guardan las varriables

                            $('#recordar_usuario_check').click(function() {

                                debugger

                                //*si esta en true se guardan

                                if ($("#recordar_usuario_check").prop('checked') == true) {

                                    if (typeof Cookies.get('Admin_check') == 'undefined') {

                                        Cookies.set('admin_user', $('#user').val(), {

                                            expires: 365,

                                            path: './master_web/index.php'

                                        });

                                        Cookies.set('Admin_check', $('#recordar_usuario_check').prop('checked'), {

                                            expires: 365,

                                            path: './master_web/index.php'

                                        });

                                        return;

                                    } else {

                                        Cookies.remove('Admin_check', {

                                            path: './master_web/index.php'

                                        }); // removed!

                                        Cookies.remove('admin_user', {

                                            path: './master_web/index.php'

                                        }); // removed!

                                        return;

                                    }

                                }

                                //!si no se eliminan

                                if ($("#recordar_usuario_check").prop('checked') == false) {

                                    Cookies.remove('Admin_check', {

                                        path: './master_web/index.php'

                                    }); // removed!

                                    Cookies.remove('admin_user', {

                                        path: './master_web/index.php'

                                    }); // removed!

                                    return;

                                }

                            });
                        </script>



                    </div>
                </div>

            </div>

        </div>

    </div>

    </div>



</body>



</html>