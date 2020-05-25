<?php
    session_start();
    if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] != 'admin') {
        header("Location: ../Controller/index.php");
    }

    include '../Model/Producto.php';

    if (isset($_POST['filtro'])) {
        
        $data['productos'] = Producto::getProductosByFiltro($_POST['filtro']);
        $data['cantidad'] = 0;

    }else{

        if (!isset($_SESSION['limite'])) {
            $_SESSION['limite'] = 0;
            $data['productos'] = Producto::getProductosWithLimit($_SESSION['limite']);
        }
    
        if (isset($_POST['siguiente'])) {
            $_SESSION['limite'] += 5;
            $data['cantidad'] = Producto::getCantidadDeProductos();
            if ($_SESSION['limite'] > $data['cantidad']) {
                $_SESSION['limite'] -= 5;
            }
            $data['productos'] = Producto::getProductosWithLimit($_SESSION['limite']);
            $data['cantidad'] = Producto::getCantidadDeProductos();
        }else if (isset($_POST['anterior'])) {
            $_SESSION['limite'] -= 5;
            if ($_SESSION['limite'] < 0) {
                $_SESSION['limite'] = 0;
            }
            $data['productos'] = Producto::getProductosWithLimit($_SESSION['limite']);
            $data['cantidad'] = Producto::getCantidadDeProductos();
        }else if (!isset($_SESSION['siguiente']) && !isset($_SESSION['anterior'])){
            $data['productos'] = Producto::getProductosWithLimit($_SESSION['limite']);
            $data['cantidad'] = Producto::getCantidadDeProductos();
        }

    }

    
        
    include '../View/gestion_productos.php';
?>