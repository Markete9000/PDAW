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
                <input class="formProduct" type="text" name="nombre" placeholder="Nombre" maxlength="90">  
            </div>
            
            <div class="input-contenedor">
                <input class="formProduct" type="text" name="descripcion" placeholder="Descripción">
            </div>

            <div class="input-contenedor">
                <input class="formProduct" type="text" name="precio" placeholder="Precio">
            </div>

            <div class="input-contenedor">
                <input class="formProduct" type="number" name="stock" placeholder="Stock">
            </div>

            <h5>Imagen de producto</h5>
            <div class="input-contenedor input-imagen">
                <input type="file" class="formProduct" name="imagen" id="imagen">
            </div>

            <div class="input-contenedor">
                <input class="formProduct" type="text" name="tipo" placeholder="Tipo">
            </div>

            <input type="submit" value="Añadir" class="button">

        </div>

    </form>

</body>
</html>