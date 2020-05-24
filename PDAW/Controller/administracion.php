<?php
    session_start();
    if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] != 'admin') {
        header("Location: ../Controller/principal.php");
    }
    include '../View/administracion.php';
?>
