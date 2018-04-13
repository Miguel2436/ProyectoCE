<?php
	include 'conexion.php';
	$IdMateria = $_POST['IdMateria'];

	$consulta = mysqli_query($conexion, "DELETE FROM materia where IdMateria ='{$IdMateria}'");

	if($consulta){
		echo"<script type='text/javascript'>alert('Registro de alumno eliminado'); window.location.href = '/sistemaescolar/deleteBorrado.php';</script>";
	}else{
		echo"<script type='text/javascript'>alert('El registro no pudo ser eliminado'); window.location.href = '/sistemaescolar/deleteBorrado.php';</script>";
	}
	
	mysqli_close($conexion);
?>
