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
    <form class="formulario" action="../Controller/modificaProducto.php" method="post">
        <h1>Producto a Modificar</h1>
        <div class="contenedor">
            <input type="hidden" name="codigo" value="<?=$producto->getCodigo()?>">
            <div class="input-contenedor">
                <input type="text" name="nombre" value="<?=$producto->getNombre()?>" maxlength="90">  
            </div>
            <div class="input-contenedor">
                <input type="text" name="descripcion" value="<?=$producto->getDescripcion()?>">
            </div>
            <div class="input-contenedor">
                <input type="text" name="precio" value="<?=$producto->getPrecio()?>">
            </div>
            <div class="input-contenedor">
                <input type="number" name="stock" value="<?=$producto->getStock()?>">
            </div>
            <h5>Tipo de producto</h5>
            <div class="input-contenedor" id="ejemplo">
                <select name="tipo" class="select">
                    <option value="Placa base">Placa Base</option>
                    <option value="Procesador">Procesador</option>
                    <option value="Disco duro">Disco Duro</option>
                    <option value="Tarjeta grafica">Tarjeta Gráfica</option>
                    <option value="Memoria ram">Memoria RAM</option>
                    <option value="Torre">Torre</option>
                    <option value="Ventilacion">Ventilación</option>
                    <option value="Fuente de alimentacion">Fuente de Alimentación</option>
                    <option value="Monitor">Monitor</option>
                    <option value="Teclado">Teclado</option>
                    <option value="Raton">Ratón</option>
                    <option value="Smartphone">Smartphone</option>
                    <option value="Movil basico">Móvil Básico</option>
                    <option value="Movil mayores">Móvil para Mayores</option>
                </select>
            </div>
            <input type="submit" value="Modificar" class="button">
        </div>
    </form>
</body>
</html>