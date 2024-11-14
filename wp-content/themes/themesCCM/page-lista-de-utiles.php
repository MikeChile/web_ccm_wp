<?php

get_header(); ?>

<!-- LOADER -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/loader.js"></script>

<!-- HEADER -->
<div id="header-component"></div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/header.js"></script>

<!-- LISTA DE ÚTILES -->
<div id="header" class="mb-4 pt-4">
    <div class="container">
        <div id="cajaTitulo">
            <h1>LISTA DE ÚTILES</h1>
        </div>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL-->
<div class="container">

    <div class="row mb-4">
        <div class="col">
            <h2>Educación Parvularia</h2>
            <ul>
                <li><a target="_blank" href="https://www.colegiocorazondemaria.cl/new/textos/mm2024.pdf">Medio Mayor</a></li>
                <li><a target="_blank" href="https://www.colegiocorazondemaria.cl/new/textos/pk2024.pdf">Prekínder</a></li>
                <li><a target="_blank" href="https://www.colegiocorazondemaria.cl/new/textos/k2024.pdf">Kínder</a></li>
            </ul>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <h2>Educación Básica</h2>
            <ul>
                <li><a target="_blank" href="https://www.colegiocorazondemaria.cl/new/textos/primero2024.pdf">Primero Básico</a></li>
                <li><a target="_blank" href="https://www.colegiocorazondemaria.cl/new/textos/segundo2024.pdf">Segundo Básico</a></li>
                <li><a target="_blank" href="https://www.colegiocorazondemaria.cl/new/textos/tercero2024.pdf">Tercero Básico</a></li>

                <li><a target="_blank" href="https://www.colegiocorazondemaria.cl/new/textos/cuarto2024.pdf">Cuarto Básico</a></li>
                <li><a target="_blank" href="https://www.colegiocorazondemaria.cl/new/textos/quinto2024.pdf">Quinto Básico</a></li>
                <li><a target="_blank" href="https://www.colegiocorazondemaria.cl/new/textos/sexto2024.pdf">Sexto Básico</a></li>

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