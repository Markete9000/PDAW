<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../Controller/index.php");
    }

    include '../Model/Usuario.php';

    if (isset($_POST['usuario'])) {
        $usuario = Usuario::getUsuarioByUsuario($_POST['usuario']);
        include '../View/formModUsuario.php';
    }else{
        include '../View/formUsuario.php';
    }
?>