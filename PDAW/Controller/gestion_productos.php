<?php
    session_start();
    if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] != 'admin') {
        header("Location: ../Controller/index.php");
    }
    include '../Model/Producto.php';
    $data['productos'] = Producto::getProductos();
    include '../View/gestion_productos.php';
?>