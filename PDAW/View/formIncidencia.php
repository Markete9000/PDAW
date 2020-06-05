<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../View/css/principal.css">
	<link rel="stylesheet" href="../View/css/formIncidencia.css">
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
				<h1>Nueva Incidencia</h1>
			</div>

			<div class="formulario">
                <form action="../Controller/añadir_incidencia.php" method="post">
            
                    <div class="label">
                        <label class="tit" for="asunto">Asunto</label><br>
                        <input type="text" name="asunto" maxlength="30">
                    </div>

                    <div class="label">
                        <label class="tit" for="incidencia">Incidencia</label><br>
                        <input type="text" name="incidencia">
                    </div>

                    <div class="enviar">
                        <input class="añadir" type="submit" value="Enviar">
                    </div>

                </form>
            </div>

            <div class="cajaboton">
                <form action="../Controller/añadir_incidencia" method="post">
                    
                </form>
            </div>
		</div>
    </div>
    
<script type="text/javascript" src="../View/JS/principal.js"></script>
</body>
</html>
