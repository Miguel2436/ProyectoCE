<?php
	
	function checkSID() {
		include 'conexion.php';
		$user = utf8_decode($_SESSION['user']);
		$Query = "SELECT sid FROM login WHERE User = '{$user}'";
		$ResultadoSID = mysqli_query($conexion, $Query);
		$SID = mysqli_fetch_array($ResultadoSID);
		if ($SID[0] != $_SESSION['SID']) {
			echo "<script type='text/javascript'>alert('Tu sesión ha sido iniciada en otra instancia');window.location.href = '/sistemaescolar/lib/cerrarSesion.php';</script>";
		}
	}
	function ReadAlumno() {
		echo "<table align='center'><tr><th style='border: 1px solid black'>IdAlumno</th><th style='border: 1px solid black'>Nombre</th>";
		echo "<th style='border: 1px solid black'>Apellido Paterno</th><th style='border: 1px solid black'>Apellido Materno</th></tr>";
		include 'conexion.php';
		$array = array();
		$select = "SELECT * FROM alumno";	
		$resultado = mysqli_query($conexion,$select);
		
		while($registro = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
			$registro['Nombre'] = utf8_encode($registro['Nombre']);
			$registro['Apellido_P'] = utf8_encode($registro['Apellido_P']);
			$registro['Apellido_M'] = utf8_encode($registro['Apellido_M']);

			echo "<tr>";
			echo "<td style='border: 1px solid black; text-align: center;'>".$registro['IdAlumno']."</td>";
			echo "<td style='border: 1px solid black; text-align: center;'>".$registro['Nombre']."</td>";
			echo "<td style='border: 1px solid black; text-align: center;'>".$registro['Apellido_P']."</td>";
			echo "<td style='border: 1px solid black; text-align: center;'>".$registro['Apellido_M']."</td>";
			echo "</tr>";
		}
		mysqli_close($conexion);
		echo "</table>";
	}
	function ReadCursa() {
		echo "<table align='center'><tr><th style='border: 1px solid black'>IdCursa</th><th style='border: 1px solid black'>IdAlumno</th><th style='border: 1px solid black'>IdMateria</th><th style='border: 1px solid black'>Calificacion</th></tr>;";
		include 'conexion.php';
		$array = array();
		$select = "SELECT * FROM cursa";	
		$resultado = mysqli_query($conexion,$select);

		while($registro = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
		echo "<tr>";
		echo "<td style='border: 1px solid black; text-align: center;'>".$registro['IdCursa']."</td>";
		echo "<td style='border: 1px solid black; text-align: center;'>".$registro['IdAlumno']."</td>";
		echo "<td style='border: 1px solid black; text-align: center;'>".$registro['IdMateria']."</td>";
		echo "<td style='border: 1px solid black; text-align: center;'>".$registro['Calificacion']."</td>";
		echo "</tr>";
		}
		mysqli_close($conexion);
		echo "</table>";
	}
	function ReadMateria() {
		echo "<table align='center'><tr><th style='border: 1px solid black'>IdMateria</th><th style='border: 1px solid black'>Materia</th></tr>";
		include 'conexion.php';
		$array = array();
		$select = "SELECT * FROM materia";	
		$resultado = mysqli_query($conexion,$select);
		
		while($registro = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
			$registro['Nombre'] = utf8_encode($registro['Nombre']);

			echo "<tr>";
			echo "<td style='border: 1px solid black; text-align: center;'>".$registro['IdMateria']."</td>";
			echo "<td style='border: 1px solid black; text-align: center;'>".$registro['Nombre']."</td>";
			echo "</tr>";
		}
		mysqli_close($conexion);
		echo "</table>";
	}
?>