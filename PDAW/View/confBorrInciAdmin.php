<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="../View/css/formProducto.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>  
<body class="body">
    <div class="formulario">
        <h1>Confirmación de Borrado</h1>
        <div class="contenedor">
            <h3>¿Es seguro que desea borrar la incidencia?</h3>
            <div class="formularios">
                <form action="../Controller/borraIncidenciaAdmin.php" method="post">
                    <input type="hidden" name="confirmacion">
                    <input type="hidden" name="id" value="<?=$id?>">
                    <input class="afirmacion" type="submit" value="Si">
                </form>
                <form action="../Controller/gestion_incidencias.php" method="post">
                    <input class="borrar" type="submit" value="No">
                </form>
            </div>
        </div>
    </div>
</body>
</html>