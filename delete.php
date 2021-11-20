<?php

include("conexion.php");
$con=conectar();

$Nombre=$_GET['Apellido'];

$sql="DELETE FROM empleados  WHERE Nombre='$Nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>
