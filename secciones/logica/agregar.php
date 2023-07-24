<?php
$datBase='../../DB/db.php';
require $datBase;

$equip=$_POST['tEquipo'];
$numeric=$_POST['numEquipo'];
$nombr=$_POST["nEquipo"];
$descrip=$_POST['dEquipo'];

$agregar="INSERT INTO equipo VALUES ('$equip','$numeric','$nombr','$descrip')";

$equipos= $conn->query($agregar);

if($equipos){ //Verifica que los datos se hayan cuardado correctamente
    echo '<script>
    alert("Dato Guardado Correctamente");
    </script>';

    echo '<script>
    window.location.href="../Inventario/editarInventario.php";
    </script>';
}

$conn->close();
?>