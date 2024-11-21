<?php

get_header(); ?>

<!-- LOADER -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/loader.js"></script>

<!-- HEADER -->
<div id="header-component"></div>

<!-- MISIÓN, VISIÓN, VALORES -->
<div id="header" class="mb-4 pt-4">
    <div class="container">
        <div id="cajaTitulo">
            <h1> MISIÓN, VISIÓN, VALORES</h1>
        </div>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL-->
<div class="container">

    <div class="row">
        <div class="col">
            <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2023/06/Banner-1-e1687881215789-768x384.png"
                alt="mision" class="img-fluid">
        </div>
    </div>
    <div class="row mt-4">
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
    <div class="row mb-4">
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

<?php get_footer(); ?>