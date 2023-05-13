<?php 
$host = "localhost";
$user = "root";
$password = "";
$database = "veteraniapp";
$conexion = mysqli_connect($host,$user,$password,$database);
mysqli_set_charset($conexion,'utf8');
if(mysqli_connect_errno()){
    echo'error en la conexion';
}
?>