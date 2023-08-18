<?php

include('../php/conexion.php');

$consulta = "
SELECT
premios.cod_sorteo,
sorteos.sorteo,
ganador,
descripcion,
CAST ( CAST ( premios.fecha AS DATE ) AS VARCHAR ) AS fecha 
FROM
db_premiador.principal.premios
INNER JOIN db_premiador.principal.sorteos ON sorteos.cod_sorteo = premios.cod_sorteo 
WHERE
premios.fecha = CAST ( getdate() AS DATE ) 
ORDER BY
premios.fecha DESC,
sorteos.sorteo ASC
";
$resultado = mysqli_query($conexion, $consulta);


echo "
<tr class='  text-center text-sm font-semibold tracking-wide text-left text-gray-900 bg-gray-100  border-b border-gray-600'>
    <th class='px-2 py-2'>Cod</th>
    <th class='px-2 py-2'>Sorteo</th>
    <th class='px-2 py-2'>Cod</th>
    <th class='px-2 py-2'>Ganador</th>
    <th class='px-2 py-2'>Fecha</th>
</tr>

";

while ($row = mysqli_query($conexion, $consulta)) {

echo "
<tr onclick='Anular_Premiacion(`" . $row['fecha'] . "`,`" . $row['cod_sorteo'] . "`,`" . $row['ganador'] . "`)' class='hover:bg-gray-50 cursor-pointer active:bg-gray-100 transition-colors'>
              
    <td class='w-24 h-20  text-sm lg:text-base border'>
        <p class=' text-black '>" . $row['cod_sorteo'] . "</p>
        </td>
        <td class=' w-24 h-20   text-sm lg:text-base border'>
        <p class=' text-black'>" . $row['sorteo'] . "</p>
        </td>
        <td class=' w-24  h-20   text-sm lg:text-base border'>
        <p class=' text-black'>" . $row['ganador'] . "</p>
        </td>
        <td class=' w-24 h-20 text-sm lg:text-sm border'>
        <p class=' text-black'>" . $row['descripcion'] . "</p>
        </td>
        <td class=' w-24  h-20  text-sm lg:text-base border'>
        <p class='text-black'>" . $row['fecha'] . "</p>
        </td>
    </tr>
";
}
