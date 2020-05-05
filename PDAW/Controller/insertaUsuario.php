<?php
include_once '../Model/Usuario.php';
$usuario = new Usuario($_POST['nombre'], $_POST['usuario'],$_POST['contraseña'], $_POST['email'],$_POST['direccion'], $_POST['telefono']);
$usuario2 = Usuario::getUsuarioByUsuario($_POST['usuario'], $_POST['email']);

if ($usuario2 == false) {

    $usuario->insert();
    header("Location: ../Controller/principal.php");
    
}else{
    
    if ($usuario->getUsuario() == $usuario2->getUsuario() && $usuario->getEmail() == $usuario2->getEmail()) {
        header("Location: ../Controller/register.php?existeusuario&existeemail");
    }else if ($usuario->getUsuario() == $usuario2->getUsuario() && $usuario->getEmail() != $usuario2->getEmail()) {
        header("Location: ../Controller/register.php?existeusuario");
    }else if ($usuario->getUsuario() != $usuario2->getUsuario() && $usuario->getEmail() == $usuario2->getEmail()) {
        header("Location: ../Controller/register.php?existeemail");
    }
    
}

?>