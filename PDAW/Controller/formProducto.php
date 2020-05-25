<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../Controller/index.php");
    }

    include '../Model/Producto.php';

    if (isset($_POST['codigo'])) {
        $producto = Producto::getProductoByCodigo($_POST['codigo']);
        $nombre = $producto->getNombre();
        $descripcion = $producto->getDescripcion();
        $precio = $producto->getPrecio();
        $stock = $producto->getStock();
        $tipo = $producto->getTipo();
        include '../View/formModProducto.php';
    }else{
        include '../View/formProducto.php';
    }
?>