<?php

include_once '../Model/ayoDB.php';

class Usuario{
    
    private $nombre;
    private $usuario;
    private $contraseña;
    private $email;
    private $direccion;
    private $telefono;

    public function __construct($nombre="", $usuario="", $contraseña="", $email="", $direccion="", $telefono=""){
        $this->nombre = $nombre;
        $this->usuario = $usuario;
        $this->contraseña = $contraseña;
        $this->email = $email;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->matricula = $nombre;
    }

    public function getUsuario(){
        return $this->usuario;
    }
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getContraseña(){
        return $this->contraseña;
    }
    public function setContraseña($contraseña){
        $this->contraseña = $contraseña;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }

    public function getDireccion(){
        return $this->direccion;
    }
    public function setDireccion($direccion){
        $this->direccion = $direccion;
    }

    public function getTelefono(){
        return $this->telefono;
    }
    public function setTelefono($telefono){
        $this->telefono = $telefono;
    }

    public function insert(){
        $conexion = ayoDB::connectDB();
        $insercion = "INSERT INTO usuario (nombre, usuario, contraseña, email, direccion, telefono) VALUES ('".$this->nombre."', '".$this->usuario."', '".$this->contraseña."', '".$this->email."', '".$this->direccion."', '".$this->telefono."')";
        $conexion->exec($insercion);
    }

    public function delete(){
        $conexion = ayoDB::connectDB();
        $borrado = "DELETE FROM usuario WHERE usuario='".$this->usuario."'";
        $conexion->exec($borrado);
    }

    public function update($usuario){
        $conexion = ayoDB::connectDB();
        $modificado = "UPDATE usuario SET nombre='".$this->nombre."', usuario='".$this->usuario."', contraseña='".$this->contraseña."', email='".$this->email."', direccion='".$this->direccion."', telefono='".$this->telefono."', WHERE usuario='".$usuario."'";
        $conexion->exec($modificado);
    }

    public static function getUsuarioByUsuario($usuario, $email=""){
        $conexion = ayoDB::connectDB();
        if ($email!="") {
            $consulta = $conexion->query("SELECT * FROM usuario WHERE usuario='".$usuario."' OR email='".$email."'");
        }else{
            $consulta = $conexion->query("SELECT * FROM usuario WHERE usuario='".$usuario."'");
        }
        if ($consulta->rowCount() > 0) {
            while ($usuarios = $consulta->fetchObject()) {
                $usuario = new Usuario($usuarios->nombre, $usuarios->usuario, $usuarios->contraseña, $usuarios->email, $usuarios->direccion, $usuarios->telefono);
            }
            return $usuario;
        }else{
            return false;
        }
    }

    public static function getUsuarios(){
        $conexion = ayoDB::connectDB();
        $consulta = $conexion->query("SELECT * FROM usuario");
        $data['usuarios'] = [];
        while ($usuarios = $consulta->fetchObject()) {
            $data['usuarios'][] = new Usuario($usuarios->nombre, $usuarios->usuario, $usuarios->contraseña, $usuarios->email, $usuarios->direccion, $usuarios->telefono);
        }
        return $data['usuarios'];
    }

}

?>