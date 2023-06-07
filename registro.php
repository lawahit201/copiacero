<?php 
include 'conexion.php';

$user=$_POST['user'];

$passw=$_POST['password'];

//variable para conexioon

$sql="INSERT INTO usuario (login,password) VALUES ('$user','$passw')";

if(mysqli_query($conn,$sql))

{

    //echo"Se guardaron los datos satisfactoriamente inteta iniciar secion" ;

    header("location:logeo.html");

}

else{

    echo"Lo sentimos, no se realizo la operacion".$sql.mysqli_error($conn);

}



?>