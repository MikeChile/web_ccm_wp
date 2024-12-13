<?php
get_header(); ?>

<!-- HEADER -->
<div id="header-component"></div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/header.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/lightbox/dist/css/lightbox.css" rel="stylesheet">
<script src="<?php echo get_template_directory_uri(); ?>/assets/lightbox/dist/js/lightbox.js"></script>

<!-- TÍTULO -->
<div id="header" class="mb-4 pt-4">
    <div class="container">
        <div id="cajaTitulo">
            <h1>TRABAJA CON NOSOTROS</h1>
        </div>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL -->
<div class="container my-4">
    <div class="row">
        <div class="col mb-4">
            <h2>¡Te invitamos a formar parte del Proyecto Educativo Cordimariano!</h2>
            <p>En nuestro colegio actualizamos de forma constante el listado de puestos vacantes en función de las necesidades de reemplazos a largo y corto plazo.</p>
            <p>Puede postular al colegio o a los anuncios de trabajo a través del siguiente formulario de postulación o directamente al correo <a href="mailto:ccm.contacto@colegiocorazondemaria.cl">ccm.contacto@colegiocorazondemaria.cl</a></p>

        </div>
    </div>

</div>

<!-- FOOTER -->
<div id="footer-component"></div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/footer.js"></script>

<?php get_footer(); ?>