<?php
/* Template Name: Noticias */
get_header(); ?>

<!-- LOADER -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/loader.js"></script>

<!-- HEADER -->
<div id="header-component"></div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/header.js"></script>

<!-- TITULO -->
<div id="header" class="mb-4 pt-4">
    <div class="container">
        <div id="cajaTitulo">
            <h1> PROCEDIMIENTOS DE EMERGENCIAS</h1>
        </div>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL -->
<div class="container mt-4">

    <div class="row my-4">
        <div class="col">

            <h3 class="h3-responsive mb-2">PROCEDIMIENTO DE ACCIÓN EN CASO DE EMERGENCIA PARA APODERADOS</h3>
            <h4 class="mb-4">Puede descargar el protocolo en formato .pdf desde <a href="https://www.colegiocorazondemaria.cl/new/textos/procedimiento_de_accion_frente_a_emergencias_para_apoderados_2022.pdf" target="_blank">este enlace.</a></h4>

            <h3 class="h3-responsive mb-2">PROCEDIMIENTO PROFESORES FRENTE A EMERGENCIAS Y/O EVACUACIÓN</h3>
            <h4 class="mb-4">Puede descargar el protocolo en formato .pdf desde <a href="https://www.colegiocorazondemaria.cl/new/textos/procedimiento_profesores_frente_a_emergencias_o_evacuacion_2022.pdf" target="_blank">este enlace.</a></h4>


        </div>
    </div>

</div>

<!-- FOOTER -->
<div id="footer-component"></div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/footer.js"></script>

<?php get_footer(); ?>