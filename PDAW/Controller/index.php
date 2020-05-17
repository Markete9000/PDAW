<?php
    session_start();
    if (isset($_SESSION['usuario'])) {
        header("Location: ../Controller/principal.php");
    }
    include '../View/inicio.php';
?>