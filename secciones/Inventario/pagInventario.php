<?php include("../../templates/header.php");?>


<link rel="stylesheet" href="../../Estilos/estilos.css">

<div method="POST" class="limit p-5 mb-4 bg-light rounded-3" action="../logica/guardar.php">
    <div class="container-fluid py-5">
      <h1 class="display-10 fw-bold fs-5">Lista de Materiales</h1>
      <button class="btn btn-primary btn-lg" type="button">List Materiales</button>
    </div>
  </div>
  <div class="limit p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-10 fw-bold fs-5">Lista de Materiales Devuelto</h1>
      <button class="btn btn-primary btn-lg" type="button">List Materiales</button>
    </div>
  </div>
  <div class="limit p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-10 fw-bold fs-5">Lista de Materiales Prestado</h1>
      <button class="btn btn-primary btn-lg" type="button">List Materiales</button>
    </div>
  </div>
<div class="card">
    <div class="card-header">
        Registro Inventario
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Lista Materiales</th>
                        <th scope="alumn">Nombre Alumno</th>
                        <th scope="col">Lista Material Prestado</th>
                        <th scope="col">Lista Material Devuelto</th>
                        <th scope="status">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">R1C1</td>
                        <td scope="txtnomb">Nombre</td>
                        <td scope="txtprest">R1C3</td>
                        <td scope="txtdebuelt">R1C4</td>
                        <td scope="txtbolean">True/False</td>
                    </tr>
                    <tr class="">
                        <th scope="row">Item</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Item</th>
                        <th scope="col">R1C4</th>
                        <th scope="col">True/False</th>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
</div> 
<?php include("../../templates/footer.php");?>