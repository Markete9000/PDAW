<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../Controller/index.php");
    }

    include '../Model/Pedido.php';
    include '../Model/Producto.php';

    $pedido = Pedido::getPedidoById($_POST['id']);

    $productos = explode(';', $pedido->getProductos());
    foreach ($productos as $producto) {
        $division = explode('-', $producto);
        $array[$division[0]] = $division[1];
    }

    $i = 0;
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
    }

    include '../View/ver_pedido.php';
?>