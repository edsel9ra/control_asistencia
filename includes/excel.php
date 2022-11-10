<?php

require_once("_db.php");
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte_asistencia.xls");
?>

<table class="table table-striped" id="table_id">

    <thead>
        <tr>
            <th>Identificacion</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Hora Ingreso</th>
            <th>Asistencia</th>
        </tr>
    </thead>
    <tbody>

        <?php

        $conexion = mysqli_connect("localhost", "root", "", "control_asistencia");
        $SQL = "SELECT * FROM asistentes";
        $dato = mysqli_query($conexion, $SQL);

        if ($dato->num_rows > 0) {
            while ($fila = mysqli_fetch_array($dato)) {

        ?>
                <tr>
                    <td><?php echo $fila['asistente_id']; ?></td>
                    <td><?php echo $fila['nombres_asistente']; ?></td>
                    <td><?php echo $fila['apellidos_asistente']; ?></td>
                    <td><?php echo $fila['hora_ingreso']; ?></td>
                    <td><?php echo $fila['confirmacion']; ?></td>
            <?php
            }
        }
