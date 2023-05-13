<link rel="stylesheet" href="css\usuario.css">
<div class="carga">
    <div class="cargando"></div>
</div>
<div class="container ">
    <div class="pt-5">
    <h1 class="text-center pt-5 pt-5">Perfil de Mascota</h1>
    </div>
<div class="d-flex justify-content-center">
<div class="pt-3">
<button type="button" class="btn btn-secondary  " data-bs-toggle="modal" data-bs-target="#exampleModal">
        Cambiar Foto de Mascota
    </button>
</div> 

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cambiar foto de perfil</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                    <form action="controller\procesar-imagen.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="imagen">
                        <input type="submit" value="Subir imagen">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
   
    <?php
    
    include 'controller/conexion.php';

    $id_mascota = isset($_SESSION['id']) ? $_SESSION['id'] : null;
    $id_mascota = $_SESSION['id'];
    $sql = "SELECT imagen FROM mascotas WHERE id='$id_mascota'";
    $resultado = $conexion->query($sql);
    $datos_mascota = $resultado->fetch_assoc();
    $ruta_imagen = "img/usuarios/" . $datos_mascota['imagen'];  ?>
    <?php if ($datos_mascota['imagen']) : ?>
        <div class="py-3 pb-5 pt-2" >
        <img src="<?php echo $ruta_imagen ?>" alt="Imagen de Perfil" class=" perfil rounded mx-auto d-block img-thumbnail  ">
        </div>
    <?php else : ?>
        <p class="text-center">No se ha seleccionado ninguna imagen de perfil.</p>
    <?php endif; ?>
    


    <?php
    include 'controller\conexion.php';
    // Iniciar una sesión para acceder a la variable $_SESSION

    // Obtener el ID del usuario actual de la variable $_SESSION, si está definida


    if ($id_mascota) {
        // Consulta SQL para obtener los detalles del usuario actual
        $sql = "SELECT id, nombre,raza,edad FROM mascotas WHERE id = $id_mascota";
        $resultado = $conexion->query($sql);

        if ($resultado && $resultado->num_rows > 0) {
            // Mostrar los detalles del usuario actual en una tabla HTML
            echo '<table class=" text-light px-3 d-flex justify-content-center pt-3 " >';
            echo  '<tr >
            <th class="px-3 text-center">Nombre</th>
            <th class="px-3 text-center">Raza</th>
            <th class="px-3 text-center">Edad</th>
          </tr>';
            $fila = $resultado->fetch_assoc();
            echo '<tr>
                <td class="px-3 text-center">' . $fila["nombre"] . '</td>
                <td class="px-3 text-center">' . $fila["raza"] . '</td>
                <td class="px-3 text-center">' . $fila["edad"] . '</td>
               >
            </tr>';
            echo "</table>";
        } else {
            echo "No se encontraron resultados.";
        }
    } else {
        echo "No se ha iniciado sesión.";
    }

    ?>
