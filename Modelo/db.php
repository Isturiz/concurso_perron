<?php

session_start();

$conexion = mysqli_connect(
  'localhost',
  'root',
  '',
  'concurso'
) or die(mysqli_error($mysqli));


?>