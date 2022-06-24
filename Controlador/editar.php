<?php

include("../Modelo/db.php");

$inscripcionFecha     = '';
$nombre               = '';
$raza                 = '';
$sexo                 = '';
$edad                 = '';
$nombreDueño          = '';
$concursosAnteriores  = '';
$id = '';

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM doge WHERE id=$id";
  $result = mysqli_query($conexion, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);

    $inscripcionFecha     = $row['inscripcionFecha'];
    $nombre               = $row['nombre'];
    $raza                 = $row['raza'];
    $sexo                 = $row['sexo'];
    $edad                 = $row['edad'];
    $nombreDueño          = $row['nombreDueño'];
    $concursosAnteriores  = $row['concursosAnteriores'];
  }
}

if (isset($_POST['actualizar'])) {

  $id = $_POST['id'];

  $inscripcionFecha     = $_POST['inscripcionFecha'];
  $nombre               = $_POST['nombre'];
  $raza                 = $_POST['raza'];
  $sexo                 = $_POST['sexo'];
  $edad                 = $_POST['edad'];
  $nombreDueño          = $_POST['nombreDueño'];
  $concursosAnteriores  = $_POST['concursosAnteriores'];

  $query = "UPDATE doge set inscripcionFecha = '$inscripcionFecha', nombre = '$nombre', raza = '$raza', sexo = '$sexo', edad = '$edad', nombreDueño = '$nombreDueño', concursosAnteriores = '$concursosAnteriores' WHERE id=$id";
  mysqli_query($conexion, $query);
  $_SESSION['message'] = 'Task Updated Successfully';
  $_SESSION['message_type'] = 'warning';
  header('Location: ../index.php');
}

?>