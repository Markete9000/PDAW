<?php
    session_start();
    include '../Model/Carrito.php';
    include '../Model/Producto.php';
    include '../Model/Pedido.php';

    $carrito = Carrito::getCarritoByUsuario($_SESSION['usuario']);
    $productos = explode(';', $carrito->getProductos());

    foreach ($productos as $producto) {
        $division = explode('-', $producto);
        $array[$division[0]] = $division[1];
    }
    $auxiliar = Producto::getProductoByCodigo($_POST['codigo']);

?>