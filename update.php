<?php

include("conexion.php");
$con=conectar();

$idx=$_POST['id'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$tel=$_POST['tel'];


$sql = "UPDATE cliente SET nombres='$nombres', apellidos='$apellidos', email='$email', tel='$tel' WHERE id = '$idx'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: cliente.php");
  
    }
    
?>