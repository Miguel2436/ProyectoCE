<?php session_start();?>
<?php if(!isset($_SESSION['user'])){header("location:/sistemaescolar/iniciarSesion.html");}?>

<!DOCTYPE html>
<html>
<head>
  <title>Eliminar</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <meta name="keywords" content="">
  <meta charset="utf-8">
</head>
<body>
	<div class="eliminar">
		<h1 ALIGN=CENTER> Eliminar </h1>
		<div class="regresar">
			<a href="index.php">Regresar</a>
		</div>
		<form action="lib/deleteBorrar.php" method="post">
			<h2>Registros de alumnos:</h2>
			<select name="IdAlumno">
				<?php  
					include 'lib/conexion.php';

					$sql = "SELECT IdAlumno FROM alumno";
					$result = mysqli_query($conexion,$sql);
					  
					for($i=0; $i<mysqli_num_rows($result); $i++){
						$fila = mysqli_fetch_array($result, MYSQLI_ASSOC);
						$IdAlumno = $fila['IdAlumno'];
						echo "<option value='$IdAlumno'>$IdAlumno ";
					}
				?>
				<input type="submit" value="Eliminar Registro">
			</select>
		</form>
	</div>
</body>
</html>