<div class="carga">
  <div class="cargando"></div>
</div>
<section>
  <div class="vet_ingreso">
    <div class="vet_ingreso_sombra">
      <form class="row g-3" action="" method="post">
        <div class="col-md-6">
          <?php
          session_start();
          include 'controller\conexion.php';

          $error = ""; // Variable de error

          if (isset($_POST['email']) && isset($_POST['contrasena'])) {
            $email = $_POST['email'];
            $contrasena = $_POST['contrasena'];
            $sql = "SELECT id, nombre FROM usuarios WHERE email='$email' AND contrasena='$contrasena'";
            $result = $conexion->query($sql);
            if ($result->num_rows == 1) {
              $row = $result->fetch_assoc();
              $_SESSION['id'] = $row['id'];
              $_SESSION['nombre'] = $row['nombre'];
              header("Location: Veterinapp.php");
              exit();
            } else {
              $error = "Email o contraseña incorrectos. ";
              echo "<script>alert('Debe registrarse.');</script>"; // Mostrar alerta
            }
          }

          // Proteger la página de inicio
          if (isset($_SESSION['id'])) {
            header("Location: Veterinapp.php");
            exit();
          }
          ?>
          <label for="inputEmail4" class="form-label">Correo</label>
          <input type="email" class="form-control" id="inputEmail4" name="email">
          <span id="emailError" style="color: red; display: none;">Por favor, ingresa un correo válido.</span>
          <span id="correoError" style="color: red; display: <?php echo ($error != "") ? "block" : "none"; ?>;"><?php echo $error; ?></span>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Contraseña</label>
          <input type="password" class="form-control" id="inputPassword4" name="contrasena">
        </div>
        <div class="col-12">
          <div class="form-check">
            <label class="form-check-label" for="gridCheck">
              Recordarme
              <input class="form-check-input" type="checkbox" id="gridCheck">
            </label>
          </div>
        </div>
        <div class="col-12">
          <a href="formulario.php">Registrate</a>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary" id="btnIniciarSesion">Iniciar sesión</button>
        </div>
      </form>
    </div>
  </div>
</section>
