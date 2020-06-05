<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../Controller/index.php");
    }

    include '../Model/Pedido.php';

    $salto = '&nbsp';
    $data['pedidos'] = Pedido::getPedidosByUsuario($_SESSION['usuario']);

    include '../View/pedidos_usuario.php';
?>