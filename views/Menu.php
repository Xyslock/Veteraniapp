
<nav class="vet-nav navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
        <h1 class="navbar-brand ps-2" >Veteraniapp</h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="usuario.php">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ingreso.php">Mascotas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="FormularioMasc.php">RegistroMasc</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Enfermedades</a>
                </li>
            </ul>
        </div>
        <?php session_start(); ?>   
        <div class="d-flex aling-items-end"> 
          <form  action="controller\cerrar_sesion.php" method="post">
        <button type="submit" name="cerrar_sesion" class="btn btn-secondary  text-light " >  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-octagon-fill" viewBox="0 0 16 16">
  <path d="M11.46.146A.5.5 0 0 0 11.107 0H4.893a.5.5 0 0 0-.353.146L.146 4.54A.5.5 0 0 0 0 4.893v6.214a.5.5 0 0 0 .146.353l4.394 4.394a.5.5 0 0 0 .353.146h6.214a.5.5 0 0 0 .353-.146l4.394-4.394a.5.5 0 0 0 .146-.353V4.893a.5.5 0 0 0-.146-.353L11.46.146zm-6.106 4.5L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708z"/>
</svg></button>
    </form>
          </div>  
    </div>
</nav>