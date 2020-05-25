<?php
    include '../Model/Usuario.php';

    if (isset($_POST['confirmacion'])) {
        $usuario = Usuario::getUsuarioByUsuario($_POST['usuario']);
        $usuario->delete();
        header('Location: ../Controller/gestion_usuarios.php');
    }else{
        $usuario = $_POST['usuario'];
        include '../View/confirmacionBorradoUsuario.php';
    }
?>