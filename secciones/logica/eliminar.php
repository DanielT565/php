<?php

$datBase='../../DB/db.php';
require $datBase;

//Se ingresa los datos
$tabAlumns='alumnos';
$tabRegistr='registro';
$tabdocente='docente';
$tabequipo='equipo';
$tabUsers='users';
$id=$_POST['tEliminar'];


//Guarda el dato a eliminar
$sql="DELETE FROM $tabAlumns where expediente='$id'";
$regis="DELETE FROM $tabRegistr where id='$id'";
$docente="DELETE FROM $tabdocente where id='$id'";
$equipo="DELETE FROM $tabequipo where numero='$id'";
$users="DELETE FROM $tabUsers where id='$id'";


$affectedTablesAlumns = 0;
$affectedTablesRegistr = 0;
$affectedTablesdocent=0;
$affectedTablesEquipo=0;
$affectedTablesUsers=0;


//Verifica que la conexión y eliminación del dato sea correcta
if (mysqli_query($conn, $sql)) {
    $affectedTablesAlumns = mysqli_affected_rows($conn);
} else {
    echo "Error al eliminar el dato de la tabla 'alumnos': " . mysqli_error($conn);
}

if (mysqli_query($conn, $regis)) {
    $affectedTablesRegistr = mysqli_affected_rows($conn);
} else {
    echo "Error al eliminar el dato de la tabla 'registro': " . mysqli_error($conn);
}

if (mysqli_query($conn, $docente)) {
    $affectedTablesdocent = mysqli_affected_rows($conn);
} else {
    echo "Error al eliminar el dato de la tabla 'alumnos': " . mysqli_error($conn);
}

if (mysqli_query($conn,$equipo)) {
    $affectedTablesEquipo = mysqli_affected_rows($conn);
} else {
    echo "Error al eliminar el dato de la tabla 'alumnos': " . mysqli_error($conn);
}

if (mysqli_query($conn,$users)) {
    $affectedTablesUsers = mysqli_affected_rows($conn);
} else {
    echo "Error al eliminar el dato de la tabla 'alumnos': " . mysqli_error($conn);
}

//Ingresa comando para verificar la busqueda y eliminar el dato correctamente sin repetir.
if ($affectedTablesAlumns > 0 || $affectedTablesRegistr > 0 || $affectedTablesdocent>0||$affectedTablesEquipo>0 ||$affectedTablesUsers>0) {
    echo '<script>
    alert("Dato eliminado correctamente.");
    </script>';

    echo '<script>
    window.location.href="../Inventario/editarInventario.php";
    </script>';
} else {
    echo '<script>alert("No se encontró ningún dato para eliminar.");</script>';
    echo '<script>
    window.location.href="../Inventario/editarInventario.php";
    </script>';
}
?>