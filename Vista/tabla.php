<div class="col-md-10 container">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>

        <th>ID</th>
        <th>Fecha de inscripción</th>
        <th>Nombre</th>
        <th>Raza</th>
        <th>Sexo</th>
        <th>Edad</th>
        <th>Nombre del dueño</th>
        <th>Cantidad de concursos anteriores</th>
        <th>Acción</th>

      </tr>
    </thead>
    <tbody>

      <?php
      $query = "SELECT * FROM doge";
      $result_tasks = mysqli_query($conexion, $query);    

      while($row = mysqli_fetch_assoc($result_tasks))
      { 
      ?>

        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['inscripcionFecha']; ?></td>
          <td><?php echo $row['nombre']; ?></td>
          <td><?php echo $row['raza']; ?></td>
          <td><?php echo $row['sexo']; ?></td>
          <td><?php echo $row['edad']; ?></td>
          <td><?php echo $row['nombreDueño']; ?></td>
          <td><?php echo $row['concursosAnteriores']; ?></td>

          <td>
            <a href="Vista/editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
            <i class="fas fa-paw"></i>
            </a>
            <a href="Controlador/eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">
              <i class="far fa-trash-alt"></i>
            </a>
          </td>
        </tr>

      <?php 
      } 
      ?>

    </tbody>
  </table>
</div>