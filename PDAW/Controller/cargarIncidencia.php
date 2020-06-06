<?php
header('Content-Type: text/html; charset=UTF-8');

include_once '../Model/Incidencia.php';

$id = $_REQUEST['id'];

$incidencia = Incidencia::getIncidenciaById($id);

$datos = "Asunto: ".$incidencia->getAsunto()." \n Incidente: ".$incidencia->getIncidente();

$incidencia = array(
    "asunto"=> $incidencia->getAsunto(),
    "incidente"=> $incidencia->getIncidente()
);
    


$datos = json_encode($incidencia);
echo $datos;

?>