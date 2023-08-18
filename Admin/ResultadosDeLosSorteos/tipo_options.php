<?php
      include("../php/conexion.php");
      $tipo = $_POST['tipo'];



      if ($tipo != "%") {
        $consulta = "select id_sorteo,nombre from ki11892154_db_Sorteos.id_sorteos  where activo = 1 and tipo ='$tipo'";
      }else{
        $consulta = "select id_sorteo,nombre from ki11892154_db_Sorteos.id_sorteos  where activo = 1";
      }

   

      $resultado = mysqli_query($conexion, $consulta);



      echo "
      <button onclick='resultados_de_los_sorteos_tabla(0)'  class='selected rounded-lg w-full border border-gray-200   block p-2  mt-2 hover:bg-white '> 
      Todo
       </button>
      ";

      while ($row = mysqli_fetch_assoc($resultado)) {
        echo "
        <button onclick='resultados_de_los_sorteos_tabla(".$row['id_sorteo'].")' id='options' class=' selected rounded-lg w-full border border-gray-200  block p-2  mt-2   hover:bg-white'> 
       " . $row['nombre'] . "
        </button>

        ";
      }

echo"
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



      ?>