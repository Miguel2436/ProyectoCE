<?php session_start();?>
<?php if(!isset($_SESSION['user'])){header("location:/sistemaescolar/iniciarSesion.html");}?>

<!DOCTYPE html>
<html>

<head>
  <title>CRUD: Sistema escolar</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/estilo2.css">
  <meta name="keywords" content="">
  <meta charset="utf-8">
</head>

<body>
	<div class="iniciarSesion">
    	<div class="contenformulario">
      		<h1>CRUD: Sistema Escolar</h1>
      		<form method="POST" name="IniciarSesion">
        		<ul>
        			<li>
        				<form><h1>Usuario: <?php echo $_SESSION['user'];?></h1></form>
        			</li>
        			<li class="registrar">
        				<form action="http://google.com">
        					<input type="submit" value="Insertar"/>
        				</form>
        			</li>
        			<li class="registrar">
        				<form action="http://google.com">
        					<input type="submit" value="Consultar"/>
        				</form>
        			</li>
        			<li class="registrar">
        				<form action="http://google.com">
        					<input type="submit" value="Modificar"/>
        				</form>
        			</li>
        			<li class="registrar">
        				<form action="http://google.com">
        					<input type="submit" value="Borrar"/>
        				</form>
        			</li>
        			<li class="registrar">
        				<form action="lib/cerrarSesion.php">
        					<input type="submit" value="CERRAR SESIÓN"/>
        				</form>
        			</li>
	    		</ul>
      		</form>
    	</div>
  	</div>
</body>

</html>