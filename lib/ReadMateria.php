<?php
	include 'conexion.php';
	if(isset($_GET["idmateria"])){
	$IdMateria = $_GET["idmateria"];
	$select = "SELECT * FROM materia WHERE IdMateria = '$IdMateria'";	
	$resultado = mysqli_query($conexion,$select);
	
	if($registro = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
		
		$registro['Nombre'] = utf8_encode($registro['Nombre']);
		echo "--------------------------"."<br>";
		echo "IdMateria: ".$registro['IdMateria']."<br>";
		echo "Materia:  ".$registro['Nombre']."<br>";
		echo "--------------------------";
	}else{
		echo "El registro del Id: ".$IdMateria." no existe";
	}

}else{
	echo "No se recibio parametero";
}
mysqli_close($conexion);
?>