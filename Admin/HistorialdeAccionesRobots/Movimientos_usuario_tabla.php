<?php

include("../php/conexion.php");

session_start();

if (isset($_POST['fecha'])) {
	$fecha = $_POST['fecha'];
} else {
	echo "Error";
	return;
}

if (isset($_POST['tipo'])) {
	$tipo = $_POST['tipo'];
} else {
	echo "Error";
	return;
}


if ($tipo == '1') {
	$consulta = "
	SELECT
	c2.sorteo,
	c1.descripcion,
	CAST( CAST( c1.fecha AS CHAR ) AS DATE ) AS fecha,
	CAST( CAST( c1.hora_proceso AS CHAR ) AS TIME ) AS hora,
	FROM
	ki11892154_db_Sorteos.reprocesados c1
	INNER JOIN ki11892154_db_Sorteos.sorteos c2 ON c1.cod_sorteo = c1.cod_sorteo 
	WHERE c1.fecha = '$fecha'  
	ORDER BY c2.sorteo,c2.hora dESC
	";
} else {
	$consulta = "
	SELECT
	c2.sorteo,
	c1.descripcion,
	CAST( CAST( c1.fecha AS CHAR ) AS DATE ) AS fecha,
	CAST( CAST( c1.hora_proceso AS CHAR ) AS TIME ) AS hora,
	FROM
	ki11892154_db_Sorteos.reprocesados2 c1
	INNER JOIN ki11892154_db_Sorteos.sorteos c2 ON c1.cod_sorteo = c1.cod_sorteo 
	WHERE c1.fecha = '$fecha'  
	ORDER BY c2.sorteo,c2.hora dESC
	";
}






$resultado = mysqli_query($conexion, $consulta);

$json = array();

while ($row = mysqli_fetch_assoc($resultado)) {

	$hora = $row['hora'];
	$horaC = date("g:i a", strtotime($hora));

	array_push($json, [
		"sorteo" => $row['sorteo'],
		"descripcion" => $row['descripcion'],
		"fecha" => $row['fecha'],
		"hora_proceso" => $horaC,
	]);
}

echo json_encode($json);
