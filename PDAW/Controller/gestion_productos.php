<?php
    session_start();
    if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] != 'admin') {
        header("Location: ../Controller/index.php");
    }

    include '../Model/Producto.php';

    if (isset($_POST['filtro'])) {
        $data['productos'] = Producto::getProductosByFiltro($_POST['filtro']);
        $data['cantidad'] = 0;
        $_SESSION['limiteProductos'] = 0;

    }else{

        if (!isset($_SESSION['limiteProductos'])) {
            $_SESSION['limiteProductos'] = 0;
            $data['productos'] = Producto::getProductosWithLimit($_SESSION['limiteProductos']);
        }
    
        if (isset($_POST['siguiente'])) {
            $_SESSION['limiteProductos'] += 5;
            $data['cantidad'] = Producto::getCantidadDeProductos();
            if ($_SESSION['limiteProductos'] > $data['cantidad']) {
                $_SESSION['limiteProductos'] -= 5;
            }
            $data['productos'] = Producto::getProductosWithLimit($_SESSION['limiteProductos']);
            $data['cantidad'] = Producto::getCantidadDeProductos();
        }else if (isset($_POST['anterior'])) {
            $_SESSION['limiteProductos'] -= 5;
            if ($_SESSION['limiteProductos'] < 0) {
                $_SESSION['limiteProductos'] = 0;
            }
            $data['productos'] = Producto::getProductosWithLimit($_SESSION['limiteProductos']);
            $data['cantidad'] = Producto::getCantidadDeProductos();
        }else if (!isset($_SESSION['siguiente']) && !isset($_SESSION['anterior'])){
            $data['productos'] = Producto::getProductosWithLimit($_SESSION['limiteProductos']);
            $data['cantidad'] = Producto::getCantidadDeProductos();
        }

    }

    include '../View/gestion_productos.php';
?>