<?php
	include 'conexion.php';
	if(isset($_GET["idcursa"])){
	$IdCursa = $_GET["idcursa"];
	$select = "SELECT * FROM cursa WHERE IdCursa = '$IdCursa'";	
	$resultado = mysqli_query($conexion,$select);
	
	if($registro = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
		echo "--------------------------"."<br>";
		echo "IdCursa: ".$registro['IdCursa']."<br>";
		echo "IdAlumno: ".$registro['IdAlumno']."<br>";
		echo "IdMateria:  ".$registro['IdMateria']."<br>";
		echo "Calificacion:  ".$registro['Calificacion']."<br>";
		echo "--------------------------";
	}else{
		echo "El registro del Id: ".$IdCursa." no existe";
	}

}else{
	echo "No se recibio parametero";
}
mysqli_close($conexion);
?>