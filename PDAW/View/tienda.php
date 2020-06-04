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

        <div class="contenedor-menu">

            <ul class="menu">

                <li><a>Componentes <i class="icono derecha fa fa-chevron-down"></i></a>
                    <ul>
                        <li><a href="../Controller/tienda.php?producto=placa base">Placas Base</a></li>
                        <li><a href="../Controller/tienda.php?producto=procesador">Procesadores</a></li>
                        <li><a href="../Controller/tienda.php?producto=disco duro">Discos Duros</a></li>
                        <li><a href="../Controller/tienda.php?producto=tarjeta grafica">Tarjetas Gráficas</a></li>
                        <li><a href="../Controller/tienda.php?producto=memoria ram">Memorias RAM</a></li>
                        <li><a href="../Controller/tienda.php?producto=torre">Torres</a></li>
                        <li><a href="../Controller/tienda.php?producto=ventilacion">Ventilación</a></li>
                        <li><a href="../Controller/tienda.php?producto=fuente de alimentacion">Fuentes de alimentación</a></li>
                    </ul>
                </li>

                <li><a>Periféricos <i class="icono derecha fa fa-chevron-down"></i></a>
                    <ul>
                        <li><a href="../Controller/tienda.php?producto=monitor">Monitores</a></li>
                        <li><a href="../Controller/tienda.php?producto=teclado">Teclados</a></li>
                        <li><a href="../Controller/tienda.php?producto=raton">Ratones</a></li>
                    </ul>
                </li>

                <li><a>Smartphones / Telefonía<i class="icono derecha fa fa-chevron-down"></i></a>
                    <ul>
                        <li><a href="../Controller/tienda.php?producto=smartphone">Smartphones</a></li>
                        <li><a href="../Controller/tienda.php?producto=movil basico">Móviles Básicos</a></li>
                        <li><a href="../Controller/tienda.php?producto=movil mayores">Móviles para mayores</a></li>
                    </ul>
                </li>

            </ul>
        </div>

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
                            echo '<input class="añadir" type="submit" value="Comprar">';
                        echo '</form>';
                    echo '</div>';
                    
                echo '</div>';

            }
            ?>

        </div>

    </div>

    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="../View/JS/tienda.js"></script>
    <script src="../View/JS/principal.js"></script>
</body>
</html>