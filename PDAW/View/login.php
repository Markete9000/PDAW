<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="../View/css/login-register.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>  
<body class="body">
    <form class="formulario" action="../Controller/logUsuario.php" method="post">
        <h1>Inicio de Sesión</h1>
        <?php
        if (isset($_GET['fallopass'])) {
            echo '<div id="cookies" class="alert alert-info alert-dismissible fade show" role="alert">
                    <strong>Contraseña Incorrecta</strong>
                    </button>
                </div>';
        }
        if (isset($_GET['noexisteuser'])) {
            echo '<div id="cookies" class="alert alert-info alert-dismissible fade show" role="alert">';
                echo '<strong>No existe ese usuario</strong>';
                echo '</button>';
            echo '</div>';
        }
        ?>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" name="user" placeholder="Usuario">  
            </div>
            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" name="pass" placeholder="Contraseña">
            </div>
            <input type="submit" value="Login" class="button">
            <p class="mt-4">¿No tienes una cuenta? <a class="link" href="../Controller/register.php">Registrate</a></p>
        </div>
    </form>
</body>
</html>