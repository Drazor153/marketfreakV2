<header class="header">
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
    

    <ul class="nav">
        <li><a href="catalogo.php">Catálogo</a></li>
        <li><a href="soporte.php">Soporte</a></li>
        <li style="float:right"><a href="">Nombre Admin</a></li>
        <li style="float:right"><a href="carrito.php">Carrito</a></li>
        <li style="float:right"><a href="">Nombre Usuario</a></li>

        <li style="float:right"><a href="register.php">Registrarse</a></li>
        <li style="float:right"><a href="login.php">Iniciar sesión</a></li>
        
    </ul>
</header>