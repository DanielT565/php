
<?php include("../../templates/header.php");?>
<title>Registro Alumnos</title>
<link rel="stylesheet" href="../../Estilos/estilos.css">

<form method="POST" action="../logica/guardar.php">
    <div class="containers">
        <h2>Registro de Alumnos</h2>
        <table class="table">
            <tr>
                <td>
                    <label for="nombreAlumno">Expediente:</label>
                    <input type="number" class="form-control" id="nombreAlumno" placeholder="Ingrese su Expediente" name="expediente">
                </td>
                
                <td>
                    <label for="nombreAlumno">Nombre del Alumno:</label>
                    <input type="text" class="form-control" id="nombreAlumno" placeholder="Ingrese el nombre del alumno" name="Nombre">
                </td>
                
            </tr>
            <tr>
                
                <td>
                    <label for="nombreAlumno">Carrera:</label>
                    <input type="text" class="form-control" id="nombreAlumno" placeholder="Ingrese su Carrera" name="carrera">
                </td>
                <td>
                    <label for="fechaEntrega">Semestre:</label>
                    <input type="number" class="form-control" id="fechaEntrega"
                    placeholder="Ingrese el Semestre" name="semestre">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="materia">Nombre de la Materia:</label>
                    <input type="text" class="form-control" id="materia" placeholder="Ingrese el nombre de la materia" name="materia">
                </td>
                <td>
                    <label for="material">Material a Solicitar:</label>
                    <input type="text" class="form-control" id="material" placeholder="Ingrese el material a solicitar" name="material">
                </td>
               
            </tr>
            <tr>
                <td>
                    <label for="practica">Práctica:</label>
                    <input type="text" class="form-control" id="practica" placeholder="Ingrese el nombre de la práctica" name="practica">
                </td>
                <td>
                    <label for="cantidad">Cantidad:</label>
                    <input type="number" class="form-control" id="cantidad" placeholder="Ingrese la cantidad" name="cantidad">
                </td>
                
            </tr>
            <tr>
                 <td>
                    <label for="maestro">Nombre del Maestro:</label>
                    <input type="text" class="form-control" id="maestro" placeholder="Ingrese el nombre del maestro" name="nMaestro">
                </td>
              
                <td>
                    <label for="fechaSolicitud">Fecha de Solicitud:</label>
                    <input type="date" class="form-control" id="fechaSolicitud" name="fechSolicitud">
                </td>
                
            </tr>
            <tr>
                <td>
                    <label for="fechaEntrega">Fecha de Entrega:</label>
                    <input type="date" class="form-control" id="fechaEntrega" name="fechEntreg">
                </td>
                <td>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </td>
            </tr>
        </table>
    </div>
</form>
<?php include("../../templates/footer.php");?>