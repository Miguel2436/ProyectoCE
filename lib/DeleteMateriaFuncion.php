<HTML>
<HEAD>
<TITLE>Materia Borrada</TITLE>
</HEAD>
<BODY>
<?php

$IdMateria = $_POST['IdMateria'];

$conexion = mysqli_connect("localhost","root","","sistemaescolar");

$consulta = mysqli_query($conexion, "DELETE FROM materia where IdMateria ='{$IdMateria}'");

if($consulta)
{
print("Registro de materia borrado");
echo "<script type='text/javascript'>alert('MATERIA BORRADA :) ');window.location.href = '/sistemaescolar/index.php';</script>";
} else {
print("Registro no borrado");
}
mysqli_close($conexion);
?>
</BODY>
</HTML>