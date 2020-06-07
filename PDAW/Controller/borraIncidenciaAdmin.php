<?php
    include '../Model/Incidencia.php';

    if (isset($_POST['confirmacion'])) {
        $incidencia = Incidencia::getIncidenciaById($_POST['id']);
        $incidencia->delete();
        header('Location: ../Controller/gestion_incidencias.php');
    }else{
        $id = $_REQUEST['id'];
        include '../View/confBorrInciAdmin.php';
    }
?>