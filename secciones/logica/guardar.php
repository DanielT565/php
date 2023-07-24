<?php
$datBase='../../DB/db.php';
require $datBase;

date_default_timezone_set('America/Mexico_city');

$hora=date("h:i:s");

$id=mysqli_insert_id($conn);

//Variables Para la tabla Alumnos
$exp=$_POST['expediente'];
$carrera=$_POST['carrera'];
$semest=$_POST['semestre'];
$nombres=$_POST['Nombre'];
//Guarda los datos dados por las variables;
$alumnos="INSERT INTO alumnos VALUES ('$exp','$nombres','$carrera','$semest') ";

$query= $conn->query($alumnos);//Conecta e Inserta los datos guardados anteriormente



//Variables para la tabla Docente

$nombMateria=$_POST['materia'];
$nombMaestro=$_POST['nMaestro'];


$docente="INSERT INTO docente VALUES ($id,'$nombMateria','$nombMaestro')";
$docent= $conn->query($docente);


$cantid=$_POST['cantidad'];
$fSolici=$_POST['fechSolicitud'];
$fechEntreg=$_POST["fechEntreg"];
$equipo=$_POST['material'];

$registro="INSERT INTO registro VALUES ($id,'$fSolici','$fechEntreg','$hora','$equipo','$cantid')";
$registr= $conn->query($registro);


if($query and $docent and $registr){ //Verifica que los datos se hayan cuardado correctamente
    echo '<script>
    alert("Dato Guardado Correctamente");
    </script>';

    echo '<script>
    window.location.href="../Alumnos/pagAlumnos.php";
    </script>';
}



?>