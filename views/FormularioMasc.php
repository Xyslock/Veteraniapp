<?php
include 'controller/conexion.php';

if (isset($_POST['enviar'])) {

    $nombre = mysqli_real_escape_string($conexion, (strip_tags($_POST["nombre"], ENT_QUOTES)));
    $raza = mysqli_real_escape_string($conexion, (strip_tags($_POST["raza"], ENT_QUOTES)));
    $edad = mysqli_real_escape_string($conexion, (strip_tags($_POST["edad"], ENT_QUOTES)));

    $insert = mysqli_query($conexion, "INSERT INTO mascotas (nombre,raza,edad) VALUES ('$nombre', '$raza','$edad')");

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
            <form class="row g-3 needs-validation" method="post">
                <div class="container">
                    <div class="row">
                            <h1 class="fs-1 text-center fst-italic pt-6 " >Registro de Mascotas</h1>
                            <section class="align-items-middle mb-3 ">
                            <div class="mb-3 pe-2">
                                <label class=" text-center fst-italic "  for="exampleFormControlInput1" class="form-label">Nombre</label>
                                <input class=" text-center fst-italic " type="text" class="form-control" name="nombre">
                            </div>
                            <div class="mb-3 ps-3">
                                <label class=" text-center fst-italic  " for="exampleFormControlInput1" class="form-label">Raza</label>
                                <input class=" text-center fst-italic " type="text" class="form-control" name="raza">
                            </div>
                            <div class="mb-3 ps-3">
                                <label class=" text-center fst-italic " for="exampleFormControlInput1" class="form-label">Edad</label>
                                <input class=" text-center fst-italic " type="text" class="form-control" name="edad">
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
                      
                            </section>     
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
</section>