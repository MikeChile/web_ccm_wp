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
            <h1>TRANSPORTE ESCOLAR</h1>
        </div>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL -->
<div class="container my-4">
    <div class="row">
        <div class="col mb-4">
            <h2>Aspectos a Considerar</h2>
            <p>El Gobierno de Chile, a través del <span class="important">Ministerio De Transportes Y Telecomunicaciones</span>, cuenta con un registro especial denominado <span class="important">“Registro Nacional de Transporte Público y Escolar”</span>. Antes de contratar un servicio se debe, en primer lugar, verificar si la patente del vehículo se encuentra en este registro.</p>

            <ul>
                <li>El certificado de registro deberá portarse en todo momento en que el vehículo esté efectuando transporte escolar.</li>
                <li>Los vehículos de año de fabricación desde el 2007 en adelante deben contar con <span class="important">cinturón de seguridad, EN TODOS LOS ASIENTOS</span>.</li>
                <li>El conductor debe poseer licencia de conducir <span class="important">“CLASE A3” (A1 ANTIGUA)</span> y contar con una identificación visible que incluya foto y nombre.</li>
                <li>Toda la documentación del vehículo debe encontrarse vigente (<span class="important">revisión técnica, análisis de gases, permiso de circulación y seguro obligatorio</span>).</li>
                <li>La revisión técnica debe indicar la capacidad máxima de pasajeros, cifra que debe estar informada al interior del vehículo y respetada por el conductor/a y las familias.</li>
                <li>Debe tener en el techo un <span class="important">letrero triangular que diga “Escolares”</span>, de fondo amarillo con letras negras, reflectante o iluminado.</li>
                <li>Debe contar con <span class="important">luz estroboscópica</span> en el techo o cinta reflectante debajo de las ventanas.</li>
                <li>Debe contar con un <span class="important">extintor de incendios</span>.</li>
                <li>Los asientos deben estar dispuestos hacia adelante, tener 30 cm de ancho y un respaldo mínimo de 35 cm de altura.</li>
                <li>Si transporta más de 5 niños de jardines infantiles o educación parvularia, debe viajar acompañado de un adulto, cuyos datos también deben estar registrados en el Registro Nacional de Transporte Escolar.</li>
            </ul>

            <h3>Recomendaciones</h3>
            <ul>
                <li>Solicitar copia del certificado de inscripción en el Registro Nacional de Transporte Escolar.</li>
                <li>Suscribir un contrato por escrito al solicitar un servicio de transporte escolar para garantizar transparencia y evitar incumplimientos.</li>
                <li>Actualizar permanentemente los datos del conductor para localizarlo en caso de emergencia.</li>
                <li>Entregar al colegio la información sobre el transporte escolar contratado.</li>
                <li>Verificar que el conductor esté habilitado para trabajar con niños o niñas: <a href="https://inhabilidades.srcei.cl/ConsInhab/consultaInhabilidad.do" target="_blank">Consulta de inhabilidades para trabajar con menores de edad</a>.</li>
            </ul>

            <h3>Medidas Sanitarias COVID-19</h3>
            <p>Las exigencias sanitarias incluyen:</p>
            <ul>
                <li>Registro diario de pasajeros para favorecer la trazabilidad.</li>
                <li>Toma de temperatura y uso permanente de mascarilla.</li>
                <li>Desinfección regular de las superficies del vehículo.</li>
                <li>Prohibición de ingerir alimentos dentro del furgón.</li>
            </ul>

            <h3>En Caso de Situación Irregular</h3>
            <p>Si como apoderado presencias problemas o irregularidades en el transporte escolar, puedes denunciar llamando al <span class="important">143</span>, el número del fono denuncias del <span class="important">Ministerio De Transportes Y Telecomunicaciones</span>.</p>

            <h3>Enlaces de Descarga</h3>
            <p>Puedes descargar el <a href="https://www.colegiocorazondemaria.cl/new/textos/transporte_escolar_legislacion_vigente.pdf" target="_blank" class="highlight">Informativo Transporte Escolar</a> en formato PDF.</p>
        </div>
    </div>

</div>

<!-- FOOTER -->
<div id="footer-component"></div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/footer.js"></script>

<?php get_footer(); ?>