<?php
    include '../Model/Producto.php';
    $producto = Producto::getProductoByCodigo($_POST['codigo']);
    include "../View/ficha-producto.php";
?>
