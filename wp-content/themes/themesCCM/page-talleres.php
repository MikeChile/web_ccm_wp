<?php

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
            <h1> NOTICIAS</h1>
        </div>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL-->
<div class="container">
    <div class="row">
        <div class="col">
            <video class="elementor-video"
                src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2024/03/Profesores-talleres-2024.mp4"
                controls="" preload="metadata" controlslist="nodownload"
                poster="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2024/03/portada-talleres-2024.png"></video>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="https://www.colegiocorazondemaria.cl/new/docs/listado_seleccionados_talleres_2024.pdf">
                <h2>Listado de Seleccionados y Lista de Espera Talleres TAE 2024</h2>
            </a>
        </div>
    </div>
</div>

<!-- FOOTER -->
<div id="footer-component"></div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/footer.js"></script>

<!-- SCRIPTS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

<!-- SCRIPT DE FUNCIONAMIENTO DE BOOTSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>

<?php get_footer(); ?>