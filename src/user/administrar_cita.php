<?php include("../validate.php"); ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Registro de citas</title>
  <link rel="icon" type="image/png" href="../img/logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="../../img/logo.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../css/appointment_table.css">
</head>

<body>
  <header id="navbar-container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../../index.php">Podología Marcela</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../../index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="appointment.php">Reserva de horas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../log_out.php">Cerrar sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main class="container mt-5">
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Fecha</th>
            <th scope="col">Hora</th>
            <th scope="col">Motivo</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $correo = $_SESSION['correo'];
          $sql = "SELECT * FROM hora WHERE consulta_medica_id IN (SELECT id FROM consulta_medica WHERE paciente_correo = '$correo')"; // Consulta a la base de datos
          $resultado = $conn->query($sql);
          if ($resultado->num_rows > 0) {
            // Crear el contenido de la tabla dinámicamente
            while ($fila = $resultado->fetch_assoc()) {
              echo "<tr>";
              echo "<th scope='row'>" . $fila["id"] . "</th>";
              echo "<td>" . $fila["fecha"] . "</td>";
              echo "<td>" . $fila["hora_fecha"] . "</td>";
              echo "<td>" . $fila["motivo"] . "</td>";
              echo "<td>";
              echo "<form action='../cambiar_hora.php' method='POST' class='d-flex align-items-center'>";
              echo "<input type='hidden' name='id' value='" . $fila["id"] . "'>";
              echo "<div class='d-flex align-items-center'>";
              echo "<input type='date' name='nueva_fecha' required class='form-control mr-2 date-input'>";
              echo "<input type='time' name='nueva_hora' required class='form-control mr-2 time-input'>";
              echo "<input class='btn btn-primary btn-sm mr-2' type='submit' value='Cambiar Hora'>";
              echo "<input class='btn btn-danger btn-sm' type='submit' onclick='eliminarRegistro(" . $fila["id"] . ")' value='Eliminar'>";
              echo "</div>";
              echo "</form>";
              echo "</td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='3'>No se encontraron resultados</td></tr>";
          }
          $conn->close();
          ?>
        </tbody>
      </table>
    </div>
  </main>

  <footer class="footer">
    <div class="copy">2023</div>
    <div class="bottom-links">
      <div class="links">
        <span>Contacto</span>
        <a href="https://web.whatsapp.com/">+56 9 8153 9650</a>
      </div>
      <div class="links">
        <span>Social Links</span>
        <a href="https://www.facebook.com/login/?locale=es_LA"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </footer>

  <script>
    function eliminarRegistro(id) {
      if (confirm('¿Estás seguro de eliminar este registro?')) {
        var form = document.createElement('form');
        form.method = 'POST';
        form.action = '../eliminar_registro.php';
        var input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'id';
        input.value = id;
        form.appendChild(input);
        document.body.appendChild(form);
        form.submit();
      }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
