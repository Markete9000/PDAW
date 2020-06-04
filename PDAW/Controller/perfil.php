<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../Controller/index.php");
    }
    include '../Model/Usuario.php';
    $usuario = Usuario::getUsuarioByUsuario($_SESSION['usuario']);

    // USAR ESTA MISMA PÁGINA PARA MOSTRAR TANTO LOS DATOS PERSONALES, COMO LAS INCIDENCIAS COMO LOS PEDIDOS

    include '../View/perfil.php';
?>