<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../Controller/index.php");
    }
    if (isset($_POST['codigo'])) {
        $_SESSION['ficha'] = $_POST['codigo'];
    }
    echo $_SESSION['ficha'];
    include '../Model/Producto.php';
    $producto = Producto::getProductoByCodigo($_SESSION['ficha']);
    include "../View/ficha-producto.php";
?>
