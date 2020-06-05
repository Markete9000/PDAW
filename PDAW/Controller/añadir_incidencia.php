<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../Controller/index.php");
    }
    include '../Model/Incidencia.php';
    $incidencia = new Incidencia('', $_SESSION['usuario'], $_POST['asunto'], $_POST['incidencia'], date('Y/m/d'));
    $incidencia->insert();
    header('Location: ../Controller/incidencias_usuario.php');
?>