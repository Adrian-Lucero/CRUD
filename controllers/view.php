<?php
$sentencia_extra = "WHERE estado ='disponible'";

if (isset($_POST['btn-buscar'])) {
  $nombre =  ucwords(($_POST['nombre']));
  $precio =$_POST['precio'];
  $fecha = $_POST['fecha'];

  if (!empty($nombre)) {
    $sentencia_extra .= "AND nombre LIKE '%$nombre%'";
  }

  if (!empty($precio)) {
    $sentencia_extra .= "AND precio LIKE '%$precio%'";
  }
  if (!empty($fecha)) {
    $sentencia_extra .= "AND date_registro = '$fecha'";
  }
}

$sentencia = "SELECT * FROM cafe " . $sentencia_extra;
$resultado = mysqli_query($conn, $sentencia);
$HTML = '';
if ($resultado) {

  while ($datos = mysqli_fetch_array($resultado)) {

    $HTML .= '
    <tr>
    <th>' . $datos['nombre'] . '</th>
    <th><i class="fa-solid fa-dollar-sign m-2"></i>' . $datos['precio'] . '</th>
    <th>' . $datos['Tamaño'] . '</th>
    <th>' . $datos['date_registro'] . '</th>
    <th>
      <a href="opcion.php?id=' . $datos['id'] . '&token=' . hash_hmac('sha1', $datos['id'], KEY_TOKEN) . '" class="btn btn-primary btn-circle"><i class="fa fa-pen"></i></a>
      <a href="controllers/Delete.php?id=' . $datos['id'] . '&token=' . hash_hmac('sha1', $datos['id'], KEY_TOKEN) . '"  class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a>
    </th>
  </tr>';
  }
  echo $HTML;
}
