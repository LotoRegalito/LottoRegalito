<?php

consulta_tabla();

function consulta_tabla()

{

    date_default_timezone_set('America/Caracas');

        session_start();



        include('../php/conexion.php');



        if (!isset($_SESSION['data'])) {

                echo 'false';

                return;

        }



        $fecha = $_POST['fecha'];

        $fecha_actual = date("Y-m-d");

        $fecha_comparar = date('Y-m-d', strtotime($fecha));

        $condicion = "";

        $condicion2 = "";



       
        if ($fecha_comparar == $fecha_actual) {

                $condicion =  "WHERE  CAST( c1.hora AS TIME ) < CAST( DATE_SUB(NOW(), INTERVAL 5 HOUR) AS TIME )";

                $condicion2 =  "and CAST(c1.hora as time) <= cast( DATE_SUB(NOW(), INTERVAL 5 HOUR) as time)";
        }

      

        $consulta = "

        SELECT

	c1.cod_sorteo AS id,

	c1.sorteo AS descripcion,

	c1.tipo,

	CAST(CAST(c1.hora AS CHAR) AS TIME ) AS hora,

	CASE WHEN c1.fecha = '01/01/1900' THEN 'NO' ELSE 'SI' END AS premiado,

	c1.dupleta AS grupo_animal,

	c1.soloterminal,

	c1.id_sorteo,

	c1.nombre,

	c1.var,

	c1.descripcion AS descripcion2 

FROM

	(

	SELECT

		t1.cod_sorteo,

		t1.sorteo,

		t1.tipo,

		t1.hora,

		IFNULL( t2.fecha, '01/01/1900' ) AS fecha,

		t1.dupleta,

		t1.soloterminal,

		t1.id_sorteo,

		IFNULL( t2.descripcion, 'Pendiente' ) AS descripcion,

		t3.nombre,

		IFNULL((SELECT '1' AS cod FROM sorteos AS c1 LEFT JOIN premios AS c2 ON c1.cod_sorteo = c2.cod_sorteo AND c2.fecha = '$fecha' OR c2.fecha = '1900/01/01' INNER JOIN id_sorteos AS c3 ON c1.id_sorteo = c3.id_sorteo WHERE c1.activo = 1  AND c1.id_sorteo = t1.id_sorteo  AND c2.fecha IS NULL $condicion2  AND CAST(c1.hora AS DATETIME) <= CAST(now() AS DATETIME )LIMIT 1),'0') AS var 

	FROM

		ki11892154_db_Sorteos.sorteos AS t1

		LEFT JOIN ki11892154_db_Sorteos.premios AS t2 ON t1.cod_sorteo = t2.cod_sorteo 

		AND t2.fecha = '$fecha'

		OR t2.fecha = '1900/01/01'

		INNER JOIN ki11892154_db_Sorteos.id_sorteos t3  ON t1.id_sorteo = t3.id_sorteo 

	WHERE

		t1.activo = 1 

	) c1 $condicion ORDER BY

	c1.var DESC,

	c1.id_sorteo,

	CAST(c1.hora AS TIME) DESC,

	c1.sorteo ASC







        ";



     



        $consulta2 = "SELECT top 0

	'' AS id,

	'' AS descripcion,

	'' as tipo ,

	'' as hora,

	'' AS premiado,

	'' AS grupo_animal,

	'' as soloterminal";







        if ($fecha_comparar <=  $fecha_actual) {

                $resultado = mysqli_query($conexion, $consulta);

        } else {

                $resultado = mysqli_query($conexion, $consulta2);

        }

        $bg = "";

        $nombre_sorteo = '0';

        $inicial = 0;

        echo " <div id='option_buttons' class='text-base text-center text-white lg:whitespace-normal whitespace-nowrap overflow-scroll responsive'>";

        $total_sorteos_premiados = 0;

        $iniciar_contador_color_enunciado = 0;

        $array = array();

        $varid_sorteo = "";

        $contador = 0;

        $contador_si = 0;

        $status_premiado = 0;

        $id_sorteo_row = 0;



        while ($row = mysqli_fetch_assoc($resultado)) {





                $id_sorteo_row = $row['id_sorteo'];

                if ($varid_sorteo == "") {

                        $varid_sorteo = $row['id_sorteo'];

                }



                if ($varid_sorteo == $id_sorteo_row) {

                        $contador =   $contador + 1;

                        if ($row['premiado'] == "SI") {

                                $contador_si = $contador_si + 1;

                        }

                } else {

                        if ($contador_si == $contador) {

                                $status_premiado = 1;

                        } else {

                                $status_premiado = 0;

                        }



                        array_push($array,  $array[] = array(

                                "id_sorteo" => $varid_sorteo,

                                "status" => $status_premiado

                        ));



                        echo "<script>Sorteo_array.push(Sorteos = { 'id_sorteo': '$varid_sorteo','status_premiado': '$status_premiado',});</script>";



                        $varid_sorteo = $row['id_sorteo'];

                        $contador = 0;

                        $contador_si = 0;

                        $status_premiado = 0;



                        $contador =   $contador + 1;

                        if ($row['premiado'] == "SI") {

                                $contador_si = $contador_si + 1;

                        }

                }

        }



        if ($contador_si == $contador) {

                $status_premiado = 1;

        } else {

                $status_premiado = 0;

        }



        array_push($array,  $array[] = array(

                "id_sorteo" => $varid_sorteo,

                "status" => $status_premiado

        ));











        if ($fecha_comparar <=  $fecha_actual) {

                $resultado = mysqli_query($conexion, $consulta);

        } else {

                $resultado = mysqli_query($conexion, $consulta2);

        }



        echo "

        <div class='flex justify-center' >

               <div> 

                <button class='w-full p-2 my-2 mr-2 text-white bg-blue-400 rounded-full lg:w-full focus:outline-none focus:ring-2 ring-blue-200 hover:bg-blue-500' id='btn_actualizar' onclick='mostrarTodos_sorteos(true)'>Mostrar-Todos</button>

               </div>

               <div> 

               <button class='w-full p-2 my-2 ml-2 text-white bg-blue-400 rounded-full lg:w-full focus:outline-none focus:ring-2 ring-blue-200 hover:bg-blue-500' id='btn_actualizar' onclick='ocultarTodos_sorteos(true)'>Ocultar-Todos</button>

               </div>

        </div>

        ";

        while ($row = mysqli_fetch_assoc($resultado)) {



                if ($row['premiado'] == 'SI') {



                        $status = "border-green-200 hover:bg-green-300 ";

                } elseif ($row['premiado'] == 'NO') {

                        $status =  "border-orange-200 hover:bg-orange-300";

                }

                $mysqlDate = date('h:i A', strtotime($row['hora']));

                $id = $row['id'];

                $descripcion = $row['descripcion'];

                $tipo = $row['tipo'];

                $grupo_animal = $row['grupo_animal'];

                $soloterminal = $row['soloterminal'];

                $id_sorteo = $row['id_sorteo'];

                $nombre = $row['nombre'];

                $nombre_id = str_replace(' ', '', $nombre);

                if ($nombre_sorteo <> $nombre) {

                        if ($inicial == 1) {

                                echo "</div>";

                        }

                        for ($i = 0; $i < count($array); $i++) {

                                if ($array[$i]['id_sorteo'] == $id_sorteo) {

                                        $status_validar = $array[$i]['status'];

                                        break;

                                }

                        }

                        if ($status_validar == 1) {

                                $bg = "bg-green-400";

                        } elseif ($status_validar == 0) {

                                $bg = "bg-orange-400";

                        }

                        $inicial = 1;

                        echo "   <p id='$id_sorteo' onclick='ocultar_mostrar(`" . substr($nombre_id, 3) . "`,`$descripcion`,true)' class='cursor-pointer rounded-lg p-1 whitespace-nowrap col-span-3 lg:mt-1  lg:border-b border-b-2 $bg border-gray-300 mb-2 mt-2 ' >" . $row['nombre'] . "<svg id='titulo_" . substr($nombre_id, 3) . "' xmlns='http://www.w3.org/2000/svg' class='inline-block transition-all w-4 h-4' fill='none' viewBox='0 0 24 24' stroke='currentColor' stroke-width='2'><path stroke-linecap='round' stroke-linejoin='round' d='M5 15l7-7 7 7' /></svg></p> <div name='0' id='" . substr($nombre_id, 3) . "' class='grid w-full grid-flow-row grid-cols-3 gap-1 gap-2 lg:grid lg:grid-cols-3 lg:gap-2 '>";

                        echo "

                        <script>

                         ocultar_mostrar('" . substr($nombre_id, 3) . "','$descripcion',true);

                        </script>

                        ";

                }

                echo

                "   



               

             <button onclick='cargar_datos_inputs_Carga_de_premios(`$id`,`$descripcion`,`$tipo`,`$mysqlDate`,`$grupo_animal`,`$soloterminal`,`" . $row['premiado'] . "`),consulta_select_Carga_de_premios(`$grupo_animal`,`$soloterminal`,`$tipo`,`" . $row['premiado'] . "`),asignar_valores_Carga_de_premios()' title='' class=' $status overflow-hidden hover:bg-gray-200 border-2 text-black hover:transition-colors rounded-lg testing' name='' onclick=''>

             <p class='' >" . $row['descripcion'] . " </p>

             <p class='mr-2 text-sm text-right text-gray-500' style='margin-top: -8px'>" . $row['descripcion2'] . "</p>



             </button>

             

             ";





                $nombre_sorteo = $row['nombre'];

        }















































        while ($row = mysqli_fetch_assoc($resultado)) {



                if ($row['premiado'] == 'SI') {



                        $status = "border-green-200 hover:bg-green-300 ";

                } elseif ($row['premiado'] == 'NO') {

                        $status =  "border-orange-200 hover:bg-orange-300";

                }

                $mysqlDate = date('h:i A', strtotime($row['hora']));

                $id = $row['id'];

                $descripcion = $row['descripcion'];

                $tipo = $row['tipo'];

                $grupo_animal = $row['grupo_animal'];

                $soloterminal = $row['soloterminal'];

                $id_sorteo = $row['id_sorteo'];

                $nombre = $row['nombre'];

                $nombre_id = str_replace(' ', '', $nombre);

                if ($nombre_sorteo <> $nombre) {

                        if ($inicial == 1) {

                                echo "</div>";

                        }

                        for ($i = 0; $i < count($array); $i++) {

                                if ($array[$i]['id_sorteo'] == $id_sorteo) {

                                        $status_validar = $array[$i]['status'];

                                        break;

                                }

                        }

                        if ($status_validar == 1) {

                                $bg = "bg-green-400";

                        } elseif ($status_validar == 0) {

                                $bg = "bg-orange-400";

                        }

                        $inicial = 1;

                        echo "   <p id='$id_sorteo' onclick='ocultar_mostrar(`$nombre_id`,`$descripcion`,true)' class='cursor-pointer  whitespace-nowrap col-span-3 lg:mt-1 mt-5 lg:border-b border-b-2 $bg border-gray-300 mb-2 mt-2 ' >" . $row['nombre'] . "<svg id='titulo_$nombre_id' xmlns='http://www.w3.org/2000/svg' class='inline-block w-4 h-4' fill='none' viewBox='0 0 24 24' stroke='currentColor' stroke-width='2'><path stroke-linecap='round' stroke-linejoin='round' d='M5 15l7-7 7 7' /></svg></p> <div name='0' id='$nombre_id' class='grid w-full grid-flow-row grid-cols-3 gap-1 gap-2 lg:grid lg:grid-cols-3 lg:gap-2 '>";

                        echo "

                        <script>

                         ocultar_mostrar('$nombre_id','$descripcion',true);

                        </script>

                        ";

                }

                echo

                "

         

             <button onclick='cargar_datos_inputs_Carga_de_premios(`$id`,`$descripcion`,`$tipo`,`$mysqlDate`,`$grupo_animal`,`$soloterminal`),consulta_select_Carga_de_premios(`$grupo_animal`,`$soloterminal`,`$tipo`),asignar_valores_Carga_de_premios()' title='' class=' $status overflow-hidden hover:bg-gray-200 border-2 text-black hover:transition-colors rounded-lg testing' name='' onclick=''>

         

             " . $row['descripcion'] . "



         

             </button>   

       

            

          

             ";





                $nombre_sorteo = $row['nombre'];

        }











        echo "</div>";

        echo "</div>";

}

