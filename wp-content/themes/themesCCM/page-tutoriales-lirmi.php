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
            <h1>TUTORIALES LIRMI</h1>
        </div>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL -->
<div class="container my-4">
    <div class="row">
        <div class="col-12 mb-4">
            <a href="https://www.youtube.com/watch?v=1w79fYdQLCU" target="_blank" title="tutorial lirmi 1" class="d-flex align-items-center text-decoration-none">
                <i class='bx bxl-youtube me-2' style='color:#f70202; font-size:36px; line-height:1'></i>
                <span class="align-middle">Tutorial para el estudiante</span>
            </a>
        </div>
        <div class="col-12 mb-4">
            <a href="https://www.youtube.com/watch?v=_mf6i__RUrE" target="_blank" title="tutorial lirmi 2" class="d-flex align-items-center text-decoration-none">
                <i class='bx bxl-youtube me-2' style='color:#f70202; font-size:36px; line-height:1'></i>
                Recuperar y cambiar tu contraseña en Lirmi
            </a>
        </div>
        <div class="col-12 mb-4">
            <a href="https://www.youtube.com/watch?v=VIrsON12t4A" target="_blank" title="tutorial lirmi 3" class="d-flex align-items-center text-decoration-none">
                <i class='bx bxl-youtube me-2' style='color:#f70202; font-size:36px; line-height:1'></i>
                Actualizaciones de la App Lirmi Familia
            </a>
        </div>
    </div>

</div>

<!-- FOOTER -->
<div id="footer-component"></div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/footer.js"></script>

<?php get_footer(); ?>