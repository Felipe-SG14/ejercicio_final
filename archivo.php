<?php 

  //IP_HOST    localhost
  //Usuario    id18851713_admin
  //Password   BJTCUMF4hjJEA5_
  //BD         id18851713_tsm_devops
  $datos = json_decode(file_get_contents('php://input'), true);
  print_r($datos);

  if(isset($datos["ID"]) && isset($datos["Puntuacion"]) && isset($datos["Nombre"]))
  {
    echo "Los valores del JSON existen\n";
  }
  else
  {
    echo "Error en la URL\n";
  }

  $conexion = mysqli_connect('localhost','id18851713_admin','U+j&a4U%YcK*xF+R','id18851713_tsm_devops');

  $sql = "INSERT INTO `EJERCICIO` (`ID`,`Puntuacion`,`Nombre`) VALUES ('{$datos["ID"]}','{$datos["Puntuacion"]}','{$datos["Nombre"]}')";

  // Check connection
  if (mysqli_connect_errno()) 
  {
    echo "error al conectar\n";
  }
  else
  {
    echo "Se conecto bien\n";

    if(mysqli_query($conexion,$sql))
    {
      echo "Se hizo el insert\n";
    }
    else
    {
      echo "No se pudo hacer el insert\n";
      echo $sql;
    }
  }
?>