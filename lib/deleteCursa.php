<?php
	include 'conexion.php';
	$IdCursa = $_POST['IdCursa'];

	$consulta = mysqli_query($conexion, "DELETE FROM cursa where IdCursa ='{$IdCursa}'");

	if($consulta){
		echo"<script type='text/javascript'>alert('Registro de alumno eliminado'); window.location.href = '/sistemaescolar/deleteBorrado.php';</script>";
	}else{
		echo"<script type='text/javascript'>alert('El registro no pudo ser eliminado'); window.location.href = '/sistemaescolar/deleteBorrado.php';</script>";
	}
	
	mysqli_close($conexion);
?>
