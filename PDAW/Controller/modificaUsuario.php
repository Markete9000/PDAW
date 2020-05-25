<?php
    include '../Model/Usuario.php';

    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $tipo = $_POST['tipo'];

    $usuario = new Usuario($nombre, $usuario, $contraseña, $email, $direccion, $telefono , $tipo);

    $usuario->update($_POST['userAModificar']);

    header('Location: ../Controller/gestion_usuarios.php');
?>