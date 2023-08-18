<?php

include("../php/conexion.php");

session_start();

if (isset($_POST['fecha'])) {
	$fecha = $_POST['fecha'];
} else {
	echo "Error";
	return;
}

if (isset($_POST['cod'])) {
	$cod_sorteo = $_POST['cod'];
} else {
	echo "Error";
	return;
}

if ($cod_sorteo == "%") {


	$consulta = "	

	SELECT
	c2.usuario,
	c2.responsable,
	c3.sorteo AS sorteo,
	c1.descripcion AS ganador,
	CAST( CAST( c1.fecha AS CHAR ) AS DATE ) AS fecha,
	CAST( CAST( c1.hora_proceso AS CHAR ) AS TIME ) AS hora,
	c1.proceso AS Accion 
FROM
	ki11892154_db_Sorteos.historial_movimientos_usuarios c1
	INNER JOIN ki11892154_db_Sorteos.usuarios c2 ON c1.cod_usuario = c2.cod_usuario
	INNER JOIN ki11892154_db_Sorteos.sorteos c3 ON c1.cod_sorteo = c3.cod_sorteo 
	AND c1.fecha = '$fecha' 
ORDER BY
	c3.sorteo ASC

		";
} else {
	$consulta = "
	SELECT
	c2.usuario,
	c2.responsable,
	c3.sorteo AS sorteo,
	c1.descripcion AS ganador,
	 CAST(CAST(c1.fecha as char) as DATE) as fecha,
	  CAST(CAST(c1.hora_proceso as char) as TIME) as hora,
	c1.proceso AS Accion 
FROM
	ki11892154_db_Sorteos.historial_movimientos_usuarios c1
	INNER JOIN ki11892154_db_Sorteos.usuarios c2 ON c1.cod_usuario = c2.cod_usuario
	INNER JOIN ki11892154_db_Sorteos.sorteos c3 ON c1.cod_sorteo = c3.cod_sorteo
		WHERE c2.cod_usuario= '$cod_sorteo' and 
		c1.fecha = '$fecha '
		order by c3.sorteo ASC";
}



$resultado = mysqli_query($conexion, $consulta);

$json = array();

while ($row = mysqli_fetch_assoc($resultado)) {

	$hora = $row['hora'];
	$horaC = date("g:i a", strtotime($hora));

	array_push($json, [
		"usuario" => $row['responsable'],
		"sorteo" => $row['sorteo'],
		"ganador" => $row['ganador'],
		"fecha" => $row['fecha'],
		"hora_proceso" => $horaC,
		"Accion" => $row['Accion']
	]);
}

echo json_encode($json);
