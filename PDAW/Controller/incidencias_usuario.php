<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../Controller/index.php");
    }

    include '../Model/Incidencia.php';
    
    $data['incidencias'] = Incidencia::getIncidenciasByUsuario($_SESSION['usuario']);

    include '../View/incidencias_usuario.php';
?>