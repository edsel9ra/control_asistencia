<?php

require_once ("_db.php");

if (isset($_POST['accion'])){ 
    switch ($_POST['accion']){
        //casos de registros
        case 'editar_registro':
            editar_registro();
            break;
		}

	}

    function editar_registro() {
		$conexion = mysqli_connect("localhost", "edsel", "54mu5*4r4n", "control_asistencia");
		extract($_POST);
		$consulta="UPDATE asistentes SET confirmacion = '$confirmacion', 
		hora_ingreso = CASE
		 	WHEN confirmacion='SI' AND hora_ingreso IS NULL THEN now()
			WHEN confirmacion='SI' AND hora_ingreso IS NOT NULL THEN hora_ingreso
			WHEN confirmacion!='NO' AND hora_ingreso IS NULL THEN hora_ingreso 
			END WHERE asistente_id = '$id'";
		mysqli_query($conexion, $consulta);
		header('Location: ../views/user.php');

}