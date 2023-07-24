<?php include("../../templates/header.php");?>
<title>Login Alumno</title>

<div class="containerAlumn">
  <div class="container" style="width: 80%;">
    <form id="login-form" method="POST" action="login.php">
      <div class="text-center">
        <h2>Login de Alumno</h2>
      </div>
      <div class="input-group">
        <input type="text" class="form-control" name="expediente" placeholder="Expediente" required>
      </div>
      <div class="input-group">
        <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" required>
      </div>
      <div class="input-group text-center">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>
  </div>
</div>

<?php include("../../templates/footer.php");?>