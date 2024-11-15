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
            <h1>DOCUMENTOS INSTITUCIONALES</h1>
        </div>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL-->
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Institucionales</h2>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col">
            <ul>
                <li><a target="_blank" href="https://www.colegiocorazondemaria.cl/new/docs/pei.pdf">
                        PROYECTO EDUCATIVO INSTITUCIONAL (P.E.I.)
                    </a></li>
                <li><a target="_blank" href="https://www.colegiocorazondemaria.cl/new/docs/rie_ccm.pdf">
                        REGLAMENTO INTERNO ESCOLAR (R.I.E.)
                    </a></li>
                <li><a target="_blank" href="https://www.colegiocorazondemaria.cl/new/docs/protocolos.pdf">
                        PROTOCOLOS DE ACCIÓN
                    </a></li>
                <li><a target="_blank" href="https://www.colegiocorazondemaria.cl/new/docs/protocolo_de_funcionamiento_tae_2024.pdf">
                        PROTOCOLO DE FUNCIONAMIENTO DE TALLERES
                        EXTRAPROGRAMÁTICOS
                    </a></li>
                <li><a target="_blank" href="https://www.colegiocorazondemaria.cl/new/docs/pise_ccm2018.pdf">
                        PLAN INTEGRAL DE SEGURIDAD ESCOLAR
                    </a></li>
            </ul>


        </div>
    </div>


</div>

<!-- FOOTER -->
<div id="footer-component"></div>

<?php get_footer(); ?>