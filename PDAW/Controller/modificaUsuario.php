<?php
    session_start();
    include '../Model/Usuario.php';

    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

    if (isset($_POST['tipo'])) {
        $tipo = $_POST['tipo'];
        $usuario = new Usuario($nombre, $usuario, $contraseña, $email, $direccion, $telefono, $tipo);
        $usuario->update($_POST['userAModificar']);
    }else{
        $aux = Usuario::getUsuarioByUsuario($_SESSION['usuario']);
        $usuario = new Usuario($nombre, $usuario, $contraseña, $email, $direccion, $telefono, $aux->getTipo());
        $usuario->update($_SESSION['usuario']);
    }

    header('Location:' . getenv('HTTP_REFERER'));
?>