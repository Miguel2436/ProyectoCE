<?php session_start();?>
<?php 
    include 'seguridad.php';
    checkSID();
    if(!isset($_SESSION['user'])){header("location:/sistemaescolar/iniciarSesion.html");}
?>
<!DOCTYPE html>
<html>
<head>
    <title>MateriaInsertado</title>
    <style type="text/css">
  .Botoninsertar{
    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0;
  }
</style>
</head>
<body bgcolor="02E0C9">

<?php 
    include 'conexion.php';
    if(isset($_POST['nombre']))
    {
        $Nombrev =utf8_decode( $_POST['nombre']);
        $query="INSERT INTO materia(Nombre)values('$Nombrev');";


        if($Nombrev!="")
        {
            $insertando = mysqli_query($conexion, $query);
            indertLog($query);
            if($insertando)
            {
                echo"<script type='text/javascript'>alert('Inserción realizada correctamente'); window.location.href = '/sistemaescolar/insertar.php';</script>";
            } else 
            {
                  echo"<script type='text/javascript'>alert('Error inesperado '); window.location.href = '/sistemaescolar/insertar.php';</script>";
            }
        }
    }
    mysqli_close($conexion);
?>

<h1>
<table bgcolor="13AB91" width="1350">  <a class=Botoninsertar href="/sistemaescolar/insertar.php"> Regresar </a>
        <tr> <th> <p style="color: White" >Insertar Materia </p></th> </tr>
    </table>
</h1>
<center>
<p style="color: white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <div>
        <form action="insertarmateria.php" method="post">
    <h4>Materia(Nombre): <input type="" name="nombre"></h4> 
        
          
          <input class="Botoninsertar" type = "submit">

         <br><br><br>

    </div>
</form>

    <br><br>
<p style="color: white">Contactanos: 01800 33-fuckyourself  correo: Sistemaescolar.com</p>
    

 
</body>
</html>
