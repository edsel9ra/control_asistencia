<?php
$id = $_GET['id'];
$conexion = mysqli_connect("localhost", "root", "", "control_asistencia");
$consulta = "SELECT * FROM asistentes WHERE asistente_id = $id";
$resultado = mysqli_query($conexion, $consulta);
$usuario = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Asistencia</title>

    <link rel="stylesheet" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/fontawesome-all.css" rel="stylesheet">
    <link href="./css/swiper.css" rel="stylesheet">
    <link href="./css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/es.css">
</head>

<body id="page-top">
    <form action="../includes/_functions.php" method="POST">
        <div id="login">
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <h2 class="text-center">Registrar Asistencia</h2>
                            <div class="form-group">
                                <label for="asistente_id" class="form-label">Identificación</label>
                                <input type="text" id="asistente_id" name="asistente_id" class="form-control" value="<?php echo $usuario['asistente_id']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nombres_asistente">Nombres</label>
                                <input type="text" name="nombres_asistente" id="nombres_asistente" class="form-control" placeholder="" value="<?php echo $usuario['nombres_asistente']; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="apellidos_asistente" class="form-label">Apellidos</label>
                                <input type="text" id="apellidos_asistente" name="apellidos_asistente" class="form-control" value="<?php echo $usuario['apellidos_asistente']; ?>" disabled>

                            </div>
                            <div class="form-group">
                                <label for="confirmacion" class="form-label">Confirmación de Asistencia a la Fiesta</label>
                                <div class="col-sm-10">
                                    <label class="radio-inline">
                                        <input type="radio" id="confirmacion" name="confirmacion" value="SI" <?php if ($usuario['confirmacion'] == 'SI') echo 'checked'; ?>> SI
                                    </label>

                                    <label class="radio-inline">
                                        <input type="radio" id="confirmacion" name="confirmacion" value="NO" <?php if ($usuario['confirmacion'] == 'NO') echo 'checked'; ?>> NO
                                    </label>
                                </div>
                                <input type="hidden" name="accion" value="editar_registro">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success form-control">CONFIRMAR ELECCIÓN</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>