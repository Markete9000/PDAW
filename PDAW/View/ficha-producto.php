<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../View/css/principal.css">
    <link rel="stylesheet" href="../View/css/ficha-producto.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="body">
    
    <?php
        include '../Controller/header.php';
    ?>

    <div class="contenedor">
        
        <div class="producto">
            
            <div class="caja-imagen">
                <img class="imagen" src="<?=$producto->getImagen()?>" alt="">
            </div>

            <div class="caja-informacion">

                <div class="titulo">
                    <?php echo $producto->getNombre() ?>
                </div>

                <div class="descripcion">
                    <?php echo $producto->getDescripcion() ?>
                </div>

                <div class="compra">

                    <div class="precio">
                        <?php echo $producto->getPrecio() ?>€
                    </div>
                    <div class="boton">
                        <form action="../Controller/añadir_carrito.php" method="post">
                            <input type="hidden" name="codigo" value="<?=$producto->getCodigo()?>">
                            <input class="añadir" type="submit" value="Comprar">
                        </form>
                    </div>
                    
                </div>

            </div>

        </div>

    </div>



    <script type="text/javascript" src="../View/JS/principal.js"></script>
</body>
</html>