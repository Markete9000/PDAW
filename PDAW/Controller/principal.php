<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../Controller/index.php");
    }
    include '../View/principal.php';
?>