<?php
session_start();
include_once '../Model/Usuario.php';
$usuario = new Usuario($_POST['nombre'], $_POST['usuario'],$_POST['contraseña'], $_POST['email'],$_POST['direccion'], $_POST['telefono']);
$usuario2 = Usuario::getUsuarioByUsuario($_POST['usuario'], $_POST['email']);

if ($usuario2 == false) {

    $usuario->insert();

    if (isset($_POST['admin'])) {
        header('Location: ../Controller/formUsuario.php?insertado');
    }else{
        $_SESSION['usuario'] = $usuario->getUsuario();
        $_SESSION['tipo'] = $usuario->getTipo();
        header("Location: ../Controller/principal.php");
    }
    
}else{
    
    if ($usuario->getUsuario() == $usuario2->getUsuario() && $usuario->getEmail() == $usuario2->getEmail()) {
        if (isset($_POST['admin'])) {
            header("Location: ../Controller/formUsuario.php?existeusuario&existeemail");
        }else{
            header("Location: ../Controller/register.php?existeusuario&existeemail");
        }
    }else if ($usuario->getUsuario() == $usuario2->getUsuario() && $usuario->getEmail() != $usuario2->getEmail()) {
        if (isset($_POST['admin'])) {
            header("Location: ../Controller/formUsuario.php?existeusuario");
        }else{
            header("Location: ../Controller/register.php?existeusuario");
        }
    }else if ($usuario->getUsuario() != $usuario2->getUsuario() && $usuario->getEmail() == $usuario2->getEmail()) {
        if (isset($_POST['admin'])) {
            header("Location: ../Controller/formUsuario.php?existeemail");
        }else{
            header("Location: ../Controller/register.php?existeemail");
        }
    }
    
}

?>