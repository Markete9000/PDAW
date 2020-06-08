<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../View/css/principal.css">
	<link rel="stylesheet" href="../View/css/perfil.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>  
<body class="body">
    <?php
        include '../Controller/header.php';
    ?>
	<div class="contenedor">
		<div class="caja">
			<div class="menu">
				<div class="pedidos">
					<a class="boton" href="../Controller/pedidos_usuario.php">Pedidos</a>
				</div>
				<div class="incidencias">
					<a class="boton" href="../Controller/incidencias_usuario.php">Incidencias</a>
				</div>
				<div class="cerrar">
					<a class="boton" href="../Controller/index.php?cerrar">Cerrar Sesión</a>
				</div>
			</div>
			<div class="info">
				<div class="titulo">
					<h1>Datos Personales</h1>
				</div>
				<div class="cajainfo">
					<form class="datos" action="../Controller/modificaUsuario.php" method="post">
						<div class="datos1">
							<h2>Nombre completo: &nbsp</h2>
							<input class="input" name="nombre" type="text" value="<?=$usuario->getNombre()?>">
							<!-- <h2 class="sinnegrita"></h2> -->
						</div>
						<div class="datos1">
							<h2>Usuario: &nbsp</h2>
							<input class="input" id="usuario" name="usuario" type="text" readonly value="<?=$usuario->getUsuario()?>">
						</div>
						<div class="datos1">
							<h2>Contraseña: &nbsp</h2>
							<input class="input" id="contraseña" name="contraseña" type="password" value="<?=$usuario->getContraseña()?>">
						</div>
						<div class="datos1">
							<h2>Email: &nbsp</h2>
							<input class="input" name="email" type="text" readonly value="<?=$usuario->getEmail()?>">
						</div>
						<div class="datos1">
							<h2>Dirección: &nbsp</h2>
							<input class="input" name="direccion" type="text" value="<?=$usuario->getDireccion()?>">
						</div>
						<div class="datos1">
							<h2>Teléfono: &nbsp</h2>
							<input class="input" name="telefono" type="text" value="<?=$usuario->getTelefono()?>">
						</div>
						<div class="datos2">
							<input class="modi" type="submit" value="Modificar Datos">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="../View/JS/perfil.js"></script>
<script type="text/javascript" src="../View/JS/principal.js"></script>
</body>
</html>
