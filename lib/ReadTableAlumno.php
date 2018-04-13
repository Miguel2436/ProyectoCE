<!DOCTYPE html>
<html>
<head>
	<title>Tabla Alumno</title>
</head>
<body style="margin-top: 13vh;">
	<form align="center" action="ReadTableAlumno.php">
	<input type="submit" value="Actualizar">	
	</form>
	<table align="center">
		<tr>
			<th style="border: 1px solid black">IdAlumno</th>
			<th style="border: 1px solid black">Nombre</th>
			<th style="border: 1px solid black">Apellido Paterno</th>
			<th style="border: 1px solid black">Apellido Materno</th>
		</tr>
		<?php
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
		?>
	</table>
	<form align="center" action="formulario.php">
		<input type="submit" value="Volver">	
	</form>
</body>
</html>