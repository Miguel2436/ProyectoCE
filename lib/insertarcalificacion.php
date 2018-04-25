<?php session_start();?>
<?php 
    include 'seguridad.php';
    include 'log.php';
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
    ReadCursa();
    include 'conexion.php';
    if(isset($_POST['idAlumno']))
    {
        $idAlumnov = utf8_decode( $_POST['idAlumno']);
        $idMateriav = utf8_decode( $_POST['IdMateria']);
        $idCalificacionv = utf8_decode( $_POST['Calificacion']);

        if($idAlumnov!="" && $idMateriav!="" && $idCalificacionv!="")
        {
            //$insertando = mysqli_query($conexion, "INSERT INTO cursa(IdAlumno,IdMateria,Calificacion) values('$idAlumnov','$idMateriav','$idCalificacionv');");
            if($idCalificacionv >= 0 && $idCalificacionv <= 100)
            {
                $consulta = "INSERT INTO cursa(IdAlumno,IdMateria,Calificacion) values('$idAlumnov','$idMateriav','$idCalificacionv');";
                $insertando = mysqli_query($conexion, $consulta);
                print("Insertado, todo verde");
                insertLog($consulta);
                mysqli_close($conexion);
            } else
            {
                echo "<script type='text/javascript'>alert('Campo calificacion fuera de rango');</script>";
            }


            /*if($insertando)
            {
                print("Insertado, todo verde");
            } else
            {
                print("No insertado");
            }*/
        }
    }
    //mysqli_close($conexion);
    ?>
     
    <h1>
    <table bgcolor="13AB91" width="1350"> <a class=Botoninsertar href="/sistemaescolar/insertar.php"> Regresar </a>
            <tr> <th> <p style="color: White" >Insertar Calificación </p></th> </tr>
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
            <form action="insertarcalificacion.php" method="post">
        <h4>Id Alumno: <input type="" name="idAlumno"></h4> 
            <table>
                    <tr><th>IdMateria: <input type="" name="IdMateria"></th><th>Calificacion: <input type="" name="Calificacion" pattern="[0-9]+" title="El campo sólo puede contener números."></th></tr>           
            </table>
              
              <input class="Botoninsertar" type = "submit">

             <br><br><br>

        </div>
    </form>

        <br><br>
    <p style="color: white">Contactanos: 01800 33-fuckyourself  correo: Sistemaescolar.com</p>
    </body>
</html>
