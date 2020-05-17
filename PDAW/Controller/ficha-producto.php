<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../Controller/index.php");
    }
    include '../Model/Producto.php';
    $producto = Producto::getProductoByCodigo($_POST['codigo']);
    include "../View/ficha-producto.php";
?>
