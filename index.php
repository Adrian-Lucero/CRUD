<?php
include "model/conexion.php";
include "model/config.php";
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Link de bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <!-- icones fontwansone -->
  <script src="https://kit.fontawesome.com/47ac9a08e9.js" crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

  <!-- Mi css -->
  <link rel="stylesheet" href="css/style.css" />

  <title>Mi cafeteria</title>
</head>

<body>
  <header>
    <div class="header">
      <img src="img/coffee-logo.webp" alt="">
      <h1>Mi cafeteria</h1>
      <nav class="nav">
        <ul>
          <li><a href="#">Inicio</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <div class="content">
      <div class="d-flex search">
        <form action="" class=" tm-1 d-flex" method="POST" >
          <label for="" class="p-1">Nombre:</label>
          <input type="text" id="" class="form-control from-input m-2 border" name="nombre">
          <label for="" class="p-2">Precio <i class="fa-solid fa-dollar-sign m-2"></i> </label>
          <input type="number" id="" class="form-control from-input m-2 border" name="precio" id="precioo" step="any">
          <label for="" class="m-2">Fecha de registro:</label>
          <input type="date" id="" class="form-control from-input from-input m-2 border" placeholder="dd/mm/aaaa" name="fecha">
          <div href="" type="button" class="btn  btn-primary position"><i class="fa-solid fa-magnifying-glass"></i><input type="submit" class="submit" name="btn-buscar"></div>
        </form>
        <a href="opcion.php" type="button" class="btn btn-right m-b btn-primary">Agregar</a>
      </div>
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Tamaño</th>
            <th>Fecha de Registro</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include "controllers/view.php";
          ?>
        </tbody>
      </table>
    </div>
  </main>


</body>
<script src="js/validacion_numero.js"></script>

</html>