<?php

	$servidor = "localhost";
	$baseDatos = "sistemaescolar";
	$usuario = "root"; 
	$password = "";

	$conexion = mysqli_connect($servidor, $usuario, $password) or die ("No se ha podido conectar al servidor de Base de datos");

	$db = mysqli_select_db( $conexion, $baseDatos) or die ( "Upps! Parece que no se ha podido conectar a la base de datos" );
?>  