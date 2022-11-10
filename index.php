<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/es.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/fontawesome-all.css" rel="stylesheet">
    <link rel="stylesheet" href="./package/dist/sweetalert2.css">
</head>

<body data-spy="scroll" data-target=".fixed-top" class="container">

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="text-container">
                    <h1>ASIST-APP</h1>
                </div> <!-- end of text-container -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of header -->

    <!-- Features -->
    <div id="features" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>¡Bienvenidos!</h2>
                    <p class="p-heading">Esta App utiliza una base de datos donde se encuentra todo el personal que confirmo su asistencia, con anterioridad a la fiesta de fin del <strong>Grupo FABILU</strong>. 
                    Consiste de un buscador que al momento de ingresar el número de identificación, tambien se puede buscar por nombres y/o apellidos, muestra el registro filtrado para realizar la confirmación de la asistencia. 
                    Adicionalmente se puede realizar un reporte en Excel de toda la base de datos para que puedan ser manejados facilmente.</p>
                </div> <!-- end of div -->
            </div> <!-- end of div -->
            <div class="row">
                <div class="container" align="center">
                    <form method="POST" action="views/user.php">
                        <button type="submit" class="btn btn-primary btn-lg form-control"><i class="fa fa-arrow-right" aria-hidden="true"></i> INGRESAR <i class="fa fa-arrow-left" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-4">
                <img class="img-fluid" src="https://img.freepik.com/foto-gratis/amigos-tintinean-vasos-bebida-bar-moderno_1150-18971.jpg?w=2000" alt="alternative">
                </div> <!-- end of col -->
                <div class="col-lg-4">
                    <img class="img-fluid" src="https://img.freepik.com/fotos-premium/jarra-cerveza-celebracion-bebida-cerveza-concepto-celebracion-fuego-color-claro-espacio-copia_24883-1780.jpg?w=2000" alt="alternative">
                </div> <!-- end of col -->
                <div class="col-lg-4">
                <img class="img-fluid" src="https://img.freepik.com/fotos-premium/bailarina-energica-luz-glamour-dinamico_1098-4307.jpg?w=2000" alt="alternative">
                </div> <!-- end of col -->
            </div>
            <div class="row">

            </div>
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of features -->

    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2022 - Desarrollado por el Área de Gestión TIC Clínica Colombia ES - Todos los derechos reservados</p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright -->
    <!-- end of copyright -->

</body>

</html>