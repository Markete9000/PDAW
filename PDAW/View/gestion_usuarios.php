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
        <div class="formulario">
            <form class="formulario" action="../Controller/gestion_usuarios.php" method="post">
                <input class="filtro" type="text" name="filtro" placeholder="Filtrar por nombre o por usuario">
                <input class="añadir filtrar" type="submit" value="Filtrar">
            </form>
        </div>
        <div class="caja_tabla primera">
            <table class="tabla">
                <tr class="titulo"><td colspan="6"><h2>Gestión de los Usuarios de Ayo's</h2></td></tr>
                <tr class="cabecera"><td>Usuario</td><td>Nombre</td><td>Email</td><td></td><td></td></tr>
                <?php
                    foreach ($data['usuarios'] as $usuario) {
                        echo '<tr class="tr">';
                        echo '<td class="td"><b>'.$usuario->getUsuario().'</td>';
                        echo '<td class="td">'.$usuario->getNombre().'</td>';
                        echo '<td class="td">'.$usuario->getEmail().'</td>';
                        echo '<td class="td">
                            <form action="../Controller/formUsuario.php" method="post">
                            <input type="hidden" name="usuario" value="'.$usuario->getUsuario().'">
                            <input class="modificar" type="submit" value="Modificar">
                            </form>
                            </td>';
                        echo '<td class="td">
                            <form action="../Controller/borraUsuario.php" method="post">
                            <input type="hidden" name="usuario" value="'.$usuario->getUsuario().'">
                            <input class="borrar" type="submit" value="Borrar">
                            </form>
                            </td>';
                        echo '</tr>';
                    }
                    echo '<tr><td></td>
                        <td></td>'
                ?>
            </table>
        </div>
        <div class="caja_tabla">
            <table class="tabla">
                <tr>
                    <td>
                        <?php
                            if ($_SESSION['limiteUsuarios'] >= 5) {
                                echo '<form action="../Controller/gestion_usuarios.php" method="post">';
                                echo '<input type="hidden" name="anterior">';
                                echo '<input class="limite" type="submit" value="Anterior">';
                                echo '</form>';
                            }
                        ?>
                    </td>
                    <td></td>
                    <td>
                        <?php
                            if ($_SESSION['limiteUsuarios'] <= $data['cantidad'] - 6) {
                                echo '<form action="../Controller/gestion_usuarios.php" method="post">';
                                echo '<input type="hidden" name="siguiente">';
                                echo '<input class="limite" type="submit" value="Siguiente">';
                                echo '</form>';
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </div>
        <div class="boton">
            <form action="../Controller/formUsuario.php">
                <input class="añadir boton" type="submit" value="Insertar Usuario">
            </form>
        </div>
    </div>
<script type="text/javascript" src="../View/JS/principal.js"></script>
</body>
</html>