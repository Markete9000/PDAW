<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="../View/css/formProducto.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>  
<body class="body">

    <form class="formulario" action="../Controller/insertaProducto.php" method="post" enctype="multipart/form-data">
    
        <h1>Producto Nuevo</h1>

        <?php
        if (isset($_GET['insertado'])) {
            echo '<div id="cookies" class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Producto añadido</strong>
                    </button>
                </div>';
        }
        ?>
        
        <div class="contenedor">

            <div class="input-contenedor">
                <input type="text" name="nombre" placeholder="Nombre" maxlength="90">  
            </div>
            
            <div class="input-contenedor">
                <input type="text" name="descripcion" placeholder="Descripción">
            </div>

            <div class="input-contenedor">
                <input type="text" name="precio" placeholder="Precio">
            </div>

            <div class="input-contenedor">
                <input type="number" name="stock" placeholder="Stock">
            </div>

            <h5>Imagen de producto</h5>
            <div class="input-contenedor input-imagen">
                <input type="file" class="archivo" name="imagen" id="imagen">
            </div>

            <h5>Tipo de producto</h5>
            <div class="input-contenedor">
                <select name="tipo" class="select">
                    <option value="placa base">Placa Base</option>
                    <option value="procesador">Procesador</option>
                    <option value="disco duro">Disco Duro</option>
                    <option value="tarjeta grafica">Tarjeta Gráfica</option>
                    <option value="memoria ram">Memoria RAM</option>
                    <option value="torre">Torre</option>
                    <option value="ventilacion">Ventilación</option>
                    <option value="fuente de alimentacion">Fuente de Alimentación</option>
                    <option value="monitore">Monitor</option>
                    <option value="teclado">Teclado</option>
                    <option value="raton">Ratón</option>
                    <option value="smartphone">Smartphone</option>
                    <option value="movil basico">Móvil Básico</option>
                    <option value="movil mayores">Móvil para Mayores</option>
                </select>
            </div>

            <input type="submit" value="Añadir" class="button">

        </div>

    </form>

</body>
</html>