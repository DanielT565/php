<?php
    $urlBase="http://localhost/frontPHP/";
    $urlAlumn="secciones/Alumnos/pagAlumnos.php";
    $urlInventario="secciones/Inventario/pagInventario.php";
    $urllogAlumn="secciones/loginandSignoff/loginAlumnos.php";
    $urllogInventario="secciones/loginandSignoff/loginInventario.php";
    $urledithInventario="secciones/Inventario/editarInventario.php";
    $urlemergent="secciones/Inventario/ventprueb.php";
    $urlconexDB="DB/db.php";
?>

<!doctype html>
<html lang="en">
<head>
    
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link rel="stylesheet" href="../../Estilos/estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="imag"></div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active Logo" href="<?php echo $urlBase?>" aria-current="page">
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link alum" href="<?php echo $urlBase,$urlAlumn;?>">Alumnos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link inven" href="<?php echo $urlBase, $urledithInventario;?>">Inventario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link cSesion" href="#">Cerrar sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <main class='container'>