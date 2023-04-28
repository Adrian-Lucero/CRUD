<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "micafeteria";

// creación de conexion
$conn = new mysqli($servername, $username, $password,$database);

// verificación de conección
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>