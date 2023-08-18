<?php
anular_premiacion();
function anular_premiacion()
{
  
    include('../php/conexion.php');
    session_start();
    date_default_timezone_set('America/Caracas');
    
    $hora = time();
	$hora_Proceso = date("Y-m-d H:i:s", $hora);

    $cod_usuario = $_SESSION['data']['cod_usuario'];

    if (!isset($_SESSION['data'])) {
        echo 'false';
        return;
    }
    if (isset($_POST['fecha'])) {
        $fecha = $_POST['fecha'];
    } else {
        echo 1;
    }

    if (isset($_POST['cod_sorteo'])) {
        $cod_sorteo = $_POST['cod_sorteo'];
    } else {
        echo 1;
    }

    if (isset($_POST['ganador'])) {
        $ganador = $_POST['ganador'];
    } else {
        echo 1;
    }
    if (isset($_POST['descripcion'])) {
        $descripcion = $_POST['descripcion'];
    } else {
        echo 1;
    }

    

    $consulta = "call web_Anular_Sorteo('$fecha','$cod_sorteo','$ganador','$cod_usuario','$descripcion','$hora_Proceso')";
    $resultado = mysqli_query($conexion, $consulta);
    
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo $row['cant'];
    }
}
