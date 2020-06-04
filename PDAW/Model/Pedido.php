<?php

include_once '../Model/ayoDB.php';

class Pedido{
    
    private $id;
    private $usuario;
    private $productos;
    private $precio;
    private $fecha;

    public function __construct($id="", $usuario="", $productos="", $precio="", $fecha=""){
        $this->id = $id;
        $this->usuario = $usuario;
        $this->productos = $productos;
        $this->precio = $precio;
        $this->fecha = $fecha;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }

    public function getUsuario(){
        return $this->usuario;
    }
    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getProductos(){
        return $this->productos;
    }
    public function setProductos($productos){
        $this->productos = $productos;
    }

    public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
    }

    public function getFecha(){
        return date('d/m/Y', strtotime($this->fecha));
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }


    public function insert(){
        $conexion = ayoDB::connectDB();
        $insercion = "INSERT INTO pedido (id, usuario, productos, precio, fecha) VALUES ('".$this->id."', '".$this->usuario."', '".$this->productos."', '".$this->precio."', '".$this->fecha."')";
        $conexion->exec($insercion);
    }

    public function delete(){
        $conexion = ayoDB::connectDB();
        $borrado = "DELETE FROM pedido WHERE id='".$this->id."'";
        $conexion->exec($borrado);
    }

    public function update(){
        $conexion = ayoDB::connectDB();
        $modificado = "UPDATE pedido SET id='".$this->id."', usuario='".$this->usuario."', productos='".$this->productos."', precio='".$this->precio."', fecha='".$this->fecha."' WHERE id='".$this->id."'";
        $conexion->exec($modificado);
    }

    public static function getPedidosByUsuario($usuario){
        $conexion = ayoDB::connectDB();
        $consulta = $conexion->query("SELECT * FROM pedido WHERE usuario='".$usuario."'");
        $data['pedidos'] = [];
        while ($pedidos = $consulta->fetchObject()) {
            $data['pedidos'][] = new Pedido($pedidos->id, $pedidos->usuario, $pedidos->productos, $pedidos->precio, $pedidos->fecha);
        }
        return $data['pedidos'];
    }

    public static function getPedidoById($id){
        $conexion = ayoDB::connectDB();
        $consulta = $conexion->query("SELECT * FROM pedido WHERE id='".$id."'");
        $pedido = "";
        while ($pedidos = $consulta->fetchObject()) {
            $pedido = new Pedido($pedidos->id, $pedidos->usuario, $pedidos->productos, $pedidos->precio, $pedidos->fecha);
        }
        return $pedido;
    }

}