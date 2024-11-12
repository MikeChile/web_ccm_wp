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

    <div class="d-flex align-items-start">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" style="
min-width: 200px;" aria-orientation=" vertical">
                    <button class="nav-link active" id="v-pills-colegio-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-colegio" type="button" role="tab" aria-controls="v-pills-colegio"
                        aria-selected="true">Colegio</button>

                    <button class="nav-link" id="v-pills-rectoria-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-rectoria" type="button" role="tab" aria-controls="v-pills-rectoria"
                        aria-selected="true">Equipo de Rectoría</button>
                    <button class="nav-link" id="v-pills-gestion-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-gestion" type="button" role="tab" aria-controls="v-pills-gestion"
                        aria-selected="false">Equipo de Gestión</button>
                    <button class="nav-link" id="v-pills-utp-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-utp" type="button" role="tab" aria-controls="v-pills-utp"
                        aria-selected="false">Equipo de UTP</button>
                    <button class="nav-link" id="v-pills-inspectoría-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-inspectoría" type="button" role="tab"
                        aria-controls="v-pills-inspectoría" aria-selected="false">Equipo de Inspectoría</button>
                    <button class="nav-link" id="v-pills-tae-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-tae" type="button" role="tab" aria-controls="v-pills-tae"
                        aria-selected="false">Equipo TAE</button>

                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-colegio" role="tabpanel"
                        aria-labelledby="v-pills-colegio-tab" tabindex="0">
                        <div class="row">
                            <div class="col">
                                <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2023/06/IMG_20230315_104401-scaled-1536x691.jpg"
                                    class="img-fluid" alt="colegio">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col">
                                <p>El Colegio Corazón de María se enorgullece de contar con diversos organismos y
                                    equipos de
                                    trabajo comprometidos en hacer realidad nuestra Misión y Visión institucional.
                                    Nuestra
                                    principal meta es educar y evangelizar a los niños y jóvenes a través de la
                                    propuesta
                                    educativa integral de la Escuela Católica Cordimariana. Para lograrlo,
                                    gestionamos
                                    nuestra Comunidad Educativa con un enfoque organizacional estratégico,
                                    participativo y
                                    corresponsable, siempre orientados hacia la excelencia educativa.</p>
                                <p>Cada uno de estos organismos y equipos desempeña un papel fundamental en nuestra
                                    familia
                                    cordimariana, aportando su labor diaria en diversas áreas del colegio. Entre
                                    ellos, el
                                    Consejo de Rectoría se encarga de velar por la implementación efectiva del
                                    Proyecto
                                    Educativo, el cual adquiere forma a través de distintos grupos de trabajo.</p>
                                <p>Contamos con equipos dedicados a Pastoral, Familia-Escuela, Convivencia Escolar,
                                    Coordinación Académica y los Talleres TAE. Cada uno de estos equipos trabaja
                                    arduamente
                                    para asegurar que nuestros estudiantes reciban una formación integral y de
                                    calidad.</p>
                                <p>En el Colegio Corazón de María valoramos profundamente el compromiso y la
                                    dedicación de
                                    cada uno de nuestros miembros en la comunidad educativa. A través de la
                                    colaboración y
                                    el trabajo conjunto, seguimos avanzando hacia la excelencia educativa y formando
                                    a los
                                    futuros líderes de nuestra sociedad.</p>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-rectoria" role="tabpanel"
                        aria-labelledby="v-pills-rectoria-tab" tabindex="0">
                        <div class="row">
                            <div class="col">
                                <h2>Equipo de Rectoría</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>
                                    El Equipo de Rectoría del Colegio Corazón de María juega un papel fundamental en
                                    el impulso y la dirección de nuestra institución educativa. Con integrantes
                                    altamente capacitados y comprometidos, este equipo se encarga de velar por la
                                    implementación efectiva del Proyecto Educativo, asegurando que los valores y
                                    principios que sustentan nuestra propuesta educativa se lleven a cabo en todos
                                    los aspectos de la vida escolar.
                                </p>
                                <p>
                                    Su labor estratégica y visionaria permite guiar a nuestra comunidad educativa
                                    hacia el logro de los objetivos institucionales, fomentando la excelencia
                                    académica, la formación integral de nuestros estudiantes y el fortalecimiento de
                                    los lazos entre la escuela, la familia y la comunidad.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2023/06/madre-montse-scaled-e1709639708705-199x300.jpeg"
                                    alt="rectoria" class="img-fluid">
                                <p>Madre Montserrat Puigdevall, Rectora.</p>
                            </div>
                            <div class="col">
                                <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2024/03/yaqueline-reyes-200x300.jpg"
                                    alt="rectoria" class="img-fluid">
                                <p>Yaquelin Reyes Seguel, Directora</p>
                            </div>
                            <div class="col">
                                <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2024/08/DSCN0587-2-600x900-1-200x300.png"
                                    alt="rectoria" class="img-fluid">
                                <p>Patricio Massardo Calderón, Gerente de Administración y Finanzas</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-gestion" role="tabpanel"
                        aria-labelledby="v-pills-gestion-tab" tabindex="0">
                        <div class="row">
                            <div class="col">
                                <h2>Equipo de Gestión</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>El equipo de gestión del Colegio Corazón de María es un pilar fundamental en el
                                    funcionamiento y desarrollo de nuestra institución educativa. Conformado por
                                    profesionales altamente capacitados y comprometidos, este equipo se encarga de
                                    planificar, organizar y dirigir todas las actividades y recursos necesarios para
                                    asegurar el adecuado funcionamiento del colegio. Su labor estratégica y
                                    visionaria permite la implementación eficiente de las políticas educativas y
                                    administrativas, garantizando un entorno propicio para el aprendizaje y
                                    crecimiento de nuestros estudiantes. Además, el Equipo de Gestión promueve una
                                    cultura institucional de calidad, participación y mejora continua, fomentando la
                                    colaboración y el trabajo en equipo dentro de la comunidad educativa. Gracias a
                                    su dedicación y liderazgo, el Colegio Corazón de María se destaca como un
                                    referente de excelencia en la educación, brindando a nuestros estudiantes las
                                    herramientas necesarias para su formación integral y su preparación para
                                    enfrentar los desafíos del mundo actual.</p>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-utp" role="tabpanel" aria-labelledby="v-pills-utp-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col">
                                <h2>Equipo de UTP</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>El Equipo de Unidad Técnico Pedagógica (UTP) del Colegio Corazón de María
                                    desempeña un papel esencial en la gestión y mejora de la calidad educativa de
                                    nuestra institución. Compuesto por un equipo de profesionales altamente
                                    capacitados y comprometidos con la excelencia académica, el Consejo de UTP se
                                    encarga de coordinar y supervisar los aspectos pedagógicos y curriculares del
                                    colegio. Su labor se enfoca en la planificación, implementación y evaluación de
                                    estrategias educativas que promuevan un aprendizaje significativo y acorde a las
                                    necesidades de nuestros estudiantes. Además, el Consejo de UTP fomenta la
                                    actualización y formación continua del cuerpo docente, garantizando la calidad y
                                    pertinencia de los procesos de enseñanza y aprendizaje. Gracias al liderazgo y
                                    expertise del Consejo de UTP, el Colegio Corazón de María se distingue por
                                    ofrecer una educación de excelencia, formando a nuestros estudiantes como
                                    ciudadanos competentes, críticos y comprometidos con su desarrollo personal y
                                    social.</p>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-inspectoría" role="tabpanel"
                        aria-labelledby="v-pills-inspectoría-tab" tabindex="0">
                        <div class="row">
                            <div class="col">
                                <h2>Equipo de Inspectoría</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-4">
                                <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2024/08/DSCN0703-2-768x302.jpg"
                                    alt="Inspectoría" class="img-fluid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>El equipo de Inspectoría del Colegio Corazón de María desempeña un rol
                                    fundamental en la promoción de un ambiente escolar seguro, disciplinado y
                                    propicio para el aprendizaje. Compuesto por profesionales comprometidos con el
                                    bienestar y desarrollo integral de nuestros estudiantes, el equipo de
                                    Inspectoría se encarga de velar por el cumplimiento de las normas y reglamentos
                                    internos, así como de promover una convivencia sana y respetuosa en la comunidad
                                    educativa. Además, el equipo de Inspectoría establece una comunicación efectiva
                                    con los padres y tutores, fomentando una colaboración estrecha para garantizar
                                    el adecuado desarrollo personal y académico de los estudiantes. Gracias a su
                                    labor, el Colegio Corazón de María crea un ambiente propicio para el crecimiento
                                    y formación de nuestros estudiantes, cultivando valores y actitudes que los
                                    preparan para convertirse en ciudadanos responsables y comprometidos con la
                                    sociedad.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-tae" role="tabpanel" aria-labelledby="v-pills-tae-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col">
                                <h2>Equipo TAE</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-4">
                                <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2023/06/tae-scaled-e1688102977430-768x432.jpeg"
                                    alt="TAE" class="img-fluid">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <p>Las encargadas de los Talleres TAE del Colegio Corazón de María desempeñan un rol
                                    crucial en el enriquecimiento de la formación integral de nuestros estudiantes.
                                    Estas profesionales altamente capacitadas y apasionadas se encargan de coordinar
                                    y dirigir los Talleres de Aprendizaje Entretenido (TAE) dentro de nuestra
                                    institución. A través de una amplia variedad de disciplinas artísticas,
                                    científicas y deportivas, que van desde la danza hasta la robótica, las
                                    encargadas de los Talleres TAE brindan a los estudiantes la oportunidad de
                                    explorar y desarrollar sus habilidades creativas, expresivas y destrezas
                                    deportivas. Estas actividades complementarias promueven el desarrollo de
                                    talentos individuales al mismo tiempo que fomentan el trabajo en equipo,
                                    estimulan la creatividad y fortalecen la confianza en sí mismos de nuestros
                                    estudiantes. Las encargadas de los Talleres TAE también se preocupan por ofrecer
                                    un ambiente inclusivo y colaborativo, donde cada estudiante se sienta valorado y
                                    pueda participar activamente en actividades de su preferencia. Su dedicación y
                                    compromiso enriquecen la vida estudiantil en el Colegio Corazón de María,
                                    brindando oportunidades valiosas para el crecimiento personal, artístico,
                                    científico y deportivo de nuestros alumnos.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
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