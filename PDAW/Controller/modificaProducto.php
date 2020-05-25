<?php
    include '../Model/Producto.php';

    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $tipo = $_POST['tipo'];

    $producto = new Producto($codigo, $nombre, $descripcion, $precio, $stock, "" , $tipo);

    $producto->update($codigo);

    header('Location: ../Controller/gestion_productos.php');
?>