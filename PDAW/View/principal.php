<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../View/css/principal.css">
	<link rel="stylesheet" href="../View/css/principal_principal.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>  
<body class="body">
    <?php
        include '../Controller/header.php';
    ?>
    <div class="contenedor">
		<div class="principal">
			<div class="contenido">
				<div class="primero">
					<div class="caja_imagenPrincipal">
						<img class="imagenPrincipal" src="../View/img/Principal/primera_imagen.jpg" alt="">
					</div>
					<div class="caja_texto">
						<h2 class="tituloPrincipal">Conseguimos los productos de mayor calidad</h2>
						<div class="parrafo">
							<p>
							Investigamos y analizamos las necesidades de nuestros clientes para así encontrar los mejores productos del mercado
							y poder ofrecer lo mejor de lo mejor en exclusiva
							</p>
						</div>
					</div>
				</div>
				<div class="segundo">		
					<div class="caja_texto">
						<h2 class="tituloPrincipal">Conseguimos los productos al mejor precio</h2>
						<p class="parrafo">Comparamos nuestros productos con los de otras empresas para conseguir reducir nuestros precios lo máximo
							y tener así el mejor precio del mercado
						</p>
					</div>
					<div class="caja_imagenPrincipal">
						<img class="imagenPrincipal dos" src="../View/img/Principal/segunda_imagen.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="cajatitular">
				<h1 class="titular">Algunos de nuestros productos</h1>
			</div>	
			<div id="productos" class="productos">
				<?php
				foreach ($data['productos'] as $producto) {
				?>
					<div id="caja-imagen" class="caja-imagen">
						<input type="hidden" name="codigo" value="<?=$producto->getCodigo()?>">
						<img class="imagen" src="<?=$producto->getImagen()?>" alt="">
						<h4 class="titulo2"><?=$producto->getNombre()?></h4>
						<h3 class="precio"><?=$producto->getPrecio()?>€</h3>
						<div class="botones">
							<form action="../Controller/añadir_carrito.php" method="post">
								<input type="hidden" name="codigo" value="<?=$producto->getCodigo()?>">
								<input class="añadir" type="submit" value="Añadir Carrito">
							</form>
						</div>
					</div>
				<?php
				}
				?>
			</div>			
		</div>
	</div>
	<?php
        include '../Controller/footer.php';
    ?>
<script type="text/javascript" src="../View/JS/principal.js"></script>
</body>
</html>

