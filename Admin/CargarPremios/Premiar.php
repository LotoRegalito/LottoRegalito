<?php

premiar();
function premiar()
{
	include("../php/conexion.php");
	session_start();

	if (!isset($_SESSION['data'])) {
		echo 'false';
		return;
	}
	date_default_timezone_set('America/Caracas');

	$hora = time();
	$hora_Proceso = date("Y-m-d H:i:s", $hora);
	//$hora_Proceso = date("h:i:s a");

	if (isset($_POST['cod_sorteo'])) {
		$cod_sorteo = $_POST['cod_sorteo'];
	} else {
		echo "Error";
		return;
	}

	if (isset($_POST['ganador'])) {
		$ganador = $_POST['ganador'];
	} else {
		echo "Error";
		return;
	}

	if (isset($_POST['descripcion'])) {
		$descripcion = $_POST['descripcion'];
	} else {
		echo "Error";
		return;
	}

	if (isset($_POST['fecha'])) {
		$fecha = $_POST['fecha'];
	} else {
		echo "Error";
		return;
	}
	if (isset($_POST['hora'])) {

		//$hora = date("Y-m-d H:i:s", $_POST['hora']);
		$hora1 = strtotime($_POST['hora']);
		$hora = date("Y-m-d H:i:s", $hora1);
		//$hora  = $_POST['hora'];
	} else {
		echo "Error";
		return;
	}
	$cod_usuario = $_SESSION['data']['cod_usuario'];
	//?consultamos  si ya esta premiado
	$consulta = " 
	SELECT
	ki11892154_db_Sorteos.premios.ganador,
	ki11892154_db_Sorteos.premios.descripcion 
	FROM
	ki11892154_db_Sorteos.premios 
	 WHERE cod_sorteo = '$cod_sorteo'  and fecha = '$fecha'";
	$resultado = mysqli_query($conexion, $consulta);

	//$row = mysqli_query($conexion, $consulta);
	$row = mysqli_fetch_assoc($resultado);
	//?validamos que no esta premiado
	if (is_null($row)) {
		$consulta = "call web_master_premiar('$cod_sorteo','$ganador','$descripcion','$fecha','$hora','$hora_Proceso','$cod_usuario');";
	

		$resultado = mysqli_query($conexion, $consulta);

		$rows_affect = mysqli_affected_rows($conexion);
		echo $rows_affect;
	} else {
		echo 0;
	}
}
