<?php 

	include 'conexion.php';
	
	if(isset($_POST['user'])&&isset($_POST['pass']))
	{

		$user=utf8_decode($_POST['user']);
		$password= utf8_decode($_POST['pass']);
		$iniciarSesion="SELECT Password FROM login WHERE User='{$user}'";
		
		$resultado_iniciarSesion=mysqli_query($conexion, $iniciarSesion);

		if($userDetectado = mysqli_fetch_array($resultado_iniciarSesion))
		{
			$passwordBD=$userDetectado[0];
			if($passwordBD)
			{
				if($password==$passwordBD)
				{
					session_start();
					$_SESSION['user']=utf8_encode($user);
					$_SESSION['SID'] = rand();
					$Query = "UPDATE login SET sid = '{$_SESSION['SID']}' WHERE User = '{$user}'";
					mysqli_query($conexion, $Query);
					echo "<script type='text/javascript'>alert('Bienvenido ');window.location.href = '/sistemaescolar/index.php';</script>";
					//echo "Bienvenido";
				}
				else
				{	
					echo "<script type='text/javascript'>alert('Su contraseña no coincide. '); window.location.href = '/sistemaescolar/iniciarSesion.html';</script>";			
				}
			}
			else
			{
				echo "no";	
				echo "<script type='text/javascript'>alert('Su contraseña no coincide. '); window.location.href = '/sistemaescolar/iniciarSesion.html';</script> ";
			}
		}
		else
		{
			echo"<script type='text/javascript'>alert('Su nombre de usuario no coincide. '); window.location.href = '/sistemaescolar/iniciarSesion.html';</script>";
		}	
	}
	else
	{
		echo"<script type='text/javascript'>alert('Algo salió mal. Reintente llenar el formulario.'; window.location.href = '/sistemaescolar/iniciarSesion.html';</script>";
	}
	
?>