<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bolsa_trabajo";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener el valor del nombre buscado desde el formulario
$nombre = $_POST['nombre'];

$conn->set_charset("utf8mb4"); // Establecer el conjunto de caracteres adecuado

// Realizar la consulta
$sql = "SELECT * FROM universidad WHERE nombre COLLATE utf8mb4_general_ci LIKE '%$nombre%'";
$result = $conn->query($sql);

// Mostrar los resultados en una tabla
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Nombre</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['nombre'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

$conn->close();
?>
