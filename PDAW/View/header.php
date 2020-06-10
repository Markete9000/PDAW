<header class="cabecera">
    <div class="inner-width">
        <a href="../Controller/principal.php" class="logo"><img src="../View/img/Logo.png" alt="Logo"></a>
        <i class="menu-toggle-btn fas fa-bars"></i>
        <nav class="navigation-menu">
            <a href="../Controller/principal.php"><i class="fas fa-home home"></i>Inicio</a>
            <a href="../Controller/tienda.php"><i class="fab fa-buffer works"></i>Tienda</a>
            <a href="../Controller/perfil.php"><i class="fas fa-users team"></i>Perfil</a>
            <?php
                if ($_SESSION['tipo'] === "admin") {
                    echo '<a href="../Controller/administracion.php"><i class="fas fa-cog"></i>Administración</a>';
                }
            ?>
            <a href="../Controller/carrito.php"><i class="fas fa-shopping-cart btncarrito"></i></a>
            <a href="../View/PDF/Guía_usuario.pdf" download="Guía de usuario.pdf"><i class="fas fa-question quest"></i>Ayuda</a>
        </nav>
    </div>
</header>