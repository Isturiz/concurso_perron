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

  <?php require_once 'Modelo/db.php'?> 

  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="">
        <i class="fas fa-dog"></i>
        CONCURSO PERRÓN
      </a>
    </div>
  </nav>

  <?php require_once 'Vista/registro.php'?>

  <hr>

  <?php require_once 'Vista/tabla.php'?>

</body>