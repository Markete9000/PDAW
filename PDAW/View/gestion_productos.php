<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../View/css/principal.css">
    <link rel="stylesheet" href="../View/css/gestion.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>  
<body class="body">

    <?php
        include '../Controller/header.php';
    ?>

    <div class="contenedor">
        
        <table class="tabla">
            <tr class="titulo"><td colspan="5"><h2>Gestión de los Productos de Ayo's</h2></td></tr>
            <tr class="cabecera"><td>Código</td><td>Nombre</td><td>Tipo</td><td></td><td></td></tr>
            <?php
                foreach ($data['productos'] as $producto) {
                    echo '<tr class="tr">';
                    echo '<td class="td"><b>'.$producto->getCodigo().'</td>';
                    echo '<td class="td">'.$producto->getNombre().'</td>';
                    echo '<td class="td">'.$producto->getTipo().'</td>';
                    echo '<td class="td">
                        <form action="../Controller/borra_producto.php" method="post">
                        <input type="hidden" name="codigo" value="<?$producto->getCodigo()?>">
                        <input class="modificar" type="submit" value="Modificar">
                        </form>
                        </td>';
                    echo '<td class="td">
                        <form action="../Controller/modifica_producto.php" method="post">
                        <input type="hidden" name="codigo" value="<?$producto->getCodigo()?>">
                        <input class="borrar" type="submit" value="Borrar">
                        </form>
                        </td>';
                    echo '</tr>';
                }
            ?>
            

        </table>

    </div>

<script type="text/javascript" src="../View/JS/principal.js"></script>
</body>
</html>