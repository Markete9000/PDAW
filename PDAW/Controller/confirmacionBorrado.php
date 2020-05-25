<?php
    include '../Model/Producto.php';
    if (isset($_POST['codigo'])) {
        $codigo = $_POST['codigo'];
    }
    if (isset($_GET['codigo'])) {
        $codigo = $_GET['codigo'];
    }
    include '../View/confirmacionBorrado.php';
?>