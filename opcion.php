<?php
include "model/config.php";
include "model/conexion.php";

$opcion = '';

// variables para datos del formulario
$nombre = "";
$tamaño = "";
$precio = "";
$date = "";
$id = "";


if (!empty($_GET['id']) and !empty($_GET['token'])) {
  $opcion = 'Actualizar';

  $token = hash_hmac('sha1', $_GET['id'], KEY_TOKEN);
  $id = $_GET['id'];

  if ($token == $_GET['token']) {

    $sentencia_busqueda = "SELECT * FROM cafe WHERE estado ='disponible' AND  id = '$id'";
    $resultado = mysqli_query($conn, $sentencia_busqueda);
    $datos = mysqli_fetch_assoc($resultado);

    $nombre = $datos['nombre'];
    $tamaño = $datos['Tamaño'];
    $precio = $datos['precio'];
    $date = $datos['date_registro'];
    $id = $datos['id'];
  }
} else {
  $opcion = 'Agregar';
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
          <li><a href="index.php">Inicio</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="modal activo" id="tarjeta" tabindex="-1">
    <div class="modal-dialog">
      <form action="controllers/Opcion.php<?php echo "?id=".$id ?>" method="POST" id="formulario">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"><?php echo $opcion; ?> Bebida</h5>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" value="<?php echo ($nombre != "") ? $nombre : $nombre;  ?>" name="nombre" >
            </div>
            <div class="mb-3 d-flex">
              <div class="selector mx-auto p-1">
                <label class="form-label">Tamaño</label>
                <input type="text" class="form-control" id="tamaño" value="<?php echo ($tamaño != "") ? $tamaño : "";  ?>" name="tamaño">
              </div>
              <div class="selector m-auto p-1">
                <label class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio" value="<?php echo ($precio != "") ? $precio : "";  ?>" placeholder="0" name="precio" step="any">
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label">Fecha de Registro</label>
              <input type="date" class="form-control" id="fecha" value="<?php echo ($date != "") ? $date : "";  ?>" name="date" <?php echo ($date != "") ? 'readonly' : "";  ?>>
            </div>

          </div>
          <div class="modal-footer">
            <input  type="submit" class="btn btn-primary" value="<?php echo $opcion ?>" name="btn-opcion">
          </div>
        </div>
      </form>
    </div>
  </div>
  <script src="js/app.js"></script>
</body>
</html>