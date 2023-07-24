<?php include("../../templates/header.php");?>
<title>Login Inventario</title>

<div class="containerAlumn">
  <div class="container" style="width: 80%;">
    <form id="login-form" method="POST" action="login.php">
      <div class="text-center">
        <h2>Login Inventario</h2>
      </div>
      <div class="input-group">
        <input type="text" class="form-control" name="usuario" placeholder="Usuario" required>
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