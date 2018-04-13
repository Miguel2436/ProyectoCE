
<HTML>
<HEAD>
<TITLE>Cursa insertado</TITLE>
</HEAD>
<BODY>
 <?php

$idAlumnov = $_POST['idAlumno'];
$idMateriav = $_POST['IdMateria'];
$idCalificacionv = $_POST['Calificacion'];
$conexion = mysqli_connect("localhost","root","","sistemaescolar");

$insertando = mysqli_query($conexion, "INSERT INTO cursa(IdAlumno,IdMateria,Calificacion) values('$idAlumnov','$idMateriav','$idCalificacionv');");
if($insertando)
{
	print("Insertado, todo verde");
} else
{
	print("No insertado");
}
mysqli_close($conexion);
?>
   
   </BODY>
</HTML>