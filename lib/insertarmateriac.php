
<HTML>
<HEAD>
<TITLE>Alumno insertado</TITLE>
</HEAD>
<BODY>
 <?php
include 'conexion.php';
$Nombrev = $_POST['nombre'];


$insertando = mysqli_query($conexion, "INSERT INTO materia(Nombre)values('$Nombrev');");
if($insertando)
{

print("Insertado, todo verde");
} else {
print("No insertado");
}
mysqli_close($conexion);
?>
   <a  href="/sistemaescolar/insertar.php"> Regresar </a>
   </BODY>
</HTML>