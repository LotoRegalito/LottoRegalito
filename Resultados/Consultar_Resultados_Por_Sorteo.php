<?php



consultar();

function consultar()

{

    error_reporting(~0); ini_set('display_errors', 1);
    include('../php/conexion.php');


    if (isset($_POST['id_sorteo'])) {

        $id_sorteo = $_POST['id_sorteo'];
    } else {

        echo 'Codigo de sorteo Invalido';

        return;
    }

    if (isset($_POST['fecha'])) {

        $fecha = $_POST['fecha'];
    } else {

        echo 'Fecha Invalida';

        return;
    }

    $data = json_decode(file_get_contents("http://www.tecnoriente.com.ve/Master_Web/ResultadosDeLosSorteos/Api_Resultados_Por_Sorteo.php?id_sorteo=$id_sorteo&fecha=$fecha"),true );


    echo json_encode($data);
  
}
