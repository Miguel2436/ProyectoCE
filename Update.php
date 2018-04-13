<?php session_start();?>
<?php if(!isset($_SESSION['user'])){header("location:/sistemaescolar/iniciarSesion.html");}?>

<!DOCTYPE html>
<html>

<head>
  <title>Modificar</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/estilo2.css">
  <meta name="keywords" content="">
  <meta charset="utf-8">
</head>

<body>
	<div class="iniciarSesion">
    	<div class="contenformulario">
      		<h1>Modificar Base de Datos</h1>
      		<form method="POST" name="IniciarSesion">
        		<ul>
        			<li>
        				<form><h1>Usuario: <?php echo $_SESSION['user'];?></h1></form>
        			</li>
        			<li class="registrar">
        				<form action="lib/UpdateAlumno">
        					<input type="submit" value="Alumno"/>
        				</form>
        			</li>
        			<li class="registrar">
        				<form action="lib/UpdateMateria">
        					<input type="submit" value="Materia"/>
        				</form>
        			</li>
        			<li class="registrar">
        				<form action="lib/UpdateCursa.php">
        					<input type="submit" value="Cursa"/>
        				</form>
        			</li>
        			<li class="registrar">
        				<form action="index.php">
        					<input type="submit" value="Regresar"/>
        				</form>
        			</li>
	    		</ul>
      		</form>
    	</div>
  	</div>
</body>

</html>