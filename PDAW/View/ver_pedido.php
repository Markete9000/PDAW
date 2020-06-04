<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../View/css/principal.css">
    <link rel="stylesheet" href="../View/css/ver_pedido.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="body">
    
    <?php
        include '../Controller/header.php';
    ?>

    <div class="contenedor">

        <div class="pedido">
            
        <h2 class="h2">Pedido #<?=$pedido->getId()?></h2>

            <?php
            if (isset($data['productos'])) {

                foreach ($data['productos'] as $producto) {
                    echo '<div class="producto">';
    
                        echo '<div class="cajaimagen">';
                            echo '<img class="imagen" src="'.$producto->getImagen().'" alt="">';
                        echo '</div>';
    
                        echo '<div class="cajainfo">';
                            echo '<h3 class="nombre">'.$producto->getNombre().'</h3>';
                            echo '<h3 class="precio">'.$producto->getPrecio().'€</h3>';
                        echo '</div>';

                        echo '<div class="cajaboton">';
                            echo '<form action="../Controller/ficha-producto.php" method="post">
                                <input type="hidden" name="codigo" value="'.$producto->getCodigo().'">
                                <input class="info" type="submit" value="Ver Producto">
                            </form>';
                        echo '</div>';
    
    
                    echo '</div>';
                    $i++;
                }

            }
            
            ?>
            
        </div>

    </div>
        
    <script type="text/javascript" src="../View/JS/principal.js"></script>
</body>
</html>