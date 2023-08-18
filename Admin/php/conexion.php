<?php


$servername ='localhost';
$username = 'ki11892154_root';
$pass = 'Script285*';
$dbname = 'ki11892154_db_Sorteos';


$conexion = mysqli_connect($servername,$username,$pass,$dbname);

if($conexion) { 
    // echo "Conexion establecida";
}else{
     echo "Conexion no se pudo establecer";
     die( print_r( sqlsrv_errors(), true));
}



?>