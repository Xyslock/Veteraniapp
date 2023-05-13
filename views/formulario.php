
<?php
include 'controller/conexion.php';

if (isset($_POST['enviar'])) {

    $nombre = mysqli_real_escape_string($conexion, (strip_tags($_POST["nombre"], ENT_QUOTES)));
    $apellido = mysqli_real_escape_string($conexion, (strip_tags($_POST["apellido"], ENT_QUOTES)));
    $email = mysqli_real_escape_string($conexion, (strip_tags($_POST["email"], ENT_QUOTES)));
    $contrasena = mysqli_real_escape_string($conexion, (strip_tags($_POST["contrasena"], ENT_QUOTES)));
    $telefono = mysqli_real_escape_string($conexion, (strip_tags($_POST["telefono"], ENT_QUOTES)));
    $direccion = mysqli_real_escape_string($conexion, (strip_tags($_POST["direccion"], ENT_QUOTES)));
    $ciudad = mysqli_real_escape_string($conexion, (strip_tags($_POST["ciudad"], ENT_QUOTES)));


    $insert = mysqli_query($conexion, "INSERT INTO usuarios (nombre,apellido,email,contrasena,telefono,direccion,ciudad) VALUES ('$nombre', '$apellido','$email', '$contrasena', '$telefono', '$direccion', '$ciudad')");

    if ($insert) {
        echo 'Dato guardado con exito';
    } else { 
        echo 'Error al guardar';
    }
}
?>
<div class="carga">
    <div class="cargando"></div>
</div>
<section class=" fst-italic" >
    <div class="vet_formulario">
        <div class="vet_formulario_sombra">
            <form class="row g-3 needs-validation" novalidate method="post">
                <div class="container">
                    <div class="row">
                        <form class="fst-italic p" >
                            <h1 class="fs-1 text-center fst-italic pt-6 " >Registro de usuario</h1>
                            <section class="align-items-middle mb-3 ">
                            <div class="mb-3">
                                <label class=" text-center fst-italic "  for="exampleFormControlInput1" class="form-label">Nombre</label>
                                <input class=" text-center fst-italic " type="text" class="form-control" name="nombre">
                            </div>
                            <div class="mb-3">
                                <label class=" text-center fst-italic " for="exampleFormControlInput1" class="form-label">Apellido</label>
                                <input class=" text-center fst-italic " type="text" class="form-control" name="apellido">
                            </div>
                            <div class="mb-3 ps-3">
                                <label class=" text-center fst-italic " for="exampleFormControlInput1" class="form-label">Email</label>
                                <input class=" text-center fst-italic " type="email" class="form-control" name="email">
                            </div>
                            <div class="mb-3 pe-4">
                                <label class=" text-center fst-italic " for="exampleFormControlInput1" class="form-label">Contraseña</label>
                                <input class="text-center fst-italic " type="password" class="form-control" name="contrasena">
                            </div>
                            <div class="mb-3">
                                <label class="text-center fst-italic " for="exampleFormControlInput1" class="form-label">Telefono</label>
                                <input class=" text-center fst-italic " type="text" class="form-control" name="telefono">
                            </div>
                            <div class="mb-3">
                                <label class=" text-center fst-italic " for="exampleFormControlInput1" class="form-label">Direccion</label>
                                <input class="text-center fst-italic" type="text" class="form-control" name="direccion">
                            </div>
                            <div class="mb-3 ps-3">
                                <label class="text-center fst-italic " for="exampleFormControlInput1" class="form-label">Ciudad</label>
                                <input class=" text-center fst-italic " type="text" class="form-control" name="ciudad">
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="text-center fst-italic p-3" class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                    <label class=" text-center fst-italic p-3" class="form-check-label" for="invalidCheck">
                                        Aceptar los términos y condiciones
                                    </label>
                                    <div class="invalid-feedback">
                                        Debe aceptar antes de enviar.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-secondary fst-italic" name="enviar">Enviar</button>
                        </form>
                            </section>     
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
</section>