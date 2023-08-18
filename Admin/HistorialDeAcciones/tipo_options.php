<?php
options();
function options()
{
  include("../php/conexion.php");

  $consulta = "select cod_usuario,responsable from ki11892154_db_Sorteos.usuarios";

  $resultado = mysqli_query($conexion, $consulta);

  echo "
      <button onclick='Movimientos_usuario_tabla(`%`)'  class='selected rounded-lg w-full border border-gray-200   block p-2  mt-2 hover:bg-white '> 
      Todo
       </button>
      ";

  while ($row = mysqli_fetch_assoc($resultado)) {
    echo "
        <button onclick='Movimientos_usuario_tabla(" . $row['cod_usuario'] . ")' id='options' class=' selected rounded-lg w-full border border-gray-200  block p-2  mt-2   hover:bg-white'> 
       " . $row['responsable'] . "
        </button>

        ";
  }

  echo "
<script>

$('.btn-show-alert').click();
const buttons = document.querySelectorAll('.selected');
buttons.forEach((button) => {
  button.addEventListener('click', () => {
    buttons.forEach((button) => {
      button.classList.remove('bg-white');
    });

    button.classList.toggle('bg-white');
  });
});





";
}
