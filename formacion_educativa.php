<?php 
include 'conexion.php';

$titulo=$_POST['titulo'];
$iniciouno=$_POST['periodoinicio'];
$finuno=$_POST['periodofin'];


//variable para conexioon

$sql="INSERT INTO formacion_educativa (titulo,periodo_inicio,periodo_termino) 
VALUES ('$titulo','$iniciouno','$finuno')";

if(mysqli_query($conn,$sql))

{

    //echo"Se guardaron los datos satisfactoriamente inteta iniciar secion" ;

    header("location:formacion_educativa.html");

}

else{

    echo"Lo sentimos, no se realizo la operacion".$sql.mysqli_error($conn);

}
