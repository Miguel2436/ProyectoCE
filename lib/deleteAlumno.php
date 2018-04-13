<?php
	include 'conexion.php';
	$IdAlumno = $_POST['IdAlumno'];

	$consulta = mysqli_query($conexion, "DELETE FROM alumno where IdAlumno ='{$IdAlumno}'");

	if($consulta){
		echo"<script type='text/javascript'>alert('Registro de alumno eliminado'); window.location.href = '/sistemaescolar/delete.php';</script>";
	}else{
		echo"<script type='text/javascript'>alert('El registro no pudo ser eliminado'); window.location.href = '/sistemaescolar/delete.php';</script>";
	}

	mysqli_close($conexion);
?>