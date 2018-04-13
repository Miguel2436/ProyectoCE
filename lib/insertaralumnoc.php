
<HTML>
<HEAD>
<TITLE>Alumno insertado</TITLE>
</HEAD>
<BODY>
 <?php

$Nombrev = $_POST['nombre'];
$ApellidoPv = $_POST['ApellidoP'];
$ApellidoMv = $_POST['ApellidoM'];
$conexion = mysqli_connect("localhost","root","","sistemaescolar");

$insertando = mysqli_query($conexion, "INSERT INTO alumno(nombre,apellido_p,apellido_m) values('$Nombrev','$ApellidoPv','$ApellidoMv');");
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