<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../Controller/index.php");
    }

    include '../Model/Usuario.php';
    include '../Model/Carrito.php';
    include '../Model/Producto.php';
    include '../Model/Pedido.php';

    $carrito = Carrito::getCarritoByUsuario($_SESSION['usuario']);
    $productos = explode(';', $carrito->getProductos());

    foreach ($productos as $producto) {
        $division = explode('-', $producto);
        // $array[$division[0]] = $division[1];
        $auxiliar = new Producto($division[0], '', '', '', $division[1], '', '');
        $producto = Producto::getProductoByCodigo($division[0]);
        if ($producto->getStock() >= $auxiliar->getStock()) {
            $cantidad = $producto->getStock() - $auxiliar->getStock();
        }else{
            $cantidad = 0;
            $division[1] = $producto->getStock();
        }
        $array[$division[0]] = $division[1];
        $producto->updateStock($cantidad);
    }

    $cadena = "";
    $cont = 0;
    $totalAPagar = 0;
    foreach ($array as $codigo => $cantidad) {
        if ($cont == 0) {
            $cont++;
            $cadena = $cadena.$codigo.'-'.$cantidad;
        }else{
            $cadena = $cadena.';'.$codigo.'-'.$cantidad;
        }
        $totalAPagar += Producto::getProductoByCodigo($codigo)->getPrecio() * $cantidad;
    }
    $carrito->setProductos($cadena);
    $pedido = new Pedido('', $_SESSION['usuario'], $carrito->getProductos(), $totalAPagar, date('Y/m/d'));
    $carrito->delete();
    $pedido->insert();

    $usuario = Usuario::getUsuarioByUsuario($_SESSION['usuario']);

    include '../Controller/pedido_correo.php';

    // header('Location: ../Controller/enviar_correo.php');

?>