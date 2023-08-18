<?php
login();
function login()
{
    include("./php/conexion.php");
    session_start();
    if (isset($_POST['usuario'])) {
        $usuario = $_POST['usuario'];
    } else {
        header("Location: index.php?error=Usuario Invalido");
        return;
    }
    if (isset($_POST['clave'])) {
        $clave = $_POST['clave'];
    } else {
        header("Location: index.php?error=Clave no valida");
        return;
    }
    $consulta = "call web_master_login('$usuario','$clave')";
    $resultados = mysqli_query($conexion, $consulta);
    $row = mysqli_fetch_assoc($resultados);




    if ($row['validar_usuario'] != 'true') {
        header("Location: index.php?error=Usuario no Encontrado!!");
        return;
    }
    if ($row['validar_clave'] != 'true') {
        header("Location: index.php?error2=Clave Incorrecta!!");
        return;
    }

    mysqli_free_result($resultados);
    mysqli_next_result($conexion);
    $sql = "
    SELECT *  from ki11892154_db_Sorteos.usuarios WHERE usuario = '$usuario' and clave = '$clave'";
    $resultados = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_assoc($resultados);
    $_SESSION['data'] = $row;
    header("Location: administrador.php");

    // echo  json_encode($row);
}
