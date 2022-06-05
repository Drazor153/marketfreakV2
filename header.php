<header class="encabezado">
    <div>
        <a href="./"><img src="images/logo.png" alt="logo" id="logo"></a>
        
        <!-- SLIDER -->
        <label class="switch">
            <input type="checkbox" id="slider-theme" onclick="changeTheme()"/>
            <span class="slider round"></span>
        </label>
        
        <form action="catalogo.php" method="get">
            <input type="submit" class="btnBuscar" value="Buscar" >
            <input type="text" class="buscador" name="buscador">
        </form>
    </div>    
    <nav class="nav">
        <ul>
            <li><a href="catalogo.php">Catálogo</a></li>
            <li><a href="#">Gestionar catálogo</a></li>
            <li><a href="soporte.php">Soporte</a></li>
            <li>
                <a href="#">Nombre Admin</a>
                <ul>
                    <li><a href="#">Perfil</a></li>
                    <li><a href="#">Cerrar Sesión</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Nombre Usuario</a>
                <ul class="submenu">
                    <li><a href="#">Mis compras</a></li>
                    <li><a href="#">Saldo</a></li>
                    <li><a href="#">Configuración</a></li>
                    <li><a href="#">Cerrar Sesión</a></li>
                </ul>
            </li>
            <li><a href="#">Carrito</a></li>
            <li><a href="register.php">Registrarse</a></li>
            <li><a href="login.php">Iniciar sesión</a></li>
            
        </ul>
    </nav>
    
</header>