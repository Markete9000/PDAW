<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../Controller/index.php");
    }
    include_once '../Model/Producto.php';
    if (!isset($_GET['producto'])) {
        $data['productos'] = Producto::getProductos();
    }else{
        $data['productos'] = Producto::getProductosByTipo($_GET['producto']);
    }
    
    include "../View/tienda.php";
?>

