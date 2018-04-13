<form action="DeleteBorrar.php" method="post">

<font color="White" face="Comic Sans MS,arial">
<H1 ALIGN=CENTER> Eliminar </H1> 
<select name="IdAlumno">
   
<?PHP  
 $conexion = mysqli_connect("localhost","root","","sistemaescolar");

 $sql = "SELECT IdAlumno FROM alumno";
 
 $result = mysqli_query($conexion,$sql);
  
 for($i=0;$i<mysqli_num_rows($result);$i++){
   
 $fila = mysqli_fetch_array($result, MYSQLI_ASSOC);
 
 $IdAlumno = $fila['IdAlumno'];
   

 echo "<option value='$IdAlumno'>$IdAlumno ";
 

 }
 
 ?>

<input type = "submit">
</select>
</form>