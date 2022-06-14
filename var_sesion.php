<?php
$admin = false;
$logged = false;
if(isset($_SESSION["email"])){
    $nombre = $_SESSION["nombre"];
    $apellido = $_SESSION["apellido"];
    $admin = $_SESSION["admin"];
    $email = $_SESSION["email"];
    $logged = true;
    }
?>