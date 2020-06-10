<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../View/css/principal.css">
    <link rel="stylesheet" href="../View/css/carrito.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body class="body">
    <?php
        include '../Controller/header.php';
    ?>
    <div class="contenedor">
        <div class="carrito">
        <h2 class="h2">Carrito de <?=$_SESSION['usuario']?></h2>
            <?php
            if (isset($data['productos'])) {
                foreach ($data['productos'] as $producto) {
                    echo '<div class="producto">';
                        echo '<div class="cajaimagen">';
                            echo '<img class="imagen" src="'.$producto->getImagen().'" alt="">';
                        echo '</div>';
                        echo '<div class="cajainfo">';
                            echo '<h3>'.$producto->getNombre().'</h3>';
                        echo '</div>';
                        echo '<div class="cajabotones">';
                            echo '<form action="../Controller/eliminar_carrito.php" method="post">';
                            echo '<input type="hidden" name="codigo" value="'.$producto->getCodigo().'">';
                            echo '<input class="eliminar" type="submit" value="-">';
                            echo '</form>';
                            echo '<h2>'.$cantidades[$i].'</h2>';
                            echo '<form action="../Controller/añadir_carrito.php" method="post">';
                            echo '<input type="hidden" name="codigo" value="'.$producto->getCodigo().'">';
                            echo '<input class="añadir" type="submit" value="+">';
                            echo '</form>';
                        echo '</div>';
                    echo '</div>';
                    $i++;
                }
            }
            if (isset($totalAPagar)) {
                echo '<div class="pago">';
                    echo '<h3 class="h3">Total: &nbsp</h3><h3 class="precio">'.$totalAPagar.'€</h3>';
                    echo '<div class="final">';
                        echo '<form action="../Controller/añadir_pedido.php" method="post">';
                            echo '<input class="añadir pedido" type="submit" value="Realizar pedido">';
                        echo '</form>';
                    echo '</div>';
                echo '</div>';
            }else{
                echo '<div class="vacio">
                    <h1>Tienes el carrito vacío, ¡¡Vaya a la tienda y añada algo a él!!</h1>
                    </div>';
            }
            ?>
        </div>
    </div>
    <script type="text/javascript" src="../View/JS/principal.js"></script>
</body>
</html>