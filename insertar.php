<?php
include("conexion.php");
$con=conectar();

$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Email=$_POST['Email'];
$Edad=$_POST['Edad'];
$CURP=$_POST['CURP'];

$sql="INSERT INTO empleados VALUES('$Nombre','$Apellido','$Email','$Edad','$CURP')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>