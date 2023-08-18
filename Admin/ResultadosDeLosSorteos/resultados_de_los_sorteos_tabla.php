<?php

include("../php/conexion.php");

session_start();


$fecha = $_POST['fecha'];
$cod_sorteo = $_POST['cod_sorteo'];
$tipo = $_POST['tipo'];




if ($cod_sorteo != '0') {

  $var1 = "and c2.id_sorteo = '$cod_sorteo'";
} else {
  $var1 = '';
}

if ($tipo == 1) {
  $var2 = "and c2.tipo = 'Animalito'";
} else if ($tipo == 2 or $tipo == 3) {
  $var2 = "and c2.tipo = 'Numeros'";
} else if ($tipo == '%') {
  $var2 = "";
}
$consulta = "
  SELECT
	c1.descripcion,
	c1.ganador,
	c2.sorteo,
  c2.cod_sorteo,
  CAST(CAST(c1.fecha as char) as DATE) as fecha
FROM
	ki11892154_db_Sorteos.premios c1
	INNER JOIN ki11892154_db_Sorteos.sorteos c2 ON c2.cod_sorteo = c1.cod_sorteo 
WHERE
	c1.fecha = '$fecha' $var1 $var2 
ORDER BY
	c2.id_sorteo ASC,
	c2.hora
  ";




$resultado = mysqli_query($conexion, $consulta);

$json = array();

while ($row = mysqli_fetch_assoc($resultado)) {

  array_push($json, [
    "sorteo" => $row['sorteo'],
    "ganador" => $row['ganador'],
    "descripcion" => $row['descripcion'],
    "fecha" => $row['fecha'],
    "cod_sorteo" => $row['cod_sorteo'],
  ]);
}

echo json_encode($json);
