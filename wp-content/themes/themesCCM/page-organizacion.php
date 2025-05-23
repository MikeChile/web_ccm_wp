<?php

get_header(); ?>

<!-- LOADER -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/loader.js"></script>

<!-- HEADER -->
<div id="header-component"></div>

<!-- ORGANIZACIÓN -->
<div id="header" class="mb-4 pt-4">
    <div class="container">
        <div id="cajaTitulo">
            <h1> ORGANIZACIÓN</h1>
        </div>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL-->
<div class="container">
    <div class="row">

        <div class="col-12 text-center my-4">
            <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2022/09/foto_1-768x432.jpg"
                alt="Organización" class="img-fluid">
        </div>
        <div class="col-12">
            <p>El Colegio Corazón de María es un Colegio Católico, con modalidad Científico- Humanista,
                perteneciente a la Congregación de las Misioneras del Corazón de María, cuyo Proyecto Educativo se
                fundamenta en el propósito institucional del Padre Joaquín Masmitjá.</p>
            <p>El establecimiento es reconocido Cooperador de la función educacional del Estado por resolución
                N°1078, de 1963. Se inicia como un colegio de mujeres, particular pagado que imparte Educación
                Parvularia, Enseñanza Básica y Media. Atendiendo a exigencias del contexto socio económico del país
                el año 2002 pasa a subvencionado de financiamiento compartido y cambia a colegio mixto. En el año
                2016 vuelve al sistema de financiamiento particular pagado.</p>
        </div>
    </div>

    <div class="row mb-4 content-section">
        <div class="col-12 col-md-4 image-wrapper" id="imageContainer">
            <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2022/09/foto2.jpg"
                alt="Organización" class="img-fluid" id="organizationImage">
        </div>
        <div class="col-12 col-md-8 text-wrapper" id="textContainer">
            <p>El Colegio Corazón de María se fundamenta en la línea educativa y formativa del Padre Joaquín
                Masmitjá, para quien catequesis y educación permiten integrar fe y cultura. Son tópicos de su vida y
                legado el educar, formar y evangelizar.</p>
            <p>Desde el carisma del fundador, Misioneras Corazón de María reflexionan sobre su identidad en misión
                compartida con los laicos, para generar el proyecto de colegio cristiano y mariano que permita
                educar a los estudiantes en su triple dimensión: cabeza, corazón y conciencia, formando jóvenes de
                bien que a través de los valores cordimarianos aporten a la humanización de la sociedad.</p>
            <p>La cultura escolar se expresa en la construcción de una comunidad educativa que vivencia los valores
                cordimarianos: sencillez, alegría, trabajo, solidaridad y sabiduría interior; lo que favorece el
                sentido de pertenencia, la convivencia escolar y la acción corresponsable y participativa,
                caracterizado por la acogida constante, exigencia con flexibilidad, actitud solidaria y vivencia
                cristiana con profundo amor a María y Jesús, propiciando el desarrollo de un ambiente favorable para
                el aprendizaje.</p>
        </div>
    </div>

    <style>
        .content-section {
            display: flex;
            flex-wrap: wrap;
        }

        .image-wrapper,
        .text-wrapper {
            display: flex;
            flex-direction: column;
        }

        .image-wrapper {
            align-items: center;
        }

        .image-wrapper img {
            width: 100%;
            height: 100%;
            max-height: 300px;
            object-fit: cover;
        }

        .text-wrapper {
            display: flex;
            justify-content: center;
        }

        @media (max-width: 767px) {
            .content-section {
                flex-direction: column;
            }

            .image-wrapper,
            .text-wrapper {
                width: 100%;
            }
        }


        .content-section-2 {
            display: flex;
            flex-wrap: wrap;
            align-items: stretch;
            /* Asegura que la imagen y el texto tengan la misma altura */
        }

        .image-wrapper-2 {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #organizationImage2 {
            width: 100%;
            height: 100%;
            object-fit: cover;
            max-height: 300px;
            /* Mantiene proporciones sin distorsionar */
        }

        .text-wrapper-2 {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* Ajustes para pantallas pequeñas */
        @media (max-width: 767px) {
            .content-section-2 {
                flex-direction: column;
            }

            .image-wrapper-2,
            .text-wrapper-2 {
                width: 100%;
            }
        }
    </style>

    <div class="row mb-4 content-section-2">
        <div class="col-12 col-md-8 text-wrapper-2" id="textContainer2">
            <p>Como Colegio Católico la acción Pastoral forma parte central del Proyecto Educativo, la que se
                refiere a las experiencias de anuncio, celebración de la fe, vida comunitaria y servicio. Esto
                constituye la misión específica del Colegio Corazón de María que es facilitar y promover el
                encuentro de los estudiantes con Jesús. Lo que se materializa entre otras actividades en jornadas,
                retiros, encuentros, formación sacramental, relación con la parroquia y otras entidades de Iglesia,
                programas de acción social, solidaridad, servicios comunitarios, etc.</p>
            <p>El colegio además propicia instancias de conocimiento, participación y servicio relacionadas con el
                entorno.</p>
            <p>Es de real importancia el compromiso de los padres y apoderados con el aprendizaje y la fe de sus
                hijos/as, para la vivencia y logro del Proyecto Educativo, fortaleciendo el vínculo y pertenencia,
                propiciando el apoyo a las normas y hábitos de estudio, las altas expectativas respecto de sus
                hijos/as o pupilos/as, el apoyo en el crecimiento en la fe, a través de la participación en
                celebraciones, reuniones, entrevistas, instancias formativas y experiencias pastorales.</p>
        </div>
        <div class="col-12 col-md-4 image-wrapper-2" id="imageContainer2">
            <img src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2022/09/foto3.jpg"
                alt="Organización" class="img-fluid" id="organizationImage2">
        </div>
    </div>

</div>

<!-- FOOTER -->
<div id="footer-component"></div>

<?php get_footer(); ?>