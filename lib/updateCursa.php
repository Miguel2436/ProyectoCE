<?php session_start();?>
<?php 
	include 'seguridad.php';
	checkSID();
	if(!isset($_SESSION['user'])){header("location:/sistemaescolar/iniciarSesion.html");}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modificar Cursa</title>
	<link rel="stylesheet" type="text/css" href="/sistemaescolar/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/sistemaescolar/css/estilo.css">
	<meta name="keywords" content="">
 	<meta charset="utf-8">
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<div class="modificar">
    	<div class="contenformulario">
    		<h1>Modificar Cursa</h1>
			<?php
				include 'conexion.php';
				if(isset($_POST['IdCursa'])) {
					$IdCursa = $_POST['IdCursa'];
					$IdMateria = utf8_decode($_POST['IdMateria']);
					$Calificacion = utf8_decode($_POST['Calificacion']);
					$QueryChecaCursa = "SELECT IdCursa FROM Cursa WHERE IdCursa = '$IdCursa'";
					$ResultadoQueryChecaCursa = mysqli_query($conexion, $QueryChecaCursa);
					if (mysqli_num_rows($ResultadoQueryChecaCursa) > 0) 
					{
						insertLog($QueryChecaCursa);
						if (isset($_POST['IdAlumno'])) 
						{
							$IdAlumno = utf8_decode($_POST['IdAlumno']);
							$QueryUpdateIdAlumno = "UPDATE Cursa SET IdAlumno = '{$IdAlumno}' WHERE IdCursa = '$IdCursa'";
							mysqli_query($conexion, $QueryUpdateIdAlumno);
							insertLog($QueryUpdateIdAlumno);		
						}
						if ($IdMateria != "") 
						{
							$QueryUpdateIdMateria="UPDATE Cursa SET IdMateria = '{$IdMateria}' WHERE IdCursa = '$IdCursa'";
							mysqli_query($conexion, $QueryUpdateIdMateria);
							insertLog($QueryUpdateIdMateria);
						}
						if ($Calificacion != "") 
						{
							if($Calificacion >= 0 && $Calificacion <=100)
							{
								$consulta = "UPDATE Cursa SET Calificacion = '{$Calificacion}' WHERE IdCursa = '$IdCursa'";
								mysqli_query($conexion, $consulta);
								insertLog($consulta);
							}
							else 
							{
								echo "<script type='text/javascript'>alert('Calificacion fuera de rango');</script>";
							}			
						}
					}
					else {
						echo "<script type='text/javascript'>alert('IdCursa erroneo');</script>";
					}
				}

				ReadCursa();
				/*$QuerySelectCursa = "SELECT * FROM Cursa";
				$ResultadoQuerySelectCursa = mysqli_query($conexion, $QuerySelectCursa);
				
				echo "<table align='center'> <tr> <th>IdCursa</th><th>IdAlumno</th><th>IdMateria</th><th>Calificacion</th></tr>";
				while ($Filas = mysqli_fetch_array($ResultadoQuerySelectCursa, MYSQL_ASSOC)) { 
					echo "<tr><td>".$Filas['IdCursa']."</td>";
					echo "<td>".utf8_decode($Filas['IdAlumno'])."</td>";
					echo "<td>".utf8_decode($Filas['IdMateria'])."</td>";
					echo "<td>".utf8_decode($Filas['Calificacion'])."</td></tr>";
				}
				echo "</table>";*/
			?>
			<form align='center' action="UpdateCursa.php" method="POST">
				Id Cursa: <select name="IdCursa">
					<?php  
						//include 'lib/conexion.php';

						$sql = "SELECT IdCursa FROM cursa";
						$result = mysqli_query($conexion, $sql);
						  
						for($i=0; $i<mysqli_num_rows($result); $i++){
							$fila = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$IdCursa = $fila['IdCursa'];
							echo "<option value='$IdCursa'>$IdCursa ";
						}
					?>
				</select>
				Id Alumno: <select name="IdAlumno">
					<?php  
						//include 'lib/conexion.php';

						$sql = "SELECT IdAlumno FROM alumno";
						$result = mysqli_query($conexion,$sql);
						  
						for($i=0; $i<mysqli_num_rows($result); $i++){
							$fila = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$IdAlumno = $fila['IdAlumno'];
							echo "<option value='$IdAlumno'>$IdAlumno ";
						}
					?>
				</select>
				Id Materia: <select name="IdMateria">
					<?php  
						//include 'lib/conexion.php';

						$sql = "SELECT IdMateria FROM materia";
						$result = mysqli_query($conexion,$sql);
						  
						for($i=0; $i<mysqli_num_rows($result); $i++){
							$fila = mysqli_fetch_array($result, MYSQLI_ASSOC);
							$IdMateria = $fila['IdMateria'];
							echo "<option value='$IdMateria'>$IdMateria ";
						}
					?>
				</select>
				<input type="text" name="Calificacion" placeholder="Calificacion" pattern="[0-9]+" title="El campo sólo puede contener números."><br>
				<input type="submit" name="Modificar" value="Modificar">
			</form><br>
			<form align='center' action="/sistemaescolar/Update.php">
				<input type="submit" name="" value="Regresar">
			</form>
		</div>
	</div>
</body>
</html>
