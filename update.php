<?php

include("conexion.php");
$con=conectar();

$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Email=$_POST['Email'];
$Edad=$_POST['Edad'];
$CURP=$_POST['CURP'];

$sql="UPDATE empleados SET  Nombre='$Nombre',Apellido='$Apellido',Email='$Email',CURP='$CURP' WHERE Nombre='$Nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>