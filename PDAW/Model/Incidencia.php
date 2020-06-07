<?php

include_once '../Model/ayoDB.php';

class Incidencia{
    
    private $id;
    private $usuario;
    private $asunto;
    private $incidente;
    private $fecha;

    public function __construct($id="", $usuario="", $asunto="", $incidente="", $fecha=""){
        $this->id = $id;
        $this->usuario = $usuario;
        $this->asunto = $asunto;
        $this->incidente = $incidente;
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

    public function getAsunto(){
        return $this->asunto;
    }
    public function setAsunto($asunto){
        $this->asunto = $asunto;
    }

    public function getIncidente(){
        return $this->incidente;
    }
    public function setIncidente($incidente){
        $this->incidente = $incidente;
    }

    public function getFecha(){
        return date('d/m/Y', strtotime($this->fecha));
    }
    public function setFecha($fecha){
        $this->fecha = $fecha;
    }


    public function insert(){
        $conexion = ayoDB::connectDB();
        $insercion = "INSERT INTO incidencia (id, usuario, asunto, incidente, fecha) VALUES ('".$this->id."', '".$this->usuario."', '".$this->asunto."', '".$this->incidente."', '".$this->fecha."')";
        $conexion->exec($insercion);
    }

    public function delete(){
        $conexion = ayoDB::connectDB();
        $borrado = "DELETE FROM incidencia WHERE id='".$this->id."'";
        $conexion->exec($borrado);
    }

    public function update(){
        $conexion = ayoDB::connectDB();
        $modificado = "UPDATE incidencia SET asunto='".$this->asunto."', incidente='".$this->incidente."' WHERE id='".$this->id."'";
        $conexion->exec($modificado);
    }

    public static function getIncidenciasByUsuario($usuario){
        $conexion = ayoDB::connectDB();
        $consulta = $conexion->query("SELECT * FROM incidencia WHERE usuario='".$usuario."'");
        $data['incidencias'] = [];
        while ($incidencias = $consulta->fetchObject()) {
            $data['incidencias'][] = new Incidencia($incidencias->id, $incidencias->usuario, $incidencias->asunto, $incidencias->incidente, $incidencias->fecha);
        }
        return $data['incidencias'];
    }

    public static function getIncidenciaById($id){
        $conexion = ayoDB::connectDB();
        $consulta = $conexion->query("SELECT * FROM incidencia WHERE id='".$id."'");
        $incidencia;
        while ($incidencias = $consulta->fetchObject()) {
            $incidencia = new Incidencia($incidencias->id, $incidencias->usuario, $incidencias->asunto, $incidencias->incidente, $incidencias->fecha);
        }
        return $incidencia;
    }

    public static function getIncidenciasByFiltro($filtro){
        $conexion = ayoDB::connectDB();
        $consulta = $conexion->query("SELECT * FROM incidencia WHERE id LIKE '%".$filtro."%' OR usuario LIKE '%".$filtro."%'");
        $data['incidencias'] = [];
        while ($incidencias = $consulta->fetchObject()) {
            $data['incidencias'][] = new Incidencia($incidencias->id, $incidencias->usuario, $incidencias->asunto, $incidencias->incidente, $incidencias->fecha);
        }
        return $data['incidencias'];
    }

    public static function getIncidenciasWithLimit($limite){
        $conexion = ayoDB::connectDB();
        $consulta = $conexion->query("SELECT * FROM incidencia LIMIT ".$limite.",5");
        $data['incidencias'] = [];
        while ($incidencias = $consulta->fetchObject()) {
            $data['incidencias'][] = new Incidencia($incidencias->id, $incidencias->usuario, $incidencias->asunto, $incidencias->incidente, $incidencias->fecha);
        }
        return $data['incidencias'];
    }

    public static function getCantidadDeIncidencias(){
        $conexion = ayoDB::connectDB();
        $consulta = $conexion->query("SELECT * FROM incidencia");
        $tamaño = $consulta->rowCount();
        return $tamaño;
    }

}