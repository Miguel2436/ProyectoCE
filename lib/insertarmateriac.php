
<HTML>
<HEAD>
<TITLE>Alumno insertado</TITLE>
</HEAD>
<BODY>
 <?php

$Nombrev = $_POST['nombre'];

$conexion = mysqli_connect("localhost","root","","sistemaescolar");

$insertando = mysqli_query($conexion, "INSERT INTO materia(nombre)values('$Nombrev');");
if($insertado)
{

print("Insertado, todo verde");
} else {
print("No insertado");
}
mysqli_close($conexion);
?>
   
   </BODY>
</HTML>