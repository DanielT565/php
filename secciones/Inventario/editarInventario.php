<?php include("../../templates/header.php");
?>
<title>Editar</title>

<div class="limit p-5 mb-4 bg-light rounded-3">
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
                <button class="btn btn-primary float-end mx-1"  type="button">Editar</button>
                <button class="btn btn-danger float-end mx-1" type="button" data-bs-toggle="modal" data-bs-target="#Eliminar">Eliminar</button>
                <button class="btn btn-success float-end mx-1" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar</button>
        </div>
    </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
      </div>
      <div class="modal-body">
      <form method="POST" action="../logica/agregar.php">
      <table class="table">
            <tr>
                <td>
                    <label for="nombreAlumno">Equipo:</label>
                    <input type="text" class="form-control" placeholder="Ingrese el tipo de equipo" name="tEquipo">
                </td>
                
                <td>
                    <label for="nombreAlumno">Numero:</label>
                    <input type="number" class="form-control" placeholder="Ingrese el numero del Equipo" name="numEquipo">
                </td>
                
            </tr>
            <tr>
                
                <td>
                    <label for="nombreAlumno">Nombre:</label>
                    <input type="text" class="form-control" placeholder="Ingrese el nombre del Equipo" name="nEquipo">
                </td>
                <td>
                    <label for="fechaEntrega">Descripción:</label>
                    <input type="text" class="form-control"
                    placeholder="Ingrese la descripción" name="dEquipo">
                </td>
            </tr>
        </table>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="Eliminar" tabindex="-1" aria-labelledby="Eliminar" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Eliminar">Eliminar</h5>
      </div>
      <div class="modal-body">
      <form method="POST" action="../logica/eliminar.php">
      <table class="table">
            <tr>
                <td>
                    <label for="nombreAlumno">Eliminar:</label>
                    <input type="text" class="form-control" placeholder="Ingrese el id a eliminar" name="tEliminar">
                </td>
        </table>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" onclick="return" >Eliminar</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php include("../../templates/footer.php");?>