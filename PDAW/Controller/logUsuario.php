<?php
include_once '../Model/Usuario.php';
$usuario = Usuario::getUsuarioByUsuario($_POST['user']);

if ($usuario == false) {

    header("Location: ../Controller/login.php?noexisteuser");
    
}else{
    
    if ($usuario->getUsuario() == $_POST['user'] && $usuario->getContraseña() == $_POST['pass']) {
        session_start();
        $_SESSION['usuario'] = $_POST['user'];
        $_SESSION['tipo'] = $usuario->getTipo();
        header("Location: ../Controller/principal.php");
    }else if ($usuario->getUsuario() == $_POST['user'] && $usuario->getContraseña() != $_POST['pass']) {
        header("Location: ../Controller/login.php?fallopass");
    }
    
}

?>