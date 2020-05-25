<?php
    include '../Model/Producto.php';

    if (isset($_POST['confirmacion'])) {
        $producto = Producto::getProductoByCodigo($_POST['codigo']);
        $producto->delete();
        header('Location: ../Controller/gestion_productos.php');
    }else{
        $codigo = $_POST['codigo'];
        include '../View/confirmacionBorradoProducto.php';
        // header('Location: ../Controller/confirmacionBorradoProducto.php?codigo='.$codigo.'');
    }
?>