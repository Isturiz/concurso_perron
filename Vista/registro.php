<div class="col-md-12">
  <div class="container mt-3 px-5">

    <!-- Formulario de registro estudiante -->
    <form action="Controlador/registro.php" class="row px-5" method="POST">

      <!-- Datos del estudiante -->
      <div class="mt-3 col-md-12">
        <p class="fw-bold form-label fs-4">Datos perrones:</p>
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
          required>
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
          name="nombre">
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
          name="raza">
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
          name="sexo">
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
          required>
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
          name="nombreDueño">
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
          required>
      </div>

      <!-- Registrar -->
      <input
        type="submit" 
        class="btn btn-success mt-4" 
        name="registrar" 
        value="Registrar">

      <!-- Vaciar datos -->
      <button 
        type="reset"
        class="btn btn-danger mt-4"
        >Vaciar datos
      </button>

    </form>
  </div>
</div>