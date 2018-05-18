<?php session_start();?>
<?php 
    include 'seguridad.php';
    
    checkSID();
    if(!isset($_SESSION['user'])){header("location:/sistemaescolar/iniciarSesion.html");}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>AlumnoInsertado</title>
    <style type="text/css">
  .Botoninsertar{
    text-decoration: none;
    padding: 10px;
    font-weight:
     600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0;

  }
  .regresar{
    margin-left: 5%;
    padding-top: 20px;
    padding-bottom: 20px;
}

.regresar a{
    text-decoration: none;
    background-color: #DA4403;
    color: #FFFFFF;
    padding: 5px 10px 5px 10px;
    font-size: 1.2em;
    border-radius: 3px;
}

.regresar a:hover{
    background-color: #D58927;
}

</style>
</head>
<body >
    

<h1>
<table bgcolor="13AB91" width="1350"> 
    
        <tr> <th> <p style="color: White" >Insertar Alumno </p></th> </tr>
    </table>
</h1>
<div class="regresar">
        <a href="/sistemaescolar/index.php">Regresar</a>
    </div>
<?php
        ReadAlumno();
        include 'conexion.php';
       if(isset($_POST['nombre'])){
        $Nombrev = utf8_decode($_POST['nombre']);
        $ApellidoPv = utf8_decode($_POST['ApellidoP']);
        $ApellidoMv = utf8_decode($_POST['ApellidoM']);
        if ($Nombrev!="" && $ApellidoPv!=""&& $ApellidoMv!=""){ 
            $consulta = "INSERT INTO alumno(nombre,apellido_p,apellido_m) values('$Nombrev','$ApellidoPv','$ApellidoMv');";
        $insertando = mysqli_query($conexion, $consulta);
        if($insertando)
        {
            echo "<script type='text/javascript'>alert('Alumno insertado');window.location.href = '/sistemaescolar/lib/InsertarAlumno.php';</script>";
            insertLog($consulta);
        } 
        else 
        {
            echo "<script type='text/javascript'>alert('Alumno no insertado');window.location.href = '/sistemaescolar/lib/InsertarAlumno.php';</script>";
        }
    }
        }
?>

<center>

    <div>
        <form action="InsertarAlumno.php" method="post">
    <h4>Nombre: <input type="" name="nombre" pattern="[A-Za-z Ññ Á-Úá-ú]+" title="El campo sólo puede contener letras.">
       
               Apellido paterno: <input type="" name="ApellidoP" pattern="[A-Za-z Ññ Á-Úá-ú]+" title="El campo sólo puede contener letras.">
               Apellido Materno: <input type="" name="ApellidoM" pattern="[A-Za-z Ññ Á-Úá-ú]+" title="El campo sólo puede contener letras."></h4> 
         
          <input class="Botoninsertar" type = "submit">

         <br><br><br>

    </div>
</form>


    

</body>
</html>
