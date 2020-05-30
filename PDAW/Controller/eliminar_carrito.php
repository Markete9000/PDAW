<?php
    session_start();
    include '../Model/Producto.php';
    include '../Model/Carrito.php';

    $carrito = Carrito::getCarritoByUsuario($_SESSION['usuario']);
    $productos = explode(';', $carrito->getProductos());
    foreach ($productos as $producto) {
        $division = explode('-', $producto);
        $array[$division[0]] = $division[1];
    }
    $array[$_POST['codigo']]--;
    $cadena = "";
    $cont = 0;
    foreach ($array as $codigo => $cantidad) {
        if ($cont == 0) {
            if ($cantidad > 0) {
                $cont++;
                $cadena = $cadena.$codigo.'-'.$cantidad; 
            }
        }else{
            if ($cantidad > 0) {
                $cadena = $cadena.';'.$codigo.'-'.$cantidad;
            }
        }
    }

    $carrito->setProductos($cadena);

    if ($carrito->getProductos() == "") {
        $carrito->delete();
    }else{
        $carrito->update();
    }

    header('Location:' . getenv('HTTP_REFERER'));
?>