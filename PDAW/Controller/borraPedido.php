<?php
    include '../Model/Pedido.php';

    if (isset($_POST['confirmacion'])) {
        $pedido = Pedido::getPedidoById($_POST['id']);
        $pedido->delete();
        header('Location: ../Controller/gestion_pedidos.php');
    }else{
        $id = $_REQUEST['id'];
        include '../View/confirmacionBorradoPedido.php';
    }
?>