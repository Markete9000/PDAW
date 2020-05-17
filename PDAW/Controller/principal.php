<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../Controller/index.php");
    }
    echo $_SESSION['usuario']." - ".$_SESSION['tipo'];
    include '../View/principal.php';
?>