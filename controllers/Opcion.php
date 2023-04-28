<?php
include "../model/conexion.php";
if (!empty($_POST['btn-opcion'])) {

    $nombre = ucwords($_POST['nombre']);
    $tamaño = ucwords($_POST['tamaño']);
    $precio = $_POST['precio'];
    if (!empty($_POST['date'])) {
        $fecha = $_POST['date'];
    }
    $sentencia = '';

    if (!empty($nombre) and !empty($tamaño) and !empty($precio) and !empty($fecha)) {
        if ($_POST['btn-opcion'] == "Actualizar") {

            $id = $_GET['id'];
            $sentencia = actualizar($id, $nombre, $tamaño, $precio);
            peticion($conn, $sentencia);
        } elseif ($_POST['btn-opcion'] == "Agregar") {

            $sentencia = agregar($nombre, $tamaño, $precio, $fecha);
            peticion($conn, $sentencia);
        }
    }
}

function actualizar($id, $nombre, $tamaño, $precio)
{
    return "UPDATE cafe SET nombre='$nombre', Tamaño='$tamaño', precio = '$precio' WHERE id = '$id'";
}

function agregar($nombre, $tamaño, $precio, $fecha)
{
    return "INSERT INTO cafe (nombre,Tamaño,precio,date_registro) VALUES ('$nombre','$tamaño','$precio','$fecha')";
}

function peticion($conn, $sentencia)
{

    if (mysqli_query($conn, $sentencia)) {
        header("location: ../index.php");
    } else {
        printf(mysqli_error($conn));
    }
}
