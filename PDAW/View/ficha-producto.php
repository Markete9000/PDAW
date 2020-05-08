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
    
    <header class="cabecera">
        <div class="inner-width">
            <a href="../Controller/principal.php" class="logo"><img src="../View/img/Logo.png" alt="Logo"></a>
            <i class="menu-toggle-btn fas fa-bars"></i>
            <nav class="navigation-menu">
                <a href="../Controller/principal.php"><i class="fas fa-home home"></i>Inicio</a>
                <!-- <a href="#"><i class="fas fa-align-left about"></i>Conócenos</a> -->
                <a href="../Controller/tienda.php"><i class="fab fa-buffer works"></i> Tienda</a>
                <a href="../Controller/perfil.php"><i class="fas fa-users team"></i>Perfil</a>
                <!-- <a href="#"><i class="fas fa-headset contact"></i> Contáctanos</a>	 -->
            </nav>
        </div>
    </header>

    <div class="contenedor">
        
        <div class="producto">
            
            <div class="caja-imagen">
                <img class="imagen" src="<?=$producto->getImagen()?>" alt="">
            </div>

            <div class="caja-informacion">
                informacion
            </div>

        </div>

    </div>

    <?php
        echo $producto->getNombre(), " ", $producto->getCodigo(), " ", $producto->getDescripcion(), " ", $producto->getPrecio(), " ", $producto->getStock(), " ", $producto->getImagen(), " ", $producto->getTipo();
    ?>



    <script type="text/javascript" src="../View/JS/principal.js"></script>
</body>
</html>