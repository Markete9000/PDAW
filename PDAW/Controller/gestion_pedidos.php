<?php
    session_start();
    if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] != 'admin') {
        header("Location: ../Controller/index.php");
    }

    include '../Model/Pedido.php';

    if (isset($_POST['filtro'])) {
        $data['pedidos'] = Pedido::getPedidosByFiltro($_POST['filtro']);
        $data['cantidad'] = 0;

    }else{

        if (!isset($_SESSION['limitePedidos'])) {
            $_SESSION['limitePedidos'] = 0;
            $data['pedidos'] = Pedido::getPedidosWithLimit($_SESSION['limitePedidos']);
        }
    
        if (isset($_POST['siguiente'])) {
            $_SESSION['limitePedidos'] += 5;
            $data['cantidad'] = Pedido::getCantidadDePedidos();
            if ($_SESSION['limitePedidos'] > $data['cantidad']) {
                $_SESSION['limitePedidos'] -= 5;
            }
            $data['pedidos'] = Pedido::getPedidosWithLimit($_SESSION['limitePedidos']);
            $data['cantidad'] = Pedido::getCantidadDePedidos();
        }else if (isset($_POST['anterior'])) {
            $_SESSION['limitePedidos'] -= 5;
            if ($_SESSION['limitePedidos'] < 0) {
                $_SESSION['limitePedidos'] = 0;
            }
            $data['pedidos'] = Pedido::getPedidosWithLimit($_SESSION['limitePedidos']);
            $data['cantidad'] = Pedido::getCantidadDePedidos();
        }else if (!isset($_SESSION['siguiente']) && !isset($_SESSION['anterior'])){
            $data['pedidos'] = Pedido::getPedidosWithLimit($_SESSION['limitePedidos']);
            $data['cantidad'] = Pedido::getCantidadDePedidos();
        }

    }

    include '../View/gestion_pedidos.php';
?>