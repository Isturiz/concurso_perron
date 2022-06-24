<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>CONCURSO PERRÓN</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <!-- BOOTSTRAP 5.1.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- FONT AWESOEM -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>

  <?php require_once '../Modelo/db.php'?> 

  <?php require_once '../Controlador/editar.php'?> 


  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="">CONCURSO PERRÓN</a>
    </div>
  </nav>

  <div class="col-md-12">
    <div class="container mt-3 px-5">

      <!-- Formulario de registro estudiante -->
      <form action="../Controlador/editar.php" class="row px-5" method="POST">

        <!-- Datos del estudiante -->
        <div class="mt-3 col-md-12">
          <p class="fw-bold form-label fs-4">Editar datos perrones:</p>
        </div>

        <div class="mb-3 col-md-3">
          <label 
            for="inscripcionFecha" 
            class="form-label">
            Fecha de inscripción
          </label>
          <input 
            type="date" 
            class="form-control"
            id="inscripcionFecha"
            name="inscripcionFecha"
            value="<?php echo $inscripcionFecha; ?>">
        </div>

        <div class="mb-3 col-md-3">
          <label 
            for="nombre"
            class="form-label">
            Nombre
          </label>
          <input 
            type="text"
            class="form-control" 
            id="nombre"
            name="nombre"
            value="<?php echo $nombre; ?>">
        </div>

        <div class="mb-3 col-md-3">
          <label 
            for="raza" 
            class="form-label">
            Raza
          </label>
          <input 
            type="text" 
            class="form-control"
            id="raza"
            name="raza"
            value="<?php echo $raza; ?>">
        </div>

        <div class="mb-3 col-md-3">
          <label 
            for="sexo" 
            class="form-label">
            Sexo
          </label>
          <input 
            type="text" 
            class="form-control" 
            id="sexo"
            name="sexo"
            value="<?php echo $sexo; ?>">
        </div>

        <div class="mb-3 col-md-3">
          <label 
            for="edad" 
            class="form-label">
            Edad
          </label>
          <input 
            type="number"
            class="form-control"
            id="edad"
            name="edad"
            value="<?php echo $edad; ?>">
        </div>

        <div class="mb-3 col-md-3">
          <label
            for="nombreDueño"
            class="form-label">
            Nombre del dueño
          </label>
          <input 
            type="text"
            class="form-control"
            id="nombreDueño"
            name="nombreDueño"
            value="<?php echo $nombreDueño; ?>">
        </div>

        <div class="mb-3 col-md-6">
          <label 
            for="concursosAnteriores" 
            class="form-label">
            Cantidad de concursos anteriores
          </label>
          <input
            type="number" 
            class="form-control" 
            id="concursosAnteriores" 
            name="concursosAnteriores"
            value="<?php echo $concursosAnteriores; ?>">
        </div>

        <input
          type="numer"
          class="invisible"
          name="id"
          value="<?php echo $id;?>">
        </input>

        <!-- Editar -->
        <input
          type="submit"
          class="btn btn-success mt-4" 
          name="actualizar" 
          value="Editar"
        >

        <input
          type="submit"
          class="btn btn-secondary mt-4" 
          name="actualizar" 
          value="Cancelar edición"
        >
      </form>
    </div>
  </div>

</body>