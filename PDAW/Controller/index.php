<?php
    session_start();

    if (isset($_GET['cerrar'])) {
        session_destroy();
    }

    if (isset($_SESSION['usuario'])) {
        header("Location: ../Controller/principal.php");
    }
    include '../View/inicio.php';
?>