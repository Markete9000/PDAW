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

    <form class="formulario" action="../Controller/insertaUsuario.php" method="post">
    
        <h1>Usuario Nuevo</h1>

        <?php
        if (isset($_GET['insertado'])) {
            echo '<div id="cookies" class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Usuario añadido</strong>
                    </button>
                </div>';
        }
        if (isset($_GET['existeusuario'])) {
            echo '<div id="cookies" class="alert alert-info alert-dismissible fade show" role="alert">';
                echo '<strong>Ya existe ese usuario</strong>';
                echo '</button>';
            echo '</div>';
        }
        if (isset($_GET['existeemail'])) {
            echo '<div id="cookies" class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Ese email ya se encuentra registrado</strong>
                    </button>
                </div>';
        }
        ?>
        
        <div class="contenedor">

            <div class="input-contenedor">
                <input type="text" name="nombre" placeholder="Nombre" maxlength="90">  
            </div>
            
            <div class="input-contenedor">
                <input type="text" name="usuario" placeholder="Usuario">
            </div>

            <div class="input-contenedor">
                <input type="text" name="contraseña" placeholder="Contraseña">
            </div>

            <div class="input-contenedor">
                <input type="text" name="email" placeholder="Email">
            </div>

            <div class="input-contenedor">
                <input type="text" name="direccion" placeholder="Dirección" maxlength="90">  
            </div>

            <h5>Tipo de Usuario</h5>
            <div class="input-contenedor" id="ejemplo">
                <select name="tipo" class="select">
                    <option value="usuario">Usuario Stándar</option>
                    <option value="admin">Administrador</option>
                </select>
            </div>

            <input type="hidden" name="admin">

            <input type="submit" value="Añadir" class="button">

        </div>

    </form>

</body>
</html>