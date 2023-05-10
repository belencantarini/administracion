<section id='contacto' class="w-75 m-auto">
    <div class="textAnimation2">
        <div class="text-uppercase text-center">
            <div>Pedi tu presupuesto</div>
            <div class="h2">Enviame tu pedido de presupuesto</div>
        </div>        
        <form name="sendEmailForm" action="controladores/contacto.controlador.php" method="POST" class="container p-0">
            <div class="d-flex gap-2 flex-column flex-md-row m-0">
                <input type="text" class="form-control w-100" id="formNombre" name="nombre" placeholder="Nombre" required>
                <input type="email" class="form-control w-100" id="formEmail" name="email" placeholder="Correo" required>
            </div>
            <textarea class="form-control mt-3"  name="mensaje" id="formMensaje" cols="30" rows="5" placeholder="Sobre qué quieres consultar?" required></textarea>
            <input type="hidden" name="_subject" value="Nuevo mensaje!">
            <p class="p-0 m-0">Cuidá tu imagen, y sentite plena y natural: conocé los tratamientos. Tenemos tratamientos según tus necesidades.</p>
            <p class="text-muted small">Envia tu consulta y te contestare a la brevedad</p>
            <input class="btn btn-dark w-100" type="submit" value="Enviar formulario"></input>
        </form>
    </div>
</section>
<?php

?>


