<?php
    //print_r($_POST);
    if( empty($_POST["user"]) ||  empty($_POST["password"])){
        header('Location: logeo.html?mensaje=falta');
        exit();
    }

    include_once 'conexion.php';
    $user = $_POST['user'];
    $passw = $_POST['password'];
    
    $sentencia = $conn->prepare("SELECT * FROM usuario where login=? and password=?");
    $sentencia->bind_param("ss", $user, $passw);
    $sentencia->execute();
    $resultado = $sentencia->get_result();

    if ($resultado->num_rows > 0) {
        header('Location: usuario.php?mensaje=listo');
    } else {
        header('Location: logeo.html?mensaje=error');
        exit();
    }
    
?>