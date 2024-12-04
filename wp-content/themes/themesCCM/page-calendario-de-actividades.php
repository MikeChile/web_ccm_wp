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
            <h1> CALENDARIO DE ACTIVIDADES</h1>
        </div>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL-->
<div class="container mt-4">
    <div class="row mb-4">

        <div class="col-12 p-4">
            <blockquote class="elementor-blockquote ps-2">
                <p class="elementor-blockquote__content">
                    “Hagamos vida la solidaridad desde nuestra identidad cordimariana”

                </p>
                <div class="e-q-footer">
                    <cite class="elementor-blockquote__author">Lema CCM 2024</cite>
                </div>
            </blockquote>

        </div>

        <hr>

        <div class="col-12 p-4">
            <div class="row">
                <div class="col-12 col-md-6 mb-2">
                    <h4>Primer Semestre</h4>
                    <p>Inicio : viernes 01 de marzo</p>
                    <p>Término : martes 18 de junio</p>
                </div>
                <div class="col-12 col-md-6 mb-2">
                    <h4>Segundo Semestre</h4>
                    <p>Inicio : martes 09 de julio</p>
                    <p>Término : </p>
                    <p>MM a III° medio jueves 12 de diciembre</p>
                    <p>IV° medio 6 días antes de la PAES</p>
                </div>
                <div class="col-12 col-md-6 mb-2">
                    <h4>Promedio Semestral</h4>
                    <p>1º Básico a IVº Medio: lunes 17 de junio</p>
                </div>
                <div class="col-12 col-md-6 mb-2">
                    <h4>Promedio Final</h4>
                    <p>1° básico a III° medio : viernes 13 de diciembre</p>
                    <p>IVº Medio : por confirmar según fecha PAES</p>
                </div>
            </div>
        </div>

        <hr>

        <div class="col-12 p-4">
            <p><b>VACACIONES DE INVIERNO (estudiantes) :</b> desde el miércoles 19 de junio al lunes 08 de julio</p>
            <p><b>INTERFERIADOS :</b> lunes 20 de mayo – lunes 8 y 15 de julio – viernes 16 de agosto </p>
            <p><b>VACACIONES DE FIESTAS PATRIAS :</b> desde el lunes 16 al viernes 20 de septiembre</p>
            <p><b>DÍA DEL EDUCADOR CCM :</b> miércoles 16 de octubre</p>
        </div>

        <hr>

        <div class="col-12 p-4">
            <h4>REUNIONES DE APODERADOS </h4>

            <table class="table">
                <thead>
                    <th>MES</th>
                    <th>FECHA</th>
                    <th>MES</th>
                    <th>FECHA</th>
                </thead>
                <tbody>
                    <tr>
                        <td>MARZO</td>
                        <td>26 y 27</td>
                        <td>AGOSTO</td>
                        <td>27 y 29</td>
                    </tr>
                    <tr>
                        <td>ABRIL</td>
                        <td>23 y 25 Directivas de curso PPAA</td>
                        <td>OCTUBRE</td>
                        <td>29 y 30</td>
                    </tr>
                    <tr>
                        <td>JUNIO</td>
                        <td>17 y 18</td>
                        <td>NOVIEMBRE</td>
                        <td>28 Directivas de curso PPAA</td>
                    </tr>
                    <tr>
                        <td>JULIO</td>
                        <td>30 y 01 Directivas de curso PPAA</td>
                        <td>DICIEMBRE</td>
                        <td>17 y 19 </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <hr>

        <div class="col-12 p-4">
            <a href="https://www.colegiocorazondemaria.cl/new/docs/calendario_de_actividades_ed_2024.pdf">
                Descargar este comunicado en formato .pdf
            </a>
        </div>
    </div>
</div>

<!-- FOOTER -->
<div id="footer-component"></div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/footer.js"></script>

<?php get_footer(); ?>