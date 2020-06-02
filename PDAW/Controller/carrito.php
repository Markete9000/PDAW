<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../Controller/index.php");
    }
    include '../Model/Carrito.php';
    include '../Model/Producto.php';

    if (Carrito::existeCarrito($_SESSION['usuario'])) {
        
        $carrito = Carrito::getCarritoByUsuario($_SESSION['usuario']);
        $productos = explode(';', $carrito->getProductos());
        foreach ($productos as $producto) {
            $division = explode('-', $producto);
            $array[$division[0]] = $division[1];
        }
    
        $i = 0;
        $totalAPagar = 0;
        $data['productos'] = [];
        $cantidades;
        foreach ($array as $codigo => $cantidad) {
            $producto = Producto::getProductoByCodigo($codigo);
            $data['productos'][] = $producto;
            if ($producto->getStock() >= $cantidad) {
                $cantidades[] = $cantidad;
            }else{
                $cantidad =$producto->getStock();
                $cantidades[] = $cantidad;
            }
            $totalAPagar += Producto::getProductoByCodigo($codigo)->getPrecio() * $cantidad;
        }

    }
    
    include '../View/carrito.php';
?>