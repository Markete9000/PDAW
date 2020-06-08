<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../View/css/principal.css">
    <link rel="stylesheet" href="../View/css/gestion.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>  
<body class="body">
    <?php
        include '../Controller/header.php';
    ?>
    <div class="contenedor">
        <div class="formulario">
            <form class="formulario" action="../Controller/gestion_incidencias.php" method="post">
                <input class="filtro" type="text" name="filtro" placeholder="Filtrar por id o por usuario">
                <input class="añadir filtrar" type="submit" value="Filtrar">
            </form>
        </div>
        <div class="caja_tabla primera">
            <table class="tabla">
                <tr class="titulo"><td colspan="5"><h2>Gestión de las Incidencias de Ayo's</h2></td></tr>
                <tr id="cabecera" class="cabecera"><td>Id</td><td>Usuario</td><td>Fecha</td><td></td><td></td></tr>
                <?php
                    foreach ($data['incidencias'] as $incidencia) {
                        ?>
                        <tr class="tr">
                        <td class="td"><b><?=$incidencia->getId()?></td>
                        <td class="td"><?=$incidencia->getUsuario()?></td>
                        <td class="td"><?=$incidencia->getAsunto()?></td>
                        <td class="td">
                            <div>
                                <form class="e" action="../Controller/ver_incidencia.php" method="post">
                                    <input id="enviar" name="<?=$incidencia->getId()?>" class="añadir segunda" type="button" value="Ver Incidencia">
                                    <div id="box">
                                        <div class="cajas">
                                            <h2>Asunto: &nbsp&nbsp</h2>
                                        </div>
                                        <div id="cajasasunto" class="cajas¡"></div>  
                                        <div class="cajas">
                                            <h2>Incidente: &nbsp&nbsp</h2>                                            
                                        </div>  
                                        <div id="cajasincidente" class="cajas"></div> 
                                        <a id="close" class="close">Close</a>
                                    </div>
                                </form>
                            </div>
                        </td>
                        <td class="td">
                            <form action="../Controller/borraIncidenciaAdmin.php" method="post">
                                <input type="hidden" name="id" value="<?=$incidencia->getId()?>">
                                <input class="borrar" type="submit" value="Borrar">
                            </form>
                            </td>
                        </tr>
                        <?php
                    }
                    echo '<tr><td></td> <td></td>';
                ?>
            </table>
        </div>
        <div class="caja_tabla">
            <table class="tabla">
                <tr>
                    <td>
                        <?php
                            if ($_SESSION['limiteIncidencias'] >= 5) {
                                echo '<form action="../Controller/gestion_incidencias.php" method="post">';
                                echo '<input type="hidden" name="anterior">';
                                echo '<input class="limite" type="submit" value="Anterior">';
                                echo '</form>';
                            }
                        ?>
                    </td>
                    <td></td>
                    <td>
                        <?php
                            if ($_SESSION['limiteIncidencias'] <= $data['cantidad'] - 6) {
                                echo '<form action="../Controller/gestion_incidencias.php" method="post">';
                                echo '<input type="hidden" name="siguiente">';
                                echo '<input class="limite" type="submit" value="Siguiente">';
                                echo '</form>';
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <?php
        include '../Controller/footer.php';
    ?>
<script type="text/javascript" src="../View/JS/ver_incidencia_admin.js"></script>
<script type="text/javascript" src="../View/JS/principal.js"></script>
</body>
</html>