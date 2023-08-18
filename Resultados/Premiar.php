<?php


function premiar($nombre_sorteo, $ganador, $descripcion, $fecha, $hora)
{
	include("../php/conexion.php");
	session_start();

	date_default_timezone_set('America/Caracas');
	$hora_Proceso = date("h:i:s a");

	$nombre_sorteo = $nombre_sorteo;
	$ganador = $ganador;
	$descripcion = $descripcion;
	$fecha = $fecha;
	$hora = $hora;




	//?consultamos  si ya esta premiado
	$consulta = " 
	SELECT
	c2.cod_sorteo,
	c1.sorteo 
FROM
	sorteos c1
	INNER JOIN premios c2 ON c2.cod_sorteo = c1.cod_sorteo 
WHERE
	sorteo = 'GranRuleta 10:30Am' 
	AND fecha = '$fecha' 
ORDER BY
	c1.id_sorteo ASC
	";

	$resultado = sqlsrv_query($conexion, $consulta);
	$row = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC);

	//?validamos que no esta premiado
	if (is_null($row)) {
		//?Obtenemos el cod_sorteo
		$consulta = "SELECT cod_sorteo FROM `sorteos` where sorteo = '$nombre_sorteo'";
		$resultado = sqlsrv_query($conexion, $consulta);
		$row = sqlsrv_fetch_array($resultado, SQLSRV_FETCH_ASSOC);

		$consulta = "
	INSERT INTO premios ( cod_sorteo, ganador, descripcion, fecha, hora, hora_proceso, noreprocesar )
	VALUES
		(
			'" . $row['cod_sorteo'] . "',
			'$ganador',
			'$descripcion',
			'$fecha',
			'$hora',
			'$hora_Proceso',
			'1'
		);

		DECLARE @validar VARCHAR ( MAX ) = ( SELECT COUNT ( id_mov ) FROM historial_movimientos_usuarios );
		IF
			@validar > 0 BEGIN
			DECLARE
				@id_mov VARCHAR ( MAX ) = ( SELECT TOP 1 id_mov FROM historial_movimientos_usuarios ORDER BY id_mov DESC );
			INSERT INTO historial_movimientos_usuarios ( id_mov, cod_usuario, cod_sorteo, ganador,descripcion, fecha, hora_proceso, proceso )
			VALUES
				( @id_mov + 1,'1102','" . $row['cod_sorteo'] . "','$ganador','$descripcion','$fecha','$hora_Proceso','Premiado' );
			END ELSE BEGIN
				INSERT INTO historial_movimientos_usuarios ( id_mov, cod_usuario, cod_sorteo, ganador,descripcion, fecha, hora_proceso, proceso )
			VALUES
			('1','1102','" . $row['cod_sorteo'] . "','$ganador','$descripcion','$fecha','$hora_Proceso','Premiado' );
		END


	";
		$resultado = sqlsrv_query($conexion, $consulta);
		$rows_affect = sqlsrv_rows_affected($resultado);
		echo $rows_affect;
	} else {
		echo 0;
	}
}
