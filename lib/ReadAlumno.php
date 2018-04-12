<?php
	include 'conexion.php';
	if(isset($_POST["idalumno"])){
	$IdAlumno = $_POST["idalumno"];
	$select = "SELECT * FROM alumno WHERE IdAlumno = '$IdAlumno'";	
	$resultado = mysqli_query($conexion,$select);
	
	if($registro = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
		
		$registro['Nombre'] = utf8_encode($registro['Nombre']);
		$registro['Apellido_P'] = utf8_encode($registro['Apellido_P']);
		$registro['Apellido_M'] = utf8_encode($registro['Apellido_M']);
		
		echo "--------------------------"."<br>";
		echo "IdAlumno: ".$registro['IdAlumno']."<br>";
		echo "Nombre: ".$registro['Nombre']."<br>";
		echo "Apellido Paterno:  ".$registro['Apellido_P']."<br>";
		echo "Apellido Materno:  ".$registro['Apellido_M']."<br>";
		echo "--------------------------";
	}else{
		echo "El registro del Id: ".$IdAlumno."no existe";
	}

}else{
	echo "No se recibio parametero";
}
mysqli_close($conexion);
?>