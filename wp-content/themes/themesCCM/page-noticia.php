<?php
get_header(); ?>

<!-- HEADER -->
<div id="header-component"></div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/header.js"></script>
<link href="<?php echo get_template_directory_uri(); ?>/assets/lightbox/dist/css/lightbox.css" rel="stylesheet">
<script src="<?php echo get_template_directory_uri(); ?>/assets/lightbox/dist/js/lightbox.js"></script>

<style>
    .img-fluid {
        object-fit: cover;
        height: 100%;
        width: 100%;
        max-height: 200px;
    }

    @media (max-width: 576px) {
        .card {
            max-width: 100%;
        }

    }
</style>
<!-- TÍTULO -->
<div id="header" class="mb-4 pt-4">
    <div class="container">
        <div id="cajaTitulo">
            <h1>NOTICIAS</h1>
        </div>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL -->
<div class="container my-4">
    <div class="row">
        <div class="col mb-4">
            <a href="<?php echo get_template_directory_uri(); ?>/noticias/">
                <button class="btn btn-danger">Volver a noticias</button>
            </a>
        </div>
    </div>
    <div id="detalle-noticia" class="card">
        <!-- El contenido de la noticia se cargará aquí -->
    </div>
</div>

<script>
    // Función para obtener el parámetro "id" de la URL
    function obtenerIdNoticia() {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get('id');
    }

    // Función para cargar y mostrar la noticia según el ID
    async function cargarNoticia() {
        const id = obtenerIdNoticia();
        if (!id) {
            document.getElementById('detalle-noticia').innerHTML = "<p>No se encontró la noticia solicitada.</p>";
            return;
        }

        try {
            const respuesta = await fetch('<?php echo get_template_directory_uri(); ?>/datos/noticias.json');
            const noticias = await respuesta.json();
            const noticia = noticias.find(noticia => noticia.id == id);

            if (noticia) {
                let galeriaHtml = '';
                if (noticia.imagenes && noticia.imagenes.length > 0) {
                    galeriaHtml = `
                    <div class="mt-4">
                        <h5>Galería de Imágenes</h5>
                        <div class="row">
                            ${noticia.imagenes
                                .map(imagen => `
                                    <div class="col-6 col-md-4 col-lg-3 mb-4">
                                        <a href="<?php echo get_template_directory_uri(); ?>/${imagen}" data-lightbox="galeria" data-title="${noticia.titulo}">
                                            <img src="<?php echo get_template_directory_uri(); ?>/${imagen}" class="img-fluid rounded" alt="${noticia.titulo}">
                                        </a>
                                    </div>
                                `).join('')}
                        </div>
                    </div>
                `;
                }

                document.getElementById('detalle-noticia').innerHTML = `
                <img src="<?php echo get_template_directory_uri(); ?>/${noticia.ruta_imagen}" 
                     class="card-img-top img-noticia" alt="${noticia.titulo}">
                <div class="card-body">
                    <h3 class="card-title">${noticia.titulo}</h3>
                    <p class="card-text">
                        <small class="text-muted">Publicado el: ${noticia.fecha_publicacion}</small>
                    </p>
                    <p class="card-text">${noticia.descripcion}</p>
                    ${galeriaHtml}
                </div>
            `;
            } else {
                document.getElementById('detalle-noticia').innerHTML = "<p>No se encontró la noticia solicitada.</p>";
            }
        } catch (error) {
            console.error("Error al cargar la noticia:", error);
            document.getElementById('detalle-noticia').innerHTML = "<p>Error al cargar la noticia.</p>";
        }
    }


    // Llamar a la función al cargar la página
    document.addEventListener('DOMContentLoaded', cargarNoticia);
</script>

<!-- FOOTER -->
<div id="footer-component"></div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/footer.js"></script>

<?php get_footer(); ?>