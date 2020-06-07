<?php
    session_start();
    if (!isset($_SESSION['usuario']) || $_SESSION['tipo'] != 'admin') {
        header("Location: ../Controller/index.php");
    }

    include '../Model/Incidencia.php';

    if (isset($_POST['filtro'])) {
        $data['incidencias'] = Incidencia::getIncidenciasByFiltro($_POST['filtro']);
        $data['cantidad'] = 0;

    }else{

        if (!isset($_SESSION['limiteIncidencias'])) {
            $_SESSION['limiteIncidencias'] = 0;
            $data['incidencias'] = Incidencia::getIncidenciasWithLimit($_SESSION['limiteIncidencias']);
        }
    
        if (isset($_POST['siguiente'])) {
            $_SESSION['limiteIncidencias'] += 5;
            $data['cantidad'] = Incidencia::getCantidadDeIncidencias();
            if ($_SESSION['limiteIncidencias'] > $data['cantidad']) {
                $_SESSION['limiteIncidencias'] -= 5;
            }
            $data['incidencias'] = Incidencia::getIncidenciasWithLimit($_SESSION['limiteIncidencias']);
            $data['cantidad'] = Incidencia::getCantidadDeIncidencias();
        }else if (isset($_POST['anterior'])) {
            $_SESSION['limiteIncidencias'] -= 5;
            if ($_SESSION['limiteIncidencias'] < 0) {
                $_SESSION['limiteIncidencias'] = 0;
            }
            $data['incidencias'] = Incidencia::getIncidenciasWithLimit($_SESSION['limiteIncidencias']);
            $data['cantidad'] = Incidencia::getCantidadDeIncidencias();
        }else if (!isset($_SESSION['siguiente']) && !isset($_SESSION['anterior'])){
            $data['incidencias'] = Incidencia::getIncidenciasWithLimit($_SESSION['limiteIncidencias']);
            $data['cantidad'] = Incidencia::getCantidadDeIncidencias();
        }

    }

    include '../View/gestion_incidencias.php';
?>