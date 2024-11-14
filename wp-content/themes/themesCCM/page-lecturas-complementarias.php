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
            <h1>LECTURAS COMPLEMENTARIAS</h1>
        </div>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL-->
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Complementarias</h2>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <ul>
                <li><a href="https://www.colegiocorazondemaria.cl/new/textos/lecturas_complementarias_lenguaje_segundo_semestre.pdf"
                        target="_blank" rel="noopener noreferrer">Lecturas Complementarias
                        Lenguaje – Segundo Semestre</a></li>
                <li><a href="https://www.colegiocorazondemaria.cl/new/textos/lectura_complementaria_basica_2024.pdf"
                        target="_blank" rel="noopener noreferrer">Lecturas Complementarias
                        Lenguaje (Ed. Básica)</a></li>
                <li><a href="https://www.colegiocorazondemaria.cl/new/textos/lecturas_complementarias_I_semestre_2024.pdf"
                        target="_blank" rel="noopener noreferrer">Lecturas Complementarias
                        Lenguaje (Ed. Media) </a></li>
                <li><a href="https://www.colegiocorazondemaria.cl/new/textos/lecturas_complementarias_ingles.pdf"
                        target="_blank" rel="noopener noreferrer">Lecturas Complementarias
                        Inglés</a>
                </li>
                <li>
                    <a href="https://www.colegiocorazondemaria.cl/new/textos/textos_ingles_2023.pdf"
                        target="_blank" rel="noopener noreferrer">Textos de Estudio Inglés</a>
                </li>
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