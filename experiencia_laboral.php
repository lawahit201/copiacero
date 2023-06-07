<?php 
include 'conexion.php';

$emuno=$_POST['empleouno'];
$iniciouno=$_POST['periodoinicio'];
$finuno=$_POST['periodofin'];
$actividaduno=$_POST['actividaduno'];
$salariouno=$_POST['salariouno'];
$emdos=$_POST['empleodos'];
$iniciodos=$_POST['periodoiniciodos'];
$findos=$_POST['periodofindos'];
$actividaddos=$_POST['actividaddos'];
$salariodos=$_POST['salariodos'];

//variable para conexioon

$sql="INSERT INTO experiencia_laboral (empleo_uno,periodo_empleo_inicio_uno,periodo_empleo_fin_uno,actividad_empleo_uno,salario_empleo_uno,empleo_dos,periodo_empleo_inicio_dos,periodo_empleo_fin_dos,actividad_empleo_dos,salario_empleo_dos) 
VALUES ('$emuno','$iniciouno','$finuno','$actividaduno','$salariouno','$emdos','$iniciodos','$findos','$actividaddos','$salariodos')";

if(mysqli_query($conn,$sql))

{

    //echo"Se guardaron los datos satisfactoriamente inteta iniciar secion" ;

    header("location:formacion_educativa.html");

}

else{

    echo"Lo sentimos, no se realizo la operacion".$sql.mysqli_error($conn);

}



?>