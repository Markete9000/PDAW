<?php
    include_once '../Model/Producto.php';

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = doubleval($_POST['precio']);
    $stock = $_POST['stock'];

    //Cogemos datos de la imagen seleccionada y la copiamos a la carpeta 
    //en la que se encuentran el resto de imágenes de productos
    $foto = $_FILES['imagen']['name'];
    $ruta = $_FILES['imagen']['tmp_name'];
    $destino = '../View/img/Productos/'.$foto;
    copy($ruta, $destino);

    $tipo = $_POST['tipo'];
    $codigo = "";
    $producto = false;

    // Array de tamaño 36, generar número random entre el 0 y el 35
    $array = ["0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];

    while ($producto == false) {
        for ($i=0; $i < 9; $i++) { 
            $rand = rand(0,35);
            $codigo = $codigo.$array[$rand];
            $producto = Producto::existeProducto($codigo);
        }
    }

    $producto = new Producto($codigo, $nombre, $descripcion, $precio, $stock, $destino, $tipo);
    $producto->insert();
    header("Location: ../Controller/formProducto.php?insertado");
?>