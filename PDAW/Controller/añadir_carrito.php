<?php
    session_start();
    include '../Model/Producto.php';
    include '../Model/Carrito.php';

    if (!Carrito::existeCarrito($_SESSION['usuario'])) {
        $producto = Producto::getProductoByCodigo($_POST['codigo']);
        if ($producto->getStock() > 0) {
            $productos = $_POST['codigo'].'-1';
            echo $productos;
            $carrito = new Carrito($_SESSION['usuario'], $productos);
            $carrito->insert();
        }
    }else{
        
        $carrito = Carrito::getCarritoByUsuario($_SESSION['usuario']);

        // En caso de que no exista el producto en el carrito se añadirá directamente
        // de lo contrario se divide todo el string del carrito en código-cantidad
        // y después se divide el array de productos, creando un array asociativo
        // con clave (código) y valor (cantidad)
        if (substr_count($carrito->getProductos(), $_POST['codigo']) == 0) {

            $carrito->setProductos($carrito->getProductos().';'.$_POST['codigo'].'-1');
            $carrito->update();

        }else{

            $productos = explode(';', $carrito->getProductos());
            foreach ($productos as $producto) {
                $division = explode('-', $producto);
                $array[$division[0]] = $division[1];
            }
            $array[$_POST['codigo']]++;
            $cadena = "";
            $cont = 0;
            foreach ($array as $codigo => $cantidad) {
                if ($cont == 0) {
                    $cont++;
                    $cadena = $cadena.$codigo.'-'.$cantidad;
                }else{
                    $cadena = $cadena.';'.$codigo.'-'.$cantidad;
                }
            }
            $carrito->setProductos($cadena);
            $carrito->update();
        }

    }
    header('Location:' . getenv('HTTP_REFERER'));
?>