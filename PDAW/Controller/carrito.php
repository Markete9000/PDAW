<?php
    session_start();
    include '../Model/Carrito.php';
    include '../Model/Producto.php';

    if (!Carrito::existeCarrito($_SESSION['usuario'])) {
        
        // Para cuando no haya carrito

    }else{
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
            $data['productos'][] = Producto::getProductoByCodigo($codigo);
            $cantidades[] = $cantidad;
            $totalAPagar += Producto::getProductoByCodigo($codigo)->getPrecio() * $cantidad;
        }
    }
    

    include '../View/carrito.php';
?>