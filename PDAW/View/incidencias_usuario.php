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
		<div class="caja">
			<div class="titulo">
				<h1>Incidencias</h1>
			</div>

			<div class="incidencias">
                <?php
                if (isset($data['incidencias'])) {

                    foreach ($data['incidencias'] as $incidencia) {
                        echo '<div class="incidencia">';

                            echo '<div class="caja1">';
                                echo '<h3 class="h3">Id: </h3>&nbsp&nbsp<h3 class="h3 sinnegrita">#'.$incidencia->getId().'</h3>';
                            echo '</div>';

                            echo '<div class="caja3">';
                                echo '<h3 class="h3">Asunto: </h3>&nbsp<h3 class="h3 sinnegrita precio">'.$incidencia->getAsunto().'</h3>';
                            echo '</div>';

                            echo '<div class="caja2">';
                                echo '<h3 class="h3">Fecha: </h3>&nbsp<h3 class="h3 sinnegrita">'.$incidencia->getFecha().'</h3>';
                            echo '</div>';

                            echo '<div class="caja4">';
                                echo '<form action="../Controller/ver_incidencia.php" method="post">
                                <input type="hidden" name="id" value="'.$incidencia->getID().'">
                                <input class="enviar" type="submit" value="Ver Incidencia">
                                </form>';
                            echo '</div>';

                        echo '</div>';
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
    
<script type="text/javascript" src="../View/JS/principal.js"></script>
</body>
</html>
