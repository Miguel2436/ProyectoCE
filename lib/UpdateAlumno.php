<?php session_start();?>
<?php 
	include 'seguridad.php';
	checkSID();
	if(!isset($_SESSION['user'])){header("location:/sistemaescolar/iniciarSesion.html");}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modificar Alumno</title>
	<link rel="stylesheet" type="text/css" href="/sistemaescolar/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/sistemaescolar/css/estilo.css">
	<meta name="keywords" content="">
 	<meta charset="utf-8">
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<div class="modificar">
    	<div class="contenformulario">
    		<h1>Modificar Alumnos</h1>
			<?php
				include 'conexion.php';
				if(isset($_POST['IdAlumno'])) {
					$Nombre = utf8_decode($_POST['Nombre']);
					$IdAlumno = $_POST['IdAlumno'];
					$Apellido_P = utf8_decode($_POST['Apellido_P']);
					$Apellido_M = utf8_decode($_POST['Apellido_M']);
					$QueryChecaAlumno = "SELECT IdAlumno FROM Alumno WHERE IdAlumno = '{$IdAlumno}'";
					$ResultadoQueryChecaAlumno = mysqli_query($conexion, $QueryChecaAlumno);
					if (mysqli_num_rows($ResultadoQueryChecaAlumno) > 0) {
						
						if ($Nombre!="") {
							
							$QueryUpdateNombre = "UPDATE Alumno SET Nombre = '".$Nombre."' WHERE IdAlumno = '{$IdAlumno}'";
							if (!mysqli_query($conexion, $QueryUpdateNombre)) {
								echo "<script type='text/javascript'>alert('".mysqli_error($conexion)."');</script>";
							}
						}
						if ($Apellido_P != "") {
							
							$QueryUpdateApp= "UPDATE Alumno SET Apellido_P = '{$Apellido_P}' WHERE IdAlumno = '{$IdAlumno}'";
							if (!mysqli_query($conexion, $QueryUpdateApp)) {
								echo "<script type='text/javascript'>alert('".mysqli_error($conexion)."');</script>";
							}
						}
						if ($Apellido_M != "") {
							
							mysqli_query($conexion, "UPDATE Alumno SET Apellido_M = '{$Apellido_M}' WHERE IdAlumno = '$IdAlumno'");
						}			
					}
					else {
						echo "<script type='text/javascript'>alert('IdAlumno erroneo');</script>";
					}
				}
				ReadAlumno();
				/*$QuerySelectAlumno = "SELECT * FROM Alumno";
				$ResultadoQuerySelectAlumno = mysqli_query($conexion, $QuerySelectAlumno);
				
				echo "<table align='center'> <tr> <th>IdAlumno</th><th>Nombre</th><th>Apellido_P</th><th>Apellido_M</th></tr>";
				while ($Filas = mysqli_fetch_array($ResultadoQuerySelectAlumno, MYSQL_ASSOC)) { 
					echo "<tr><td>".$Filas['IdAlumno']."</td>";
					echo "<td>".utf8_decode($Filas['Nombre'])."</td>";
					echo "<td>".utf8_decode($Filas['Apellido_P'])."</td>";
					echo "<td>".utf8_decode($Filas['Apellido_M'])."</td></tr>";
				}
				echo "</table>";*/
			?>
			<form align='center' action="UpdateAlumno.php" method="POST">
				<select name="IdAlumno">
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
				<input type="text" name="Nombre" placeholder="Nombre" pattern="[A-Za-z Ññ Á-Úá-ú]+" title="El campo sólo puede contener letras.">
				<input type="text" name="Apellido_P" placeholder="ApellidoPaterno" pattern="[A-Za-z Ññ Á-Úá-ú]+" title="El campo sólo puede contener letras.">
				<input type="text" name="Apellido_M" placeholder="ApellidoMaterno" pattern="[A-Za-z Ññ Á-Úá-ú]+" title="El campo sólo puede contener letras."><br>
				<input type="submit" name="Modificar" value="Modificar">
			</form><br>
			<form align='center' action="/sistemaescolar/Update.php">
				<input type="submit" name="" value="Regresar">
			</form>
		</div>
	</div>
</body>
</html>