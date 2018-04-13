<HTML>
<HEAD>
<TITLE>Alumno Borrado</TITLE>
</HEAD>
<BODY>
<?php

$IdAlumno = $_POST['IdAlumno'];

$conexion = mysqli_connect("localhost","root","","sistemaescolar");

$consulta = mysqli_query($conexion, "DELETE FROM alumno where IdAlumno ='{$IdAlumno}'");

if($consulta)
{
print("Registro de Alumno borrado");
} else {
print("Registro no borrado");
}
mysqli_close($conexion);
?>
</BODY>
</HTML>