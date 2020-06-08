<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../Controller/index.php");
    }

    include '../Model/Producto.php';

    $data['productos'] = Producto::getProductosRandom();

    include '../View/principal.php';
?>