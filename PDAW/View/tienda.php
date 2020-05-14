<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../View/css/tienda.css">
    <link rel="stylesheet" href="../View/css/principal.css">
    <!-- El descoloque que sufría el header en la tienda era debido a Bootstrap -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="body">
    
    <?php
        include '../Controller/header.php';
    ?>

    <div class="contenedor">

        <div class="productos">

        <?php
        
        foreach ($data['productos'] as $producto) {
            
            echo '<div class="caja-imagen">';
                echo '<img class="imagen" src="'.$producto->getImagen().'" alt="">';
                echo '<h4 class="titulo">'.$producto->getNombre().'</h4>';
                echo '<h3 class="precio">'.$producto->getPrecio().'€</h3>';
                echo '<div class="botones">';
                    echo '<form action="../Controller/ficha-producto.php" method="post">';
                        echo '<input type="hidden" name="codigo" value="'.$producto->getCodigo().'">';
                        echo '<input class="info" type="submit" value="Más Info">';
                    echo '</form>';
                    echo '<form action="../Controller/añadir_carrito.php" method="post">';
                        echo '<input type="hidden" name="codigo" value="'.$producto->getCodigo().'">';
                        echo '<input class="añadir" type="submit" value="+">';
                    echo '</form>';
                echo '</div>';
            
            echo '</div>';

        }
        
        ?>

        </div>

    </div>

<script type="text/javascript" src="../View/JS/principal.js"></script>
</body>
</html>