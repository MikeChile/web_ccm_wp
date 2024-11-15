<?php

get_header(); ?>

<!-- LOADER -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/loader.js"></script>

<!-- HEADER -->
<div id="header-component"></div>

<!-- TITULO -->
<div id="header" class="mb-4 pt-4">
    <div class="container">
        <div id="cajaTitulo">
            <h1>DOCUMENTOS ACADÉMICOS</h1>
        </div>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL-->
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Académicos</h2>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <a target="_blank" href="https://www.colegiocorazondemaria.cl/new/docs/reglamento_de_evaluacion_2023_.pdf">
                REGLAMENTO DE EVALUACIÓN, CALIFICACIÓN Y PROMOCIÓN (formato .pdf)
            </a>
        </div>
    </div>


</div>

<!-- FOOTER -->
<div id="footer-component"></div>

<?php get_footer(); ?>