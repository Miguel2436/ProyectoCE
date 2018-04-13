<?php session_start();?>
<?php if(!isset($_SESSION['user'])){header("location:/sistemaescolar/iniciarSesion.html");}?>
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
					$QueryChecaCursa = "SELECT IdCursa FROM Cursa WHERE IdCursa = '$IdCursa'";
					$ResultadoQueryChecaCursa = mysqli_query($conexion, $QueryChecaCursa);
					if (mysqli_num_rows($ResultadoQueryChecaCursa) > 0) {
						if (isset($_POST['IdAlumno'])) {
							$IdAlumno = utf8_decode($_POST['IdAlumno']);
							$QueryUpdateIdAlumno = "UPDATE Cursa SET IdAlumno = '".$IdAlumno."' WHERE IdCursa = '$IdCursa'";
							if (!mysqli_query($conexion, $QueryUpdateIdAlumno)) {
								echo "<script type='text/javascript'>alert('".mysqli_error($conexion)."');</script>";
							}
						}
						if (isset($_POST['IdMateria'])) {
							$IdMateria = utf8_decode($_POST['IdMateria']);
							mysqli_query($conexion, "UPDATE Cursa SET 'IdMateria' = ''$IdMateria'' WHERE IdCursa = '$IdCursa'");
						}
						if (isset($_POST['Calificacion'])) {
							$Calificacion = utf8_decode($_POST['Calificacion']);
							mysqli_query($conexion, "UPDATE Cursa SET 'Calificacion' = ''$Calificacion'' WHERE IdCursa = '$IdCursa'");
						}			
					}
					else {
						echo "<script type='text/javascript'>alert('IdCursa erroneo');</script>";
					}
				}

				include 'readCursa.php';
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
				<input type="text" name="IdCursa" placeholder="IdCursa">
				<input type="text" name="IdAlumno" placeholder="IdAlumno">
				<input type="text" name="IdMateria" placeholder="ApellidoPaterno">
				<input type="text" name="Calificacion" placeholder="ApellidoMaterno"><br>
				<input type="submit" name="Modificar" value="Modificar">
			</form><br>
			<form align='center' action="/sistemaescolar/Update.php">
				<input type="submit" name="" value="Regresar">
			</form>
		</div>
	</div>
</body>
</html>