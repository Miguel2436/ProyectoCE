<!DOCTYPE html>
<html>
<head>
	<title>Tabla Cursa</title>
</head>
<body>
	<form align="center" action="ReadTableCursa.php">
	<input type="submit" value="Actualizar">	
	</form>
	<table align="center">
		<tr>
			<th style="border: 1px solid black">IdCursa</th>
			<th style="border: 1px solid black">IdAlumno</th>
			<th style="border: 1px solid black">IdMateria</th>
			<th style="border: 1px solid black">Calificacion</th>
		</tr>
		<?php
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
		?>
	</table>
	<form align="center" action="formulario.php">
		<input type="submit" value="Volver">	
	</form>
</body>
</html>