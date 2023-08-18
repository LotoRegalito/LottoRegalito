<?php
cargar_select();

function cargar_select()
{
    session_start();
    if (!isset($_SESSION['data'])) {
        echo 'false';
        return;
    }
    date_default_timezone_set('America/Caracas');
    include("../php/conexion.php");
    $grupo_animal = $_POST['grupo_animal'];
    $solo_terminal = $_POST['soloterminal'];
    $tipo  = $_POST['tipo'];
    if ($tipo == "Animalito") {
        $consulta = "SELECT * FROM ki11892154_db_Sorteos.animalitos WHERE dupleta = '$grupo_animal' ORDER BY CAST(cod AS INT)";
        $resultado = mysqli_query($conexion, $consulta);
        echo "<option value='' selected>Seleccione</option>";
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<option tittle='Animalito' value='" . $row['cod'] . "'>"  . $row['cod'] . '&nbsp' . $row['descripcion'] . "</option>";
        }
    } else if ($tipo = "Numeros") {
        if ($solo_terminal == 1) {
            echo "<option value='' selected>Seleccione</option>";
            for ($i = 0; $i < 100; $i++) {
                if (strlen($i) == 1) {
                    $Complemento = "0" . $i;
                } else {
                    $Complemento = $i;
                }
                echo "<option tittle='Terminal' value='$Complemento'>" . $Complemento . '&nbsp' . 'Terminal' . "</option>";
            }
        } else {
            echo "<option value='' selected>Seleccione</option>";
            for ($i = 0; $i < 1000; $i++) {
                if (strlen($i) == 1) {
                    $Complemento = "00" . $i;
                } else if (strlen($i) == 2) {
                    $Complemento = "0" . $i;
                } else {
                    $Complemento = $i;
                }
                echo "<option tittle='Triple' value='$Complemento'>" . $Complemento . '&nbsp' . 'Triple' . "</option>";
            }
        }
    }
}
