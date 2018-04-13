<form action="DeleteMateriaFuncion.php" method="post">

<font color="White" face="Comic Sans MS,arial">
<H1 ALIGN=CENTER> Eliminar Materia </H1> 
<select name="IdMateria">
   
<?PHP  
 $conexion = mysqli_connect("localhost","root","","sistemaescolar");

 $sql = "SELECT IdMateria FROM materia";
 
 $result = mysqli_query($conexion,$sql);
  
 for($i=0;$i<mysqli_num_rows($result);$i++){
   
 $fila = mysqli_fetch_array($result, MYSQLI_ASSOC);
 
 $IdMateria = $fila['IdMateria'];
   

 echo "<option value='$IdMateria'>$IdMateria ";
 

 }
 
 ?>

<input type = "submit">
</select>
</form>