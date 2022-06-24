<?php

require_once('../Modelo/db.php');

if (isset($_POST['registrar'])) {

  $inscripcionFecha     = $_POST['inscripcionFecha'];
  $nombre               = $_POST['nombre'];
  $raza                 = $_POST['raza'];
  $sexo                 = $_POST['sexo'];
  $edad                 = $_POST['edad'];
  $nombreDueño          = $_POST['nombreDueño'];
  $concursosAnteriores  = $_POST['concursosAnteriores'];

/*   echo $inscripcionFecha;
  echo $nombre;
  echo $raza;
  echo $sexo;
  echo $edad;
  echo $nombreDueño;
  echo $concursosAnteriores; */
  
  $query = "INSERT INTO doge(inscripcionFecha, nombre, raza, sexo, edad, nombreDueño, concursosAnteriores) VALUES ('$inscripcionFecha', '$nombre', '$raza', '$sexo', '$edad', '$nombreDueño', '$concursosAnteriores')";
  
  /* echo $query; */

  $resultado = mysqli_query($conexion, $query);
  

  if(!$resultado) {
    die("Query Failed.");
  }
  
  
  $_SESSION['message'] = 'Task Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: ../index.php');
  
 
}

?>