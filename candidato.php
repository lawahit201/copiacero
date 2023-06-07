<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$direccion = $_POST['direccion'];

// Consulta para verificar si el correo ya existe en la tabla
$sql = "SELECT * FROM candidato WHERE email = '$email'";
$result = $conn->query($sql);

// Verificar si se encontraron resultados
if ($result->num_rows > 0) {
    // El correo ya existe, mostrar un mensaje de error
    echo "El correo ya está registrado.";
} else {
    // El correo no existe, insertar el nuevo usuario en la tabla
    $sql = "INSERT INTO candidato (nombre, apepat, apemat, email, tel, direccion) VALUES ('$nombre', '$paterno', '$materno', '$email', '$tel', '$direccion')";

    if ($conn->query($sql) === TRUE) {
        //echo "Nuevo usuario insertado correctamente.";
        header('Location: detalle.html');

    } else {
        echo "Error al insertar el usuario: " . $conn->error;
    }
}

$conn->close();
?>
