<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$tel=$_POST['tel'];


$sql="INSERT INTO cliente VALUES('$id','$nombres','$apellidos','$email','$tel')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: cliente.php");
}
?>