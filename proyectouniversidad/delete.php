<?php

include("conexion.php");


$nuevo=$_GET['id'];

$sql="DELETE FROM files  WHERE id='$nuevo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: horarios.php");
    }
?>