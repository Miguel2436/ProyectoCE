<?php session_start();?>
<?php 
	include 'seguridad.php';
	checkSID();
	if(!isset($_SESSION['user'])){header("location:/sistemaescolar/iniciarSesion.html");}
?>
<?php
	include 'conexion.php';
	$IdCursa = $_POST['IdCursa'];

	$consulta = mysqli_query($conexion, "DELETE FROM cursa where IdCursa ='{$IdCursa}'");

	if($consulta){
		echo"<script type='text/javascript'>alert('Registro de alumno eliminado'); window.location.href = '/sistemaescolar/delete.php';</script>";
	}else{
		echo"<script type='text/javascript'>alert('El registro no pudo ser eliminado'); window.location.href = '/sistemaescolar/delete.php';</script>";
	}
	
	mysqli_close($conexion);
?>
