<?php
    include '../Model/Incidencia.php';

    if (isset($_POST['confirmacion'])) {
        $incidencia = Incidencia::getIncidenciaById($_POST['id']);
        $incidencia->delete();
        header('Location: ../Controller/incidencias_usuario.php');
    }else{
        $id = $_REQUEST['id'];
        include '../View/confBorrInciUsuario.php';
    }
?>