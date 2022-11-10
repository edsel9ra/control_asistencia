<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="../DataTables/css/dataTables.bootstrap4.min.css">

  <link rel="stylesheet" href="../css/es.css">
  <link rel="stylesheet" href="../css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
  <link href="./css/bootstrap.css" rel="stylesheet">
  <link href="./css/fontawesome-all.css" rel="stylesheet">

  <script src="../js/jquery.min.js"></script>
  <script src="../js/resp/bootstrap.min.js"></script>

  <title>Asistentes</title>
</head>

<body>
  <div class="container">
    <div class="col-15">
      <h1>Lista de Asistentes</h1>
      <div>
        <form method="POST" action="../includes/excel.php">
          <button type="submit" class="btn btn-lg">EXPORTAR LISTA A EXCEL >>> <i class="fa fa-file-excel" aria-hidden="true"></i></button>
        </form>
      </div>
    </div>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "control_asistencia");
    $where = "";
    if (isset($_GET['enviar'])) {
      $busqueda = $_GET['busqueda'];
      if (isset($_GET['busqueda'])) {
        $where = "WHERE asistentes.asistente_id LIKE '%" . $busqueda . "%' OR nombres_asistente LIKE '%" . $busqueda . "%'
                  OR apellidos_asistente LIKE '%" . $busqueda . "%'";
      }
    }
    ?>
    <table class="table table_id" id="table_id">
      <thead>
        <tr>
          <th>Identificación</th>
          <th>Nombres</th>
          <th>Apellidos</th>
          <th>Hora Ingreso</th>
          <th>Asistencia</th>
          <th>Acciones</th>

        </tr>
      </thead>
      <tbody>

        <?php

        $conexion = mysqli_connect("localhost", "root", "", "control_asistencia");
        $SQL = mysqli_query($conexion, "SELECT * FROM asistentes");

        while ($fila = mysqli_fetch_assoc($SQL)) :

        ?>
          <tr>
            <td><?php echo $fila['asistente_id']; ?></td>
            <td><?php echo $fila['nombres_asistente']; ?></td>
            <td><?php echo $fila['apellidos_asistente']; ?></td>
            <td><?php echo $fila['hora_ingreso']; ?></td>
            <td><?php echo $fila['confirmacion']; ?></td>
            <td>
              <form method="POST" action="editar_user.php?id=<?php echo $fila['asistente_id'] ?> ">
                <button type="submit" class="btn btn-lg"><i class="fa fa-edit" aria-hidden="true"></i></button>
              </form>
            </td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
  <script src="../package/dist/sweetalert2.all.js"></script>
  <script src="../package/dist/sweetalert2.all.min.js"></script>
  <script src="../package/jquery-3.6.0.min.js"></script>

  <script type="text/javascript" src="../DataTables/js/datatables.min.js"></script>
  <script type="text/javascript" src="../DataTables/js/jquery.dataTables.min.js"></script>
  <script src="../DataTables/js/dataTables.bootstrap4.min.js"></script>

  <script src="../js/page.js"></script>
  <script src="../js/buscador.js"></script>
  <script src="../js/asistant.js"></script>
  <script src="../js/resp/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
  <script src="../js/resp/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
  <script src="../js/resp/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->

</body>

</html>