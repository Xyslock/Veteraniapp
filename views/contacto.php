
<div class="carga">
  <div class="cargando"></div>
</div>
<!------------------------------------------------Formulario BG---------------------------------------------------------->
<section id="seccion-contacto" class="text-center" style="text-align: center;">
    <!------------------------------------------------Formulario ---------------------------------------------------------->
    <div class="container " id="contenedor-formulario">
        <div id="titulo-formulario" class="text-center mb-4">
            <div><img class="img-fluid " src="./img/soporte2.png" alt="contacto"></div>
            <h2>Contactos</h2>
            <p class="fs-5">Estamos aqui para hacer realidad tus proyectos</p>
        </div>
        <form id="form">
            <div class="mb-3">
                <input type="text" class="form-control" name="email" id="email" placeholder="nombre@ejemplo.com "
                    required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre Completo"
                    required>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="tel" id="tel" placeholder="000-000-000 " required>
            </div>
            <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                    placeholder="Escribe tu mensaje"></textarea>
            </div>
            <div class="mb-3">
                <input class="btn btn-primary w-100 fs-5" type="submit" id="button" value="Enviar mensaje">
                <script type="text/javascript"
                    src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

                <script type="text/javascript">
                    emailjs.init('n4a4MAJtHeco7hzDy')
                </script>
                <script src="form.js"></script>
            </div>
        </form>

    </div>
</section>
