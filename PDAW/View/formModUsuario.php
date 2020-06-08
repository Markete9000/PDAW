<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="../View/css/formProducto.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>  
<body class="body">
    <form class="formulario" action="../Controller/modificaUsuario.php" method="post">
        <h1>Usuario a Modificar</h1>
        <div class="contenedor">
            <h5>Nombre</h5>
            <div class="input-contenedor">
                <input type="text" name="nombre" value="<?=$usuario->getNombre()?>" maxlength="90">  
            </div>
            <h5>Usuario</h5>
            <div class="input-contenedor">
                <input type="text" name="usuario" value="<?=$usuario->getUsuario()?>" maxlength="90">  
            </div>
            <h5>Contraseña</h5>
            <div class="input-contenedor">
                <input type="text" name="contraseña" value="<?=$usuario->getContraseña()?>">
            </div>
            <h5>Email</h5>
            <div class="input-contenedor">
                <input type="text" name="email" value="<?=$usuario->getEmail()?>">
            </div>
            <h5>Dirección</h5>
            <div class="input-contenedor">
                <input type="text" name="direccion" value="<?=$usuario->getDireccion()?>">
            </div>
            <h5>Teléfono</h5>
            <div class="input-contenedor">
                <input type="text" name="telefono" value="<?=$usuario->getTelefono()?>" maxlength="90">  
            </div>
            <h5>Tipo de Usuario</h5>
            <div class="input-contenedor" id="ejemplo">
                <select name="tipo" class="select">
                    <option value="usuario">Usuario Stándar</option>
                    <option value="administrador">Administrador</option>
                </select>
            </div>
            <input type="hidden" name="userAModificar" value="<?=$usuario->getUsuario()?>">
            <input type="submit" value="Modificar" class="button">
        </div>
    </form>
</body>
</html>