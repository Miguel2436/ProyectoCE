<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body style="margin-top: 5vh; margin-right: 15vh;">
	<table align="center">
		<tr>
			<td>
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
			</td>
			<td>
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
				<table align="center">
					<tr >
						<td><input type="button" onclick="history.back()" name="volver atrás" value="Volver"></td>
						<td><form align="center" action="Read.php">
								<input type="submit" value="Actualizar">	
							</form>
						</td>
						
					</tr>
				</table>
			</td>
			<td>
				<table align="center">
					<tr>
						<th style="border: 1px solid black">IdMateria</th>
						<th style="border: 1px solid black">Materia</th>
					</tr>
					<?php
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
					?>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>