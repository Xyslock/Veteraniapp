<?php
session_start();
include 'conexion.php';

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['id'])) {
  header("Location: ingreso.php");
  exit();
}

// Verificar si se ha seleccionado una imagen
if (!isset($_FILES['imagen'])) {
  echo "Por favor, seleccione una imagen.";
  exit();
}

// Obtener información del archivo de imagen
$nombre_archivo = $_FILES['imagen']['name'];
$tipo_archivo = $_FILES['imagen']['type'];
$tamano_archivo = $_FILES['imagen']['size'];
$temp_archivo = $_FILES['imagen']['tmp_name'];

// Verificar que el archivo sea una imagen
$permitidos = array("image/jpg", "image/jpeg", "image/png", "image/gif");
if (!in_array($tipo_archivo, $permitidos)) {
  echo "Por favor, seleccione un archivo de imagen válido.";
  exit();
}

// Verificar que el tamaño de la imagen sea menor a 2 MB
if ($tamano_archivo > 2000000) {
  echo "La imagen seleccionada es demasiado grande.";
  exit();
}

// Crear un nombre de archivo único para evitar conflictos
$nombre_archivo_final = $_SESSION['id'] . "_" . time() . "_" . $nombre_archivo;

// Mover el archivo de imagen al directorio de imágenes de usuario
if (!move_uploaded_file($temp_archivo, "../img/usuarios/" . $nombre_archivo_final)) {
  echo "Ha ocurrido un error al subir la imagen.";
  exit();
}
// Obtener el nuevo tamaño de la imagen
$ancho_nuevo = 400;
$alto_nuevo = 300;

// Cargar la imagen original
$imagen_original = imagecreatefromstring(file_get_contents("../img/usuarios/" . $nombre_archivo_final));

// Crear una imagen nueva con el tamaño deseado
$imagen_nueva = imagecreatetruecolor($ancho_nuevo, $alto_nuevo);

// Copiar y redimensionar la imagen original en la nueva imagen
imagecopyresampled($imagen_nueva, $imagen_original, 0, 0, 0, 0, $ancho_nuevo, $alto_nuevo, imagesx($imagen_original), imagesy($imagen_original));

// Guardar la nueva imagen en el directorio de imágenes de usuario
if (!imagejpeg($imagen_nueva, "../img/usuarios/" . $nombre_archivo_final, 100)) {
  echo "Ha ocurrido un error al guardar la imagen redimensionada.";
  exit();
}

// Liberar la memoria utilizada por las imágenes
imagedestroy($imagen_original);
imagedestroy($imagen_nueva);
// Actualizar la imagen de perfil del usuario en la base de datos
$id_usuario = $_SESSION['id'];
$sql = "UPDATE usuarios SET imagen='$nombre_archivo_final' WHERE id='$id_usuario'";
if (!$conexion->query($sql)) {
  echo "Ha ocurrido un error al actualizar la imagen de perfil.";
  exit();
}

// Redirigir al usuario a la página de perfil
header("Location: ../usuario.php");
exit();
?>