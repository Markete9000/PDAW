<?php
    include_once '../Model/Producto.php';
    $data['productos'] = Producto::getProductos();
    include "../View/tienda.php";
?>

