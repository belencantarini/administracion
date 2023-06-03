<section id='contacto' class="m-auto">
    <div class="textAnimation2">
        <p class="">Le invitamos a utilizar el siguiente formulario de contacto, o cualquiera de nuestros medios de contacto directo, para enviarnos su mensaje o consulta. Nos pondremos en contacto con usted a la brevedad para brindarle la información y asistencia que necesite.</p>    
        <form class="w-75 m-auto" id="form" name="sendEmailForm" action="controladores/contacto.controlador.php" method="POST" class="container p-0">
            <div class="h4 text-center pt-2">Formulario de Contacto</div>
            <input type="text" class="form-control w-100 my-3" id="formNombre" name="nombre" placeholder="Nombre completo" required>
            <div class="d-flex gap-2 flex-column flex-md-row m-0">
                <input type="text" class="form-control w-100" id="formTelefono" name="telefono" placeholder="Telefono">
                <input type="email" class="form-control w-100" id="formEmail" name="email" placeholder="Correo" required>
            </div>
            <textarea class="form-control mt-3"  name="mensaje" id="formMensaje" cols="30" rows="5" placeholder="Sobre qué quieres consultar?" required></textarea>
            <input type="hidden" name="_subject" value="Nuevo mensaje!">

            <button id="btn" class="btn btn-dark w-100 mt-3" type="submit">
                <span id="text" class="btn-spinner">Enviar formulario</span>
                <span id="spin" class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"><span class="sr-only">Loading...</span></span>
            </button>
        </form>    
        <div class="d-flex flex-column">            
            <ul class="mediaicons d-flex nav justify-content-center flex-column mt-3">  
                <li class="nav-item"><a class="nav-link d-flex p-0 align-items-center"><i class="fas fa-map-marker-alt" aria-hidden="true"></i><p class="my-0 mx-2">Tte. Gral. J. D. Peron 1143 - 6to. piso - Of. "79"</p></a></li>
                <li class="nav-item"><a class="nav-link d-flex p-0 align-items-center" href="mailto:administraciondinatale@gmail.com"><i class="fa fa-envelope fa-1x" aria-hidden="true"></i><p class="my-0 mx-2">administraciondinatale@gmail.com</p></a></li>
                <li class="nav-item"><a class="nav-link d-flex p-0 align-items-center" href="tel:+5491143826817"><i class="fas fa-phone-alt" aria-hidden="true"></i><p class="my-0 mx-2">Telefono/Fax: 011-4382-6817</p></a></li>
            </ul>   
        </div>
        <p class="small">Nuestro horario de atencion directa es de lunes a viernes de 14.00 a 18.00 hs</p>
        <div class="d-flex justify-content-center justify-content-sm-end"><a href="index.php?ruta=inicio" class="btn btn-dark py-2 px-4">Volver a la página de inicio</a></div>
    </div>
</section>



