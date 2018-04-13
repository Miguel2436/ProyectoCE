<HTML>
<HEAD>
<TITLE>Cursa Borrada</TITLE>
</HEAD>
<BODY>
<?php

$IdCursa = $_POST['IdCursa'];

$conexion = mysqli_connect("localhost","root","","sistemaescolar");

$consulta = mysqli_query($conexion, "DELETE FROM cursa where IdCursa ='{$IdCursa}'");

if($consulta)
{
print("Registro de cursa borrado");
echo "<script type='text/javascript'>alert('REGISTRO DE CURSA BORRADO :) ');window.location.href = '/sistemaescolar/index.php';</script>";
} else {
print("Registro no borrado");
}
mysqli_close($conexion);
?>
</BODY>
</HTML>