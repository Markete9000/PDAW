<?php

include_once '../Model/ayoDB.php';

class Carrito{
    
    private $usuario;
    private $productos;

    public function __construct($usuario="", $productos=""){
        $this->usuario = $usuario;
        $this->productos = $productos;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function getProductos(){
        return $this->productos;
    }

    public function setProductos($productos){
        $this->productos = $productos;
    }

    public function insert(){
        $conexion = ayoDB::connectDB();
        $insercion = "INSERT INTO carrito (usuario, productos) VALUES ('".$this->usuario."', '".$this->productos."')";
        $conexion->exec($insercion);
    }

    public function delete(){
        $conexion = ayoDB::connectDB();
        $borrado = "DELETE FROM carrito WHERE usuario='".$this->usuario."'";
        $conexion->exec($borrado);
    }

    public function update(){
        $conexion = ayoDB::connectDB();
        $modificado = "UPDATE carrito SET productos='".$this->productos."' WHERE usuario='".$this->usuario."'";
        $conexion->exec($modificado);
    }
    
    public function getCarritoByUsuario($usuario){
        $conexion = ayoDB::connectDB();
        $consulta = $conexion->query("SELECT * FROM carrito WHERE usuario='".$usuario."'");
        while ($carritos = $consulta->fetchObject()) {
            $carrito = new Carrito($carritos->usuario, $carritos->productos);
        }
        return $carrito;
    }

    public static function existeCarrito($usuario){
        $conexion = ayoDB::connectDB();
        $consulta = $conexion->query("SELECT * FROM carrito WHERE usuario='".$usuario."'");
        if ($consulta->rowCount() > 0) {
            return true;
        }else{
            return false;
        }
    }
    
}

?>