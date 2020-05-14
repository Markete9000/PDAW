<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="../View/css/login-register.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>  
<body class="body">

    <form class="formulario" action="../Controller/insertaUsuario.php" method="post">

        <h1>Registrate</h1>

        <?php
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
        if (!isset($_GET['existeemail']) && !isset($_GET['existeusuario'])) {
            echo '<div id="cookies" class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>¡Antes de seguir!</strong> Debe saber que nuestra página hace uso de sus cookies.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
        ?>
        <div class="contenedor">
        
            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Nombre Completo" name="nombre" maxlength="50" required>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-tag icon"></i>
                <input type="text" placeholder="Usuario" name="usuario"  maxlength="20" required>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña" maxlength="20" name="contraseña" required>
            </div>
                
            <div class="input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="email" placeholder="Correo Electrónico" maxlength="40" name="email" required>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-home icon"></i>
                <input type="text" placeholder="Dirección" maxlength="40" name="direccion" required>
            </div>

            <div class="input-contenedor">
                <i class="fas fa-mobile icon"></i>
                <input type="tel" placeholder="Teléfono" name="telefono" maxlength="9" minlength="9" required>
            </div>

            <ul class="ul">

                <li>
                    <label class="label">Aceptar Políticas de Privacidad
                        <input type="checkbox" required>
                        <span class="check"></span>
                    </label>
                </li>

            </ul>

            <input type="submit" value="Registrate" class="button">
            <p class="mt-4">¿Ya tienes una cuenta?<a class="link" href="../Controller/login.php">Iniciar Sesion</a></p>

        </div>
    </form>
</body>
</html>