<?php session_start();?>
    <?php if(!isset($_SESSION['user'])){header("location:/sistemaescolar/iniciarSesion.html");}?>
    <?php echo $_SESSION['user'];?>
    <a href="lib/cerrarSesion.php">Cerrar Sesion </a>