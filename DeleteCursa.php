<form action="DeleteCursaFuncion.php" method="post">

<font color="White" face="Comic Sans MS,arial">
<H1 ALIGN=CENTER> Eliminar Cursa </H1> 
<select name="IdCursa">
   
<?PHP  
 $conexion = mysqli_connect("localhost","root","","sistemaescolar");

 $sql = "SELECT IdCursa FROM cursa";
 
 $result = mysqli_query($conexion,$sql);
  
 for($i=0;$i<mysqli_num_rows($result);$i++){
   
 $fila = mysqli_fetch_array($result, MYSQLI_ASSOC);
 
 $IdCursa = $fila['IdCursa'];
   

 echo "<option value='$IdCursa'>$IdCursa ";
 

 }
 
 ?>

<input type = "submit">
</select>
</form>