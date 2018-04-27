<?php session_start();?>
<?php 
    include 'seguridad.php';
    
    checkSID();
    if(!isset($_SESSION['user'])){header("location:/sistemaescolar/iniciarSesion.html");}
?>
<!DOCTYPE html>
<html>
<head>
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
</style>
</head>
<body bgcolor="02E0C9">


<h1>
<table bgcolor="13AB91" width="1350"> 
    <a class=Botoninsertar href="/sistemaescolar/insertar.php"> Regresar </a>
        <tr> <th> <p style="color: White" >Insertar Alumno </p></th> </tr>
    </table>
</h1>

<?php
        ReadAlumno();
        include 'conexion.php';
       if(isset($_POST['nombre'])){
        $Nombrev = utf8_decode($_POST['nombre']);
        $ApellidoPv = utf8_decode($_POST['ApellidoP']);
        $ApellidoMv = utf8_decode($_POST['ApellidoM']);
        $conexion = mysqli_connect("localhost","root","","sistemaescolar");
        if ($Nombrev!="" && $ApellidoPv!=""&& $ApellidoMv!=""){ 
            $consulta = "INSERT INTO alumno(nombre,apellido_p,apellido_m) values('$Nombrev','$ApellidoPv','$ApellidoMv');";
        $insertando = mysqli_query($conexion, $consulta);
        if($insertando)
        {
            print("Insertado, todo verde");
            insertLog($consulta);
        } 
        else 
        {
            print("No insertado");}
        }
        mysqli_close($conexion);}
?>

<center>
<p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div>
        <form action="InsertarAlumno.php" method="post">
    <h4>Nombre: <input type="" name="nombre" pattern="[A-Za-z Ññ Á-Úá-ú]+" title="El campo sólo puede contener letras."></h4> 
        <table>
                <tr><th>Apellido paterno: <input type="" name="ApellidoP" pattern="[A-Za-z Ññ Á-Úá-ú]+" title="El campo sólo puede contener letras."></th><th>Apellido Materno: <input type="" name="ApellidoM" pattern="[A-Za-z Ññ Á-Úá-ú]+" title="El campo sólo puede contener letras."></th></tr>
                
        </table>
          
          <input class="Botoninsertar" type = "submit">

         <br><br><br>

    </div>
</form>

    <br><br>
<p style="color: white">Contactanos: 01800 33-fuckyourself  correo: Sistemaescolar.com</p>
    

</body>
</html>
