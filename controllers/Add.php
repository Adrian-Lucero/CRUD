<?php
include "../model/conexion.php";

if (!empty($_POST['btn-registro'])) {

    if (
        !empty($_POST['nombre']) and
        !empty($_POST['tamaño']) and
        !empty($_POST['precio']) and
        !empty($_POST['date'])
    ) {
        $nombre = ucwords($_POST['nombre']) ;
        $tamaño = ucwords($_POST['tamaño']) ;
        $precio = $_POST['precio'];
        $fecha = $_POST['date'];

        $sentencia = "INSERT INTO cafe (nombre,Tamaño,precio,date_registro) VALUES ('$nombre','$tamaño','$precio','$fecha')";
        if (mysqli_query($conn,$sentencia)) {
            header("location: ../");
        }
        else{
            printf(mysqli_error($conn));
        }
        
    }
}
