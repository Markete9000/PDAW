<?php

include_once '../Model/ayoDB.php';

class Producto{
    
    private $codigo;
    private $nombre;
    private $descripcion;
    private $precio;
    private $stock;
    private $imagen;
    private $tipo;

    public function __construct($codigo="", $nombre="", $descripcion="", $precio="", $stock="", $imagen="", $tipo=""){
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->stock = $stock;
        $this->imagen = $imagen;
        $this->tipo = $tipo;
    }

    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($codigo){
        $this->matricula = $codigo;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($descripcion){
        $this->descripcion = $descripcion;
    }

    public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($precio){
        $this->precio = $precio;
    }

    public function getStock(){
        return $this->stock;
    }
    public function setStock($stock){
        $this->stock = $stock;
    }

    public function getImagen(){
        return $this->imagen;
    }
    public function setImagen($imagen){
        $this->imagen = $imagen;
    }

    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function insert(){
        $conexion = ayoDB::connectDB();
        $insercion = "INSERT INTO producto (codigo, nombre, descripcion, precio, stock, imagen, tipo) VALUES ('".$this->codigo."', '".$this->nombre."', '".$this->descripcion."', '".$this->precio."', '".$this->stock."', '".$this->imagen."', '".$this->tipo."')";
        $conexion->exec($insercion);
    }

    public function delete(){
        $conexion = ayoDB::connectDB();
        $borrado = "DELETE FROM producto WHERE codigo='".$this->codigo."'";
        $conexion->exec($borrado);
    }

    public function update(){
        $conexion = ayoDB::connectDB();
        $modificado = "UPDATE producto SET nombre='".$this->nombre."', descripcion='".$this->descripcion."', precio='".$this->precio."', stock='".$this->stock."', tipo='".$this->tipo."' WHERE codigo='".$this->codigo."'";
        $conexion->exec($modificado);
    }

    public function updateStock($cantidad){
        $conexion = ayoDB::connectDB();
        $consulta = $conexion->query("UPDATE producto SET stock=".$cantidad." WHERE codigo='".$this->codigo."'");
        while ($productos = $consulta->fetchObject()) {
            $producto = new Producto($productos->codigo, $productos->nombre, $productos->descripcion, $productos->precio , $productos->stock, $productos->imagen, $productos->tipo);
        }
        return $producto;
    }

    public static function getProductoByCodigo($codigo){
        $conexion = ayoDB::connectDB();
        $consulta = $conexion->query("SELECT * FROM producto WHERE codigo='".$codigo."'");
        while ($productos = $consulta->fetchObject()) {
            $producto = new Producto($productos->codigo, $productos->nombre, $productos->descripcion, $productos->precio , $productos->stock, $productos->imagen, $productos->tipo);
        }
        return $producto;
    }

    public static function getProductosByTipo($tipo){
        $conexion = ayoDB::connectDB();
        $consulta = $conexion->query("SELECT * FROM producto WHERE tipo='".$tipo."'");
        $data['productos'] = [];
        while ($productos = $consulta->fetchObject()) {
            $data['productos'][] = new Producto($productos->codigo, $productos->nombre, $productos->descripcion, $productos->precio, $productos->stock, $productos->imagen, $productos->tipo);
        }
        return $data['productos'];
    }

    public static function existeProducto($codigo){
        $conexion = ayoDB::connectDB();
        $consulta = $conexion->query("SELECT * FROM producto WHERE codigo='".$codigo."'");
        if ($consulta->rowCount() > 0) {
            return false;
        }else{
            return true;
        }
    }

    public static function getProductos(){
        $conexion = ayoDB::connectDB();
        $consulta = $conexion->query("SELECT * FROM producto");
        $data['productos'] = [];
        while ($productos = $consulta->fetchObject()) {
            $data['productos'][] = new Producto($productos->codigo, $productos->nombre, $productos->descripcion, $productos->precio, $productos->stock, $productos->imagen, $productos->tipo);
        }
        return $data['productos'];
    }

    public static function getProductosByFiltro($filtro){
        $conexion = ayoDB::connectDB();
        $consulta = $conexion->query("SELECT * FROM producto WHERE nombre LIKE '%".$filtro."%' OR codigo LIKE '%".$filtro."%'");
        $data['productos'] = [];
        while ($productos = $consulta->fetchObject()) {
            $data['productos'][] = new Producto($productos->codigo, $productos->nombre, $productos->descripcion, $productos->precio, $productos->stock, $productos->imagen, $productos->tipo);
        }
        return $data['productos'];
    }

    public static function getProductosWithLimit($limite){
        $conexion = ayoDB::connectDB();
        $consulta = $conexion->query("SELECT * FROM producto LIMIT ".$limite.",5");
        $data['productos'] = [];
        while ($productos = $consulta->fetchObject()) {
            $data['productos'][] = new Producto($productos->codigo, $productos->nombre, $productos->descripcion, $productos->precio, $productos->stock, $productos->imagen, $productos->tipo);
        }
        return $data['productos'];
    }

    public static function getCantidadDeProductos(){
        $conexion = ayoDB::connectDB();
        $consulta = $conexion->query("SELECT * FROM producto");
        $tamaño = $consulta->rowCount();
        return $tamaño;
    }

}

?>