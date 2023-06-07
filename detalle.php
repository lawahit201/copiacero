<?php
include 'conexion.php';

$rfc = $_POST['rfc'];
$curp = $_POST['curp'];
$nss = $_POST['nss'];

// Obtener el ID del candidato desde el formulario anterior
$lastId = mysqli_insert_id($conn);

// Verificar si el ID del candidato existe en la tabla 'candidato'
$sql = "SELECT id FROM candidato WHERE id = $lastId";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // El ID del candidato existe, realizar la inserción en la tabla 'detalle'
    $sql = "INSERT INTO detalle (RFC, CURP, NSS, id_candidato) VALUES ('$rfc', '$curp', '$nss', $lastId)";

    if (mysqli_query($conn, $sql)) {
        header("Location: experiencia_laboral.html");
    } else {
        echo "Lo sentimos, no se pudo realizar la operación: " . $sql . mysqli_error($conn);
    }
} else {
    // El ID del candidato no existe en la tabla 'candidato'
    echo "El ID del candidato no es válido.";
}

?>