<?php 
session_start();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar sesión </title>
        <link rel="stylesheet" href="styles/form-style.css">
    </head>
    
    <body>
        <?php include "header.php"?>
        <!-- h1 es el titulo central de la pagina-->
        <h1> Bienvenidos a MarketFreak </h1>

        <form action="login.php" method="post" class="form">
            <div>
                <label for="correo">Correo:</label>
                <input type="text" placeholder="Escribe tu correo" name="correo" id="correo" >
            </div>
            <div>
                <label for="contraseña">Contraseña:</label>
                <input type="password" placeholder="Escribe tu contraseña" name="contraseña" id="contraseña">
            </div>
            <div class="div_admin">
                <label for="admin" class="label_admin">¿Eres administrador?</label>
                <label class="switch">
                    <input type="checkbox" name="admin"/>
                    <span class="slider round"></span>
                </label>
            </div>
            <input type="submit" value="Iniciar sesión">
        </form>
        <div class="div_register">
            <label for="registro">¿Eres nuevo?</label>
            <a href="register.php" class="btn_register">Registrarse</a>
        </div>
        

            

    </body> 
<html>
<?php include "autotheme.php"?>