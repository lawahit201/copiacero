<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Tabla de Candidatos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
</head>
<body>
  <div class="p-4">
    <table class="table align-middle">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido Materno</th>
          <th scope="col">Apellido Paterno</th>
          <th scope="col">Correo Electrónico</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Dirección</th>
          <th scope="col" colspan="2">Opciones</th>
        </tr>
      </thead>
      <tbody>
        <?php
          include 'conexion.php';
          $sentencia = "SELECT * FROM candidato";
          $resultado = $conn->query($sentencia);

          if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
        ?>
              <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["nombre"]; ?></td>
                <td><?php echo $row["apepat"]; ?></td>
                <td><?php echo $row["apemat"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["tel"]; ?></td>
                <td><?php echo $row["direccion"]; ?></td>
                <td>
                  <a href="editar.php?id=<?php echo $row["id"]; ?>" class="text-success">
                    Editar
                  </a>
                </td>
                <td>
                  <a onclick="return confirm('¿Estás seguro de eliminar?');" href="eliminar.php?id=<?php echo $row["id"]; ?>" class="text-danger">
                    Eliminar
                  </a>
                </td>
              </tr>
        <?php
            }
          } else {
            echo "<tr><td colspan='8'>No hay candidatos registrados</td></tr>";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
