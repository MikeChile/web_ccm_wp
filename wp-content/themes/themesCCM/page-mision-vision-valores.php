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
            <h2>Historia del Colegio Corazón de María de San Miguel</h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2023/06/Banner-1-e1687881215789-768x384.png"
                alt="mision" class="img-fluid">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>MISIÓN : FORMAR JÓVENES DE BIEN </h3>
            <p>Educamos y Evangelizamos a los Niños y Jóvenes desde la propuesta educativa integral de la Escuela
                Católica Cordimariana, gestionando nuestra Comunidad Educativa con un enfoque organizacional
                estratégico, participativo, corresponsable, orientando a la calidad educativa.</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>VISIÓN </h3>
            <p>Ser una Comunidad Educativa Cordimariana que, a través de la propuesta de Educación Integral
                Católica, forma Jóvenes de bien que incidan positivamente en la sociedad.</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>VALORES </h3>
            <ul>
                <li>Alegría</li>
                <li>Sabiduría Interior</li>
                <li>Sencillez</li>
                <li>Solidaridad</li>
                <li>Trabajo en Equipo</li>
            </ul>
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