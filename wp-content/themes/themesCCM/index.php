<?php get_header(); ?>

<!-- LOADER -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/loader.js"></script>

<!-- HEADER -->
<div id="header-component"></div>

<!-- VIDEO PRESENTACIÓN-->
<div id="video">
    <video autoplay muted loop id="backgroundVideo">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/video/videocol.mp4" type="video/mp4">
        Tu navegador no soporta la reproducción de videos.
    </video>
    <button id="audioButton" class="audio-control"><i class='bx bxs-volume-full'></i></button>
</div>

<!-- CONTENIDO PRINCIPAL-->
<div class="container">

    <!-- INFORMACIÓN IMPORTANTE-->
    <section id="about" class="my-4">
        <h4>Colegio Corazón de María</h4>
        <div class="row">
            <div class="col-6">
                <div class="cajaAbout">
                    <a href="http://localhost/web_ccm_wordpress/lista-de-utiles/">
                        <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2025/03/1-768x192.png" alt="imagen 1" class="img-about">
                    </a>
                </div>
            </div>
            <div class="col-6">
                <div class="cajaAbout">
                    <a href="http://localhost/web_ccm_wordpress/admision-2025/">
                        <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2025/03/Boton-Home-768x192.png" alt="imagen 1" class="img-about">
                    </a>
                </div>
            </div>
            <div class="col-6">
                <div class="cajaAbout">
                    <a href="https://www.colegiocorazondemaria.cl/new/circulares-informativas/">
                        <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2025/03/6.png" alt="imagen 1" class="img-about">
                    </a>
                </div>
            </div>
            <div class="col-6">
                <div class="cajaAbout">
                    <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2025/03/Lema2025-4.png" alt="imagen 1" class="img-about">
                </div>
            </div>
        </div>
    </section>

    <!-- SECCIÓN NOTICIAS -->
    <!--Noticias 2.0-->
    <section class="d-none d-sm-inline" id="noticias" class="my-4">
        <h4>Colegio Corazón de María</h4>
        <h2>Noticias CCM</h2>

        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <!-- Aquí se cargarán las noticias -->
                </div>

            </div>

            <div class="swiper-pagination"></div>
        </div>
    </section>
    <script>
        // Cargar noticias
        async function cargarNoticiasRecientes() {
            try {
                const respuesta = await fetch('<?php echo get_template_directory_uri(); ?>/datos/noticias.json');
                const noticias = await respuesta.json();

                // Ordenar las noticias por fecha (descendente)
                const noticiasOrdenadas = noticias.sort((a, b) => new Date(b.fecha_publicacion) - new Date(a.fecha_publicacion));

                // Tomar las 7 noticias más recientes
                const noticiasRecientes = noticiasOrdenadas.slice(0, 7);

                const swiperWrapper = document.querySelector('.swiper-wrapper');
                var swiperContainer = document.querySelector('.slide-content');
                var swiper;

                // Crear las noticias para el slider
                noticiasRecientes.forEach(noticia => {
                    const divNoticia = document.createElement('div');
                    divNoticia.className = 'card swiper-slide';

                    const descripcionCorta = noticia.descripcion.substring(0, 100) + '...';

                    divNoticia.innerHTML = `
                        <div class="image-content">
                            <div class="card-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/${noticia.ruta_imagen}" 
                                    alt="${noticia.titulo}" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <h2 class="name">${noticia.titulo}</h2>
                            <p class="description">${descripcionCorta}</p>
                            <button class="button">Ver más</button>
                        </div>
                    `;

                    swiperWrapper.appendChild(divNoticia);
                });

                // Inicializar Swiper después de agregar todos los elementos del slider
                setTimeout(() => {
                    if (swiperContainer) {
                        var swiper = new Swiper(swiperContainer, {
                            slidesPerView: 5,
                            spaceBetween: 25,
                            loop: true,
                            centerSlide: true,
                            fade: true,
                            grabCursor: true,
                            pagination: {
                                el: ".swiper-pagination",
                                clickable: true,
                                dynamicBullets: true,
                            },
                            navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev",
                            },
                            autoplay: {
                                delay: 100,
                                reverseDirection: true,
                            },
                            speed: 3500,
                            breakpoints: {
                                0: {
                                    slidesPerView: 1,
                                },
                                520: {
                                    slidesPerView: 2,
                                },
                                950: {
                                    slidesPerView: 3,
                                },
                            },
                        });
                    } else {
                        console.error("No se encontró el contenedor de Swiper");
                    }
                }, 100);
            } catch (error) {
                console.error("Error al cargar las noticias recientes:", error);
            }
        }

        // Llamar a la función al cargar la página
        document.addEventListener('DOMContentLoaded', cargarNoticiasRecientes);
    </script>

    <!--Noticias movil-->
    <div class="d-sm-none">
        <div class="scroll">

        </div>
    </div>

    <script>
        async function cargarNoticiasMovil() {
            try {
                const respuesta = await fetch('<?php echo get_template_directory_uri(); ?>/datos/noticias.json');
                const noticias = await respuesta.json();

                // Ordenar las noticias por fecha (descendente)
                const noticiasOrdenadas = noticias.sort((a, b) => new Date(b.fecha_publicacion) - new Date(a.fecha_publicacion));

                // Tomar las 5 noticias más recientes
                const noticiasRecientes = noticiasOrdenadas.slice(0, 7);

                const contenedorMovil = document.querySelector('.scroll');

                // Crear las tarjetas de noticias para móvil
                noticiasRecientes.forEach(noticia => {
                    const card = document.createElement('div');
                    card.className = 'card';

                    card.innerHTML = `
                    <a href="<?php echo get_template_directory_uri(); ?>/noticia/?id=${noticia.id}" class="text-decoration-none text-dark">
                        <div class="card-body">
                            <div class="noticia">
                                <img src="<?php echo get_template_directory_uri(); ?>/${noticia.ruta_imagen}" 
                                    alt="${noticia.titulo}" class="img-noticia">
                                <div class="titulo-noticia">${noticia.titulo}</div>
                            </div>
                        </div>
                    </a>
                    `;

                    contenedorMovil.appendChild(card);
                });
            } catch (error) {
                console.error("Error al cargar las noticias para móvil:", error);
            }
        }

        // Llamar a la función al cargar la página
        document.addEventListener('DOMContentLoaded', cargarNoticiasMovil);
    </script>

    <a href="<?php echo get_template_directory_uri(); ?>/noticias/"><button class="btn btn-danger mt-4">VER NOTICIAS</button></a>

    <!-- SECCIÓN COMUNICADOS -->
    <section id="comunicado" class="mt-4 mb-5">
        <h4>Colegio Corazón de María</h4>
        <h2>Comunicados</h2>
        <p class="m-2" id="comunicado-actual-texto">
            Cargando el comunicado más reciente...
        </p>
        <a href="<?php echo get_template_directory_uri(); ?>/comunicados/">
            <button class="btn btn-danger mt-4">VER COMUNICADOS</button>
        </a>
    </section>

    <script>
        async function cargarComunicadoActual() {
            try {
                const respuesta = await fetch('<?php echo get_template_directory_uri(); ?>/datos/comunicados.json');
                const comunicados = await respuesta.json();

                if (!Array.isArray(comunicados) || comunicados.length === 0) {
                    console.error("El JSON está vacío o no es válido.");
                    document.querySelector('#comunicado-actual-texto').textContent = "No hay comunicados disponibles en este momento.";
                    return;
                }

                // Seleccionar el comunicado más reciente
                const comunicadoMasReciente = comunicados.sort((a, b) => new Date(b.fecha) - new Date(a.fecha))[0];

                // Actualizar el contenido del comunicado en la página
                document.querySelector('#comunicado-actual-texto').textContent = comunicadoMasReciente.descripcion;
            } catch (error) {
                console.error("Error al cargar el comunicado más reciente:", error);
                document.querySelector('#comunicado-actual-texto').textContent = "No se pudo cargar el comunicado más reciente.";
            }
        }

        // Llamar a la función al cargar la página
        document.addEventListener('DOMContentLoaded', cargarComunicadoActual);
    </script>

    <!-- SECCIÓN DE MAS CONTENIDOS POR PESTAÑAS -->
    <section id="links">

        <!-- PESTAÑAS -->
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="colegio-tab" data-bs-toggle="tab"
                    data-bs-target="#colegio-tab-pane" type="button" role="tab" aria-controls="colegio-tab-pane"
                    aria-selected="true">Colegio</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="organizacion-tab" data-bs-toggle="tab"
                    data-bs-target="#organizacion-tab-pane" type="button" role="tab"
                    aria-controls="organizacion-tab-pane" aria-selected="false">Organización</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="documentos-tab" data-bs-toggle="tab"
                    data-bs-target="#documentos-tab-pane" type="button" role="tab"
                    aria-controls="documentos-tab-pane" aria-selected="false">Documentos</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="talleres-tab" data-bs-toggle="tab" data-bs-target="#talleres-tab-pane"
                    type="button" role="tab" aria-controls="talleres-tab-pane"
                    aria-selected="false">Talleres</button>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <!-- COLEGIO -->
            <div class="tab-pane fade show active" id="colegio-tab-pane" role="tabpanel"
                aria-labelledby="colegio-tab" tabindex="0">
                <h4 class="mt-4">Colegio Corazón de María</h4>
                <h2 class="my-2">Colegio</h2>

                <p>
                    El Colegio Corazón de María se enorgullece de contar con diversos organismos y equipos de
                    trabajo
                    comprometidos en hacer realidad nuestra Misión y Visión institucional. Nuestra principal meta es
                    educar
                    y evangelizar a los niños y jóvenes a través de la propuesta educativa integral de la Escuela
                    Católica
                    Cordimariana. Para lograrlo, gestionamos nuestra Comunidad Educativa con un enfoque
                    organizacional
                    estratégico, participativo y corresponsable, siempre orientados hacia la excelencia educativa.
                </p>
                <p>
                    Cada uno de estos organismos y equipos desempeña un papel fundamental en nuestra familia
                    cordimariana,
                    aportando su labor diaria en diversas áreas del colegio. Entre ellos, el Consejo de Rectoría se
                    encarga
                    de velar por la implementación efectiva del Proyecto Educativo, el cual adquiere forma a través
                    de
                    distintos grupos de trabajo.
                </p>
                <p class="d-none d-md-inline">
                    Contamos con equipos dedicados a Pastoral, Familia-Escuela, Convivencia Escolar, Coordinación
                    Académica
                    y los Talleres TAE. Cada uno de estos equipos trabaja arduamente para asegurar que nuestros
                    estudiantes
                    reciban una formación integral y de calidad.
                </p>
                <p class="d-none d-md-inline">
                    En el Colegio Corazón de María valoramos profundamente el compromiso y la dedicación de cada uno
                    de
                    nuestros miembros en la comunidad educativa. A través de la colaboración y el trabajo conjunto,
                    seguimos
                    avanzando hacia la excelencia educativa y formando a los futuros líderes de nuestra sociedad.
                </p>

                <div class="row mt-4">
                    <div class="col-12 col-sm-6">
                        <div id="colegio">

                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div id="listaColegio">
                            <h2>Colegio</h2>

                            <div class="d-flex align-items-start">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="nav-link text-start active" id="v-pills-rectoria-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-pills-rectoria" type="button"
                                        role="tab" aria-controls="v-pills-rectoria" aria-selected="true">Equipo de
                                        Rectoría</button>
                                    <button class="nav-link text-start" id="v-pills-gestion-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-pills-gestion" type="button"
                                        role="tab" aria-controls="v-pills-gestion" aria-selected="false">Equipo de
                                        Gestión</button>
                                    <button class="nav-link text-start" id="v-pills-utp-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-utp" type="button" role="tab"
                                        aria-controls="v-pills-utp" aria-selected="false">Equipo de UTP</button>
                                    <button class="nav-link text-start" id="v-pills-inspectoria-tab"
                                        data-bs-toggle="pill" data-bs-target="#v-pills-inspectoria" type="button"
                                        role="tab" aria-controls="v-pills-inspectoria" aria-selected="false">Equipo
                                        de
                                        Inspectoría</button>
                                    <button class="nav-link text-start" id="v-pills-tae-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-tae" type="button" role="tab"
                                        aria-controls="v-pills-tae" aria-selected="false">Equipo TAE</button>

                                </div>


                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <h4>Colegio Corazón de María</h4>
                    </div>
                    <div class="col">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-rectoria" role="tabpanel"
                                aria-labelledby="v-pills-rectoria-tab" tabindex="0">
                                <h2>Colegio - Equipo de Rectoría</h2>

                                <div class="row">
                                    <div class="col">
                                        <p>
                                            El Equipo de Rectoría del Colegio Corazón de María juega un papel
                                            fundamental en el impulso y la dirección de nuestra institución
                                            educativa. Con integrantes altamente capacitados y comprometidos, este
                                            equipo se encarga de velar por la implementación efectiva del Proyecto
                                            Educativo, asegurando que los valores y principios que sustentan nuestra
                                            propuesta educativa se lleven a cabo en todos los aspectos de la vida
                                            escolar.
                                        </p>
                                        <p>
                                            Su labor estratégica y visionaria permite guiar a nuestra comunidad
                                            educativa hacia el logro de los objetivos institucionales, fomentando la
                                            excelencia académica, la formación integral de nuestros estudiantes y el
                                            fortalecimiento de los lazos entre la escuela, la familia y la
                                            comunidad.
                                        </p>
                                    </div>
                                </div>
                                <div class="row justify-content-center text-center">

                                    <div class="col-12 col-md-4 mb-2">
                                        <div class="rectoria">
                                            <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2023/06/madre-montse-scaled-e1709639708705-199x300.jpeg" alt=""
                                                class="img-rectoria">
                                            <div class="titulo-rectoria">Madre Monserrat</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-2">
                                        <div class="rectoria rec-mid mb-4">
                                            <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2024/03/yaqueline-reyes-200x300.jpg" alt=""
                                                class="img-rectoria">
                                            <div class="titulo-rectoria">Yaquelin Reyes Seguel</div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-2">
                                        <div class="rectoria">
                                            <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2024/08/DSCN0587-2-600x900-1-200x300.png" alt=""
                                                class="img-rectoria">
                                            <div class="titulo-rectoria">Patricio Massardo</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-gestion" role="tabpanel"
                                aria-labelledby="v-pills-gestion-tab" tabindex="0">
                                <h2>Colegio - Equipo de Gestión</h2>
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            El equipo de gestión del Colegio Corazón de María es un pilar
                                            fundamental en el funcionamiento y desarrollo de nuestra institución
                                            educativa. Conformado por profesionales altamente capacitados y
                                            comprometidos, este equipo se encarga de planificar, organizar y dirigir
                                            todas las actividades y recursos necesarios para asegurar el adecuado
                                            funcionamiento del colegio. Su labor estratégica y visionaria permite la
                                            implementación eficiente de las políticas educativas y administrativas,
                                            garantizando un entorno propicio para el aprendizaje y crecimiento de
                                            nuestros estudiantes. Además, el Equipo de Gestión promueve una cultura
                                            institucional de calidad, participación y mejora continua, fomentando la
                                            colaboración y el trabajo en equipo dentro de la comunidad educativa.
                                            Gracias a su dedicación y liderazgo, el Colegio Corazón de María se
                                            destaca como un referente de excelencia en la educación, brindando a
                                            nuestros estudiantes las herramientas necesarias para su formación
                                            integral y su preparación para enfrentar los desafíos del mundo actual.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-utp" role="tabpanel"
                                aria-labelledby="v-pills-utp-tab" tabindex="0">
                                <h2>Colegio - Equipo de UTP</h2>
                                <div class="row">
                                    <div class="col">
                                        <p>
                                            El Equipo de Unidad Técnico Pedagógica (UTP) del Colegio Corazón de
                                            María desempeña un papel esencial en la gestión y mejora de la calidad
                                            educativa de nuestra institución. Compuesto por un equipo de
                                            profesionales altamente capacitados y comprometidos con la excelencia
                                            académica, el Consejo de UTP se encarga de coordinar y supervisar los
                                            aspectos pedagógicos y curriculares del colegio. Su labor se enfoca en
                                            la planificación, implementación y evaluación de estrategias educativas
                                            que promuevan un aprendizaje significativo y acorde a las necesidades de
                                            nuestros estudiantes. Además, el Consejo de UTP fomenta la actualización
                                            y formación continua del cuerpo docente, garantizando la calidad y
                                            pertinencia de los procesos de enseñanza y aprendizaje. Gracias al
                                            liderazgo y expertise del Consejo de UTP, el Colegio Corazón de María se
                                            distingue por ofrecer una educación de excelencia, formando a nuestros
                                            estudiantes como ciudadanos competentes, críticos y comprometidos con su
                                            desarrollo personal y social.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-inspectoria" role="tabpanel"
                                aria-labelledby="v-pills-inspectoria-tab" tabindex="0">
                                <h2>Colegio - Equipo de Inspectoría</h2>
                                <div class="row">
                                    <div class="col-12 mb-2">
                                        <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2024/08/DSCN0703-2-768x302.jpg"
                                            alt="Equipo de inspectoria" class="img-fluid">
                                    </div>
                                    <div class="col-12">
                                        <p>El Equipo de Unidad Técnico Pedagógica (UTP) del Colegio Corazón de María
                                            desempeña un papel esencial en la gestión y mejora de la calidad
                                            educativa de nuestra institución. Compuesto por un equipo de
                                            profesionales altamente capacitados y comprometidos con la excelencia
                                            académica, el Consejo de UTP se encarga de coordinar y supervisar los
                                            aspectos pedagógicos y curriculares del colegio. Su labor se enfoca en
                                            la planificación, implementación y evaluación de estrategias educativas
                                            que promuevan un aprendizaje significativo y acorde a las necesidades de
                                            nuestros estudiantes. Además, el Consejo de UTP fomenta la actualización
                                            y formación continua del cuerpo docente, garantizando la calidad y
                                            pertinencia de los procesos de enseñanza y aprendizaje. Gracias al
                                            liderazgo y expertise del Consejo de UTP, el Colegio Corazón de María se
                                            distingue por ofrecer una educación de excelencia, formando a nuestros
                                            estudiantes como ciudadanos competentes, críticos y comprometidos con su
                                            desarrollo personal y social.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="v-pills-tae" role="tabpanel"
                                aria-labelledby="v-pills-tae-tab" tabindex="0">
                                <h2>Colegio - Equipo TAE</h2>
                                <div class="row">
                                    <div class="col-12 mb-2">
                                        <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2023/06/tae-scaled-e1688102977430-768x432.jpeg"
                                            alt="Equipo TAE" class="img-fluid">
                                    </div>
                                    <div class="col-12">
                                        <p>
                                            Las encargadas de los Talleres TAE del Colegio Corazón de María
                                            desempeñan un rol crucial en el enriquecimiento de la formación integral
                                            de nuestros estudiantes. Estas profesionales altamente capacitadas y
                                            apasionadas se encargan de coordinar y dirigir los Talleres de
                                            Aprendizaje Entretenido (TAE) dentro de nuestra institución. A través de
                                            una amplia variedad de disciplinas artísticas, científicas y deportivas,
                                            que van desde la danza hasta la robótica, las encargadas de los Talleres
                                            TAE brindan a los estudiantes la oportunidad de explorar y desarrollar
                                            sus habilidades creativas, expresivas y destrezas deportivas. Estas
                                            actividades complementarias promueven el desarrollo de talentos
                                            individuales al mismo tiempo que fomentan el trabajo en equipo,
                                            estimulan la creatividad y fortalecen la confianza en sí mismos de
                                            nuestros estudiantes. Las encargadas de los Talleres TAE también se
                                            preocupan por ofrecer un ambiente inclusivo y colaborativo, donde cada
                                            estudiante se sienta valorado y pueda participar activamente en
                                            actividades de su preferencia. Su dedicación y compromiso enriquecen la
                                            vida estudiantil en el Colegio Corazón de María, brindando oportunidades
                                            valiosas para el crecimiento personal, artístico, científico y deportivo
                                            de nuestros alumnos.
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
            <!-- ORGANIZACIÓN -->
            <div class="tab-pane fade" id="organizacion-tab-pane" role="tabpanel" aria-labelledby="organizacion-tab"
                tabindex="0">
                <h4 class="mt-4">Colegio Corazón de María</h4>
                <h2 class="my-2">Organización</h2>

                <div class="row">
                    <div class="col-12 col-md-8">
                        <p>El Colegio Corazón de María es un Colegio Católico, con modalidad Científico- Humanista,
                            perteneciente a la Congregación de las Misioneras del Corazón de María, cuyo Proyecto
                            Educativo se fundamenta en el propósito institucional del Padre Joaquín Masmitjá.</p>
                        <p>El establecimiento es reconocido Cooperador de la función educacional del Estado por
                            resolución N°1078, de 1963. Se inicia como un colegio de mujeres, particular pagado que
                            imparte Educación Parvularia, Enseñanza Básica y Media. Atendiendo a exigencias del
                            contexto socio económico del país el año 2002 pasa a subvencionado de financiamiento
                            compartido y cambia a colegio mixto. En el año 2016 vuelve al sistema de financiamiento
                            particular pagado.</p>
                    </div>
                    <div class="col-12 col-md-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foto_1-768x432.jpg" alt="" class="img-rectoria">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foto2.jpg" alt="" class="img-rectoria">
                    </div>
                    <div class="col-12 col-md-6">
                        <p>El Colegio Corazón de María se fundamenta en la línea educativa y formativa del Padre
                            Joaquín Masmitjá, para quien catequesis y educación permiten integrar fe y cultura. Son
                            tópicos de su vida y legado el educar, formar y evangelizar.</p>
                        <p>Desde el carisma del fundador, Misioneras Corazón de María reflexionan sobre su identidad
                            en misión compartida con los laicos, para generar el proyecto de colegio cristiano y
                            mariano que permita educar a los estudiantes en su triple dimensión: cabeza, corazón y
                            conciencia, formando jóvenes de bien que a través de los valores cordimarianos aporten a
                            la humanización de la sociedad.</p>
                        <p>La cultura escolar se expresa en la construcción de una comunidad educativa que vivencia
                            los valores cordimarianos: sencillez, alegría, trabajo, solidaridad y sabiduría
                            interior; lo que favorece el sentido de pertenencia, la convivencia escolar y la acción
                            corresponsable y participativa, caracterizado por la acogida constante, exigencia con
                            flexibilidad, actitud solidaria y vivencia cristiana con profundo amor a María y Jesús,
                            propiciando el desarrollo de un ambiente favorable para el aprendizaje.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p>
                            Como Colegio Católico la acción Pastoral forma parte central del Proyecto Educativo, la
                            que se refiere a las experiencias de anuncio, celebración de la fe, vida comunitaria y
                            servicio. Esto constituye la misión específica del Colegio Corazón de María que es
                            facilitar y promover el encuentro de los estudiantes con Jesús. Lo que se materializa
                            entre otras actividades en jornadas, retiros, encuentros, formación sacramental,
                            relación con la parroquia y otras entidades de Iglesia, programas de acción social,
                            solidaridad, servicios comunitarios, etc.
                        </p>
                        <p>
                            El colegio además propicia instancias de conocimiento, participación y servicio
                            relacionadas con el entorno.
                        </p>
                        <p>
                            Es de real importancia el compromiso de los padres y apoderados con el aprendizaje y la
                            fe de sus hijos/as, para la vivencia y logro del Proyecto Educativo, fortaleciendo el
                            vínculo y pertenencia, propiciando el apoyo a las normas y hábitos de estudio, las altas
                            expectativas respecto de sus hijos/as o pupilos/as, el apoyo en el crecimiento en la fe,
                            a través de la participación en celebraciones, reuniones, entrevistas, instancias
                            formativas y experiencias pastorales.
                        </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/foto3.jpg" alt="" class="img-rectoria">
                    </div>
                </div>
            </div>
            <!-- DOCUMENTOS-->
            <div class="tab-pane fade" id="documentos-tab-pane" role="tabpanel" aria-labelledby="documentos-tab"
                tabindex="0">
                <h4 class="mt-4">Colegio Corazón de María</h4>
                <h2 class="my-2">Documentos</h2>

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Académicos
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- Contenido académico -->
                                <ul>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/docs/reglamento_de_evaluacion_2023.pdf"
                                            target="_blank"></a> Reglamento de evaluación, calificación Y promoción
                                        (formato .pdf)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Institucionales
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- Contenido institucional -->
                                <ul>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/docs/pei.pdf"
                                            target="_blank">Proyecto educativo institucional (P.E.I.)</a></li>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/reglamento-interno-escolar/"
                                            target="_blank">Reglamento interno educacional (R.I.E.) y protocolos de acción</a></li>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/docs/pise_ccm2018.pdf"
                                            target="_blank">Plan integral de seguridad escolar</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Lista de útiles
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- Contenido de lista de útiles -->
                                <ul>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/textos/comunicado16.pdf"
                                            target="_blank" rel="noopener noreferrer">Informativo N°
                                            16 - 28 de mayo de 2024</a></li>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/textos/comunicado15.pdf"
                                            target="_blank" rel="noopener noreferrer">Informativo N°
                                            15 - 27 de mayo de 2024</a></li>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/textos/comunicado14.pdf"
                                            target="_blank" rel="noopener noreferrer">Informativo N°
                                            14 - 27 de mayo de 2024</a></li>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/textos/comunicado13.pdf"
                                            target="_blank" rel="noopener noreferrer">Informativo N°
                                            13 - 30 de abril de 2024</a></li>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/textos/comunicado12.pdf"
                                            target="_blank" rel="noopener noreferrer">Informativo N°
                                            12 - 10 de abril de 2024</a></li>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/textos/comunicado11.pdf"
                                            target="_blank" rel="noopener noreferrer">Informativo N°
                                            11 - 03 de abril de 2024</a></li>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/textos/comunicado10.pdf"
                                            target="_blank" rel="noopener noreferrer">Informativo N°
                                            10 - 01 de abril de 2024</a></li>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/textos/comunicado9.pdf"
                                            target="_blank" rel="noopener noreferrer">Informativo N° 9
                                            - 22 de marzo de 2024</a></li>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/textos/comunicado8.pdf"
                                            target="_blank" rel="noopener noreferrer">Informativo N° 8
                                            - 21 de marzo de 2024</a></li>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/textos/comunicado7.pdf"
                                            target="_blank" rel="noopener noreferrer">Informativo N° 7
                                            - 18 de marzo de 2024</a></li>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/textos/comunicado6.pdf"
                                            target="_blank" rel="noopener noreferrer">Informativo N° 6
                                            - 15 de marzo de 2024</a></li>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/textos/comunicado5.pdf"
                                            target="_blank" rel="noopener noreferrer">Informativo N° 5
                                            - 01 de marzo de 2024</a></li>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/textos/comunicado4.pdf"
                                            target="_blank" rel="noopener noreferrer">Informativo N° 4
                                            - 29 de febrero de 2024</a></li>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/textos/comunicado3.pdf"
                                            target="_blank" rel="noopener noreferrer">Informativo N° 3
                                            - 05 de enero de 2024</a></li>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/textos/comunicado2.pdf"
                                            target="_blank" rel="noopener noreferrer">Informativo N° 2
                                            - 05 de enero de 2024</a></li>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/textos/comunicado1.pdf"
                                            target="_blank" rel="noopener noreferrer">Informativo N° 1
                                            - 05 de enero de 2024</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Lecturas complementarias
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- Contenido de lecturas complementarias -->
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
                                            Inglés</a></li>
                                    <li><a href="https://www.colegiocorazondemaria.cl/new/textos/textos_ingles_2023.pdf"
                                            target="_blank" rel="noopener noreferrer">Textos de Estudio Inglés</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TALLERES -->
            <div class="tab-pane fade" id="talleres-tab-pane" role="tabpanel" aria-labelledby="talleres-tab"
                tabindex="0">
                <h4 class="mt-4">Colegio Corazón de María</h4>
                <h2 class="my-2">Talleres</h2>

                <a href="https://www.colegiocorazondemaria.cl/new/docs/listado_seleccionados_talleres_2024.pdf">
                    <h2>Listado de Seleccionados y Lista de Espera Talleres TAE 2024</h2>
                </a>
            </div>
        </div>


    </section>

    <!-- SECCIÓN DE MAS INFORMACIONES -->
    <section id="mas_informaciones" class="mb-4">

        <h4>Colegio Corazón de María</h4>
        <h2>Más Informaciones</h2>

        <div class="row">
            <div class="col-12 col-md-4 mb-2">
                <div class="row">
                    <div class="col-12 mb-2">
                        <div class="caja-info">
                            <i class='bx bxs-calendar'></i>
                            <a href="<?php echo get_template_directory_uri(); ?>/calendario-de-actividades/">
                                Calendario de Actividades
                            </a>
                        </div>
                    </div>
                    <div class="col-12 mb-2">
                        <div class="caja-info">
                            <i class='bx bx-food-menu'></i>
                            <a href="https://colegiocorazondemaria.cl/new/docs/menu_casino_ccm_Diciembre_2024.pdf">Menú casino mes de
                                Abril</a>
                        </div>
                    </div>
                    <!--<div class="col-12 mb-2">
                    <div class="caja-info"><i class='bx bxs-info-square'></i><a href="">Boletin Informativo</a>
                    </div>-->
                </div>
            </div>

            <div class="col-12 col-md-4 mb-2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Protegete-de-las-altas-temperaturas-y-la-radiacion-solar.png"
                    alt="Protegete-de-las-altas-temperaturas-y-la-radiacion-solar" class="img-mas-info">
            </div>
            <div class="col-12 col-md-4 mb-2">
                <a href="<?php echo get_template_directory_uri(); ?>/trabaja-con-nosotros/" rel="noopener noreferrer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/trabaja-con-nosotros-768x768.png" alt="trabaja-con-nosotros"
                        class="img-mas-info">
                </a>

            </div>
        </div>
    </section>

</div>
<!-- Swiper JS -->
<script src="//cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js"></script>
<?php get_footer(); ?>