<?php 
    include "../model/conexion.php";
    include "../model/config.php";
    $token = hash_hmac('sha1',$_GET['id'],KEY_TOKEN);

    if (!empty( $_GET['id']) and ($_GET['token']==$token) ) {
        $id = $_GET['id'];
        $sentencia= "UPDATE cafe SET estado='inhabilitado' WHERE id = '$id'";
        
        if (mysqli_query($conn,$sentencia)) {
            header("location: ../");
        }
    }
