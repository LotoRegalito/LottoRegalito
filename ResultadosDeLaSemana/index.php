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


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>

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

    <title>Resultados de la Semana</title>

</head>



<script>
    $(window).on('load', function() {



        //  $("#loader").fadeOut("slow");

    });
</script>



<body class="[ bg-[#197291] h-screen ] ">

    <div class="navbar bg-base-100 z-20 absolute">
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
                <img loading="lazy" src="../img/logo-color.png" class="w-20">
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


    <section class="[ w-full flex justify-center items-center h-full p-2 ] [ md:p-0 ] [ lg:p-0 ]">


        <div class="[ rounded-lg flex justify-between flex-col gap-5 px-5 shadow-lg bg-white p-2 w-full max-h-[600px]   ] [ md:w-4/6    ] [ lg:w-4/6  max-h-[500px] ]">
            <!-----Table----->

            <div class="flex gap-3 items-center w-full"><label>Fecha:</label>
                <input id="fecha_semana" type="date" value="<?php echo date("Y-m-d");  ?>" placeholder="Type here" class=" [ input input-bordered  input-primary w-full ] [ lg:w-auto ] [ lg:w-auto ] " />
            </div>
            <div class="overflow-x-auto relative ">

                <div id="loader_data" class="bg-white w-full flex justify-center items-center h-full absolute p-5 z-[55]">
                    <div class="flex py-5 justify-center text-center">

                        <div role="status">

                            <svg class="inline mr-2 w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">

                                <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />

                                <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />

                            </svg>

                            <span class="">Cargando...</span>

                        </div>

                    </div>
                </div>



                <table id="resultados_semanales" class="table table-xs table-pin-cols">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>Horarios</th>
                            <td>lunes</td>
                            <td>martes</td>
                            <td>miercoles</td>
                            <td>jueves</td>
                            <td>viernes</td>
                            <td>sabado</td>
                            <td>domingo</td>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>


                </table>
            </div>

        </div>
    </section>

    <script>
        // A $( document ).ready() block.
        $(document).ready(function() {
            consutlar_resultados_semanal();
        });
        $('#fecha_semana').change(function() {
            consutlar_resultados_semanal();
        });





        async function consutlar_resultados_semanal() {
            //  let url = '../../master_web/ResultadosDeLosSorteos/Api_Resultados_semanal.php?';
            let url = 'https://www.tecnoriente.com.ve/Master_Web/ResultadosDeLosSorteos/Api_Resultados_semanal.php';
            try {
                result = await $.ajax({
                    url: url,
                    type: 'GET',
                    beforeSend: () => {
                        $('#resultados_semanales tbody').html('');
                        //$("#resultados_semanales").find("th").empty();
                        $('#loader_data').show();
                    },
                    data: {
                        "id_sorteo": "1097",
                        "fecha": $('#fecha_semana').val(),
                    }
                });
                /*
                                for (let j = 0; j < diasSemana.length; j++) {

                                    $('#resultados_semanales thead tr').append(`<th>${diasSemana[j]}</th>`); //dia de la semana 
                                }
                */
                $('#loader_data').hide();
                // Create an object to store the grouped results
                const groupedResults = result.reduce((acc, curr) => {
                    // Extract the hour from the time string
                    const hour = curr.hora.split(" ")[0];

                    // Check if the hour already exists in the grouped results object
                    if (acc[hour]) {
                        // If it exists, push the current result into the corresponding hour array
                        acc[hour].push(curr);
                    } else {
                        // If it doesn't exist, create a new array for the hour and add the current result
                        acc[hour] = [curr];
                    }

                    return acc;
                }, {});

                const diasSemana = ["lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo"];



                let conten_table = "<tr>";

                for (const time in groupedResults) {
                    //  console.log(`Time: ${time}`);
                    const objects = groupedResults[time];

                    let hora_table_html = "";
                    let hora_data = "";

                    for (const resultados_sorteos of objects) {

                        if (hora_data == resultados_sorteos.hora || hora_data == "") {


                            if (hora_data.length == 0) {
                                hora_table_html = `<th class='z-[10] whitespace-nowrap'>${resultados_sorteos.hora}</th>`;
                                hora_data = resultados_sorteos.hora;
                            } else {
                                hora_table_html = "";
                            }

                            conten_table += `${hora_table_html}
                            <td>
                                <div class="flex items-center space-x-3">
                                    <div class="avatar">
                                        <div class="mask mask-squircle w-12 h-12">
                                            <img loading="lazy" src="../img/lottoregalito_compress/${resultados_sorteos.ganador}.png"
                                                alt="${resultados_sorteos.ganador}" />
                                        </div>
                                    </div>
                                    <div class="font-bold">
                                        ${resultados_sorteos.descripcion}
                                    </div>
                            </td>`;

                        }




                    }

                    conten_table += `</tr>`;

                }
                $('#resultados_semanales tbody').append(conten_table);



                return result;
            } catch (error) {
                $('#loader_data').hide();

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
                    icon: 'error',
                    title: 'Error al Consultar'
                })
            }
        }




        function groupByDate(data) {
            return data.reduce((result, obj) => {
                const {
                    fecha,
                    ...rest
                } = obj;
                if (!result[fecha]) {
                    result[fecha] = [];
                }
                result[fecha].push(rest);
                return result;
            }, {});
        }
    </script>
</body>

</html>