<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../View/css/principal.css">
	<link rel="stylesheet" href="../View/css/incidencias_usuario.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>  
<body class="body">

    <?php
        include '../Controller/header.php';
    ?>

	<div class="contenedor">
		<div id="caja" class="caja">
			<div id="titulo" class="titulo">
				<h1>Incidencias</h1>
			</div>

			<div id="incidencias" name="incidencias" class="incidencias">
                <?php
                if (isset($data['incidencias'])) {

                    foreach ($data['incidencias'] as $incidencia) {
                        ?>
                        <div id="incidencia" class="incidencia">

                            <div class="caja1">
                                <h3 class="h3">Id: &nbsp&nbsp</h3><h3 class="h3 sinnegrita">#<?=$incidencia->getId()?></h3>
                            </div>

                            <div class="caja3">
                                <h3 class="h3">Asunto: &nbsp</h3><h3 class="h3 sinnegrita precio"><?=$incidencia->getAsunto()?></h3>
                            </div>

                            <div class="caja2">
                                <h3 class="h3">Fecha: &nbsp</h3><h3 class="h3 sinnegrita"><?=$incidencia->getFecha()?></h3>
                            </div>
                            
                            <div>
                                <form action="../Controller/ver_incidencia.php" method="post">
                                    <input id="enviar" name="<?=$incidencia->getId()?>" class="enviar" type="button" value="Ver Incidencia">
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

                            <div class="caja4">
                                <form action="../Controller/borraIncidencia.php" method="post">
                                    <input type="hidden" name="id" value="<?=$incidencia->getId()?>">
                                    <input class="eliminar" type="submit" value="Borrar">
                                </form>
                            </div>

                        </div>
                        <?php
                    }

                }
                ?>
			</div>

            <div class="cajaboton">
                <form action="../Controller/formIncidencia.php" method="post">
                    <input class="añadir" type="submit" value="Nueva Incidencia">
                </form>
            </div>

		</div>
	
    </div>

<script type="text/javascript">
    
</script>
<script type="text/javascript" src="../View/JS/ver_incidencia.js"></script>
<script type="text/javascript" src="../View/JS/principal.js"></script>
</body>
</html>
