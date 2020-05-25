<?php
    session_start();
    if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] != 'admin') {
        header("Location: ../Controller/index.php");
    }

    include '../Model/Usuario.php';

    if (isset($_POST['filtro'])) {
        
        $data['usuarios'] = Usuario::getUsuariosByFiltro($_POST['filtro']);
        $data['cantidad'] = 0;

    }else{

        if (!isset($_SESSION['limiteUsuarios'])) {
            $_SESSION['limiteUsuarios'] = 0;
            $data['usuarios'] = Usuario::getUsuariosWithLimit($_SESSION['limiteUsuarios']);
        }
    
        if (isset($_POST['siguiente'])) {
            $_SESSION['limiteUsuarios'] += 5;
            $data['cantidad'] = Usuario::getCantidadDeUsuarios();
            if ($_SESSION['limiteUsuarios'] > $data['cantidad']) {
                $_SESSION['limiteUsuarios'] -= 5;
            }
            $data['usuarios'] = Usuario::getUsuariosWithLimit($_SESSION['limiteUsuarios']);
            $data['cantidad'] = Usuario::getCantidadDeUsuarios();
        }else if (isset($_POST['anterior'])) {
            $_SESSION['limiteUsuarios'] -= 5;
            if ($_SESSION['limiteUsuarios'] < 0) {
                $_SESSION['limiteUsuarios'] = 0;
            }
            $data['usuarios'] = Usuario::getUsuariosWithLimit($_SESSION['limiteUsuarios']);
            $data['cantidad'] = Usuario::getCantidadDeUsuarios();
        }else if (!isset($_SESSION['siguiente']) && !isset($_SESSION['anterior'])){
            $data['usuarios'] = Usuario::getUsuariosWithLimit($_SESSION['limiteUsuarios']);
            $data['cantidad'] = Usuario::getCantidadDeUsuarios();
        }

    }
       
    include '../View/gestion_usuarios.php';
?>