<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../Controller/index.php");
    }
    if (isset($_REQUEST['codigo'])) {
        $_SESSION['ficha'] = $_REQUEST['codigo'];
    }
    include '../Model/Producto.php';
    $producto = Producto::getProductoByCodigo($_SESSION['ficha']);
    include "../View/ficha-producto.php";
?>
