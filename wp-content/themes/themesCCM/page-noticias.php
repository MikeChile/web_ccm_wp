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
            <h1> NOTICIAS</h1>
        </div>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL-->
<div class="container">
    <div id="noticias" class="row"></div> <!-- Agregamos la clase "row" -->
    <script>
        // Función para cargar y mostrar las noticias
        async function cargarNoticias() {
            try {
                const respuesta = await fetch('<?php echo get_template_directory_uri(); ?>/datos/noticias.json');
                const noticias = await respuesta.json();

                const contenedorNoticias = document.querySelector('#noticias');

                noticias.forEach(noticia => {
                    const columna = document.createElement('div');
                    columna.className = 'col-12 col-md-4 mb-4';

                    // Truncar la descripción si excede los 100 caracteres
                    const descripcionCorta = noticia.descripcion.length > 100 ?
                        noticia.descripcion.substring(0, 100) + '...' :
                        noticia.descripcion;

                    columna.innerHTML = `
                        <a href="noticia.html?id=${noticia.id}" class="text-decoration-none text-dark"> <!-- Enlace con el id -->
                            <div class="card h-100">
                                <img src="<?php echo get_template_directory_uri(); ?>/${noticia.ruta_imagen}" class="card-img-top img-noticia" alt="${noticia.titulo}">
                                <div class="card-body">
                                    <h5 class="card-title">${noticia.titulo}</h5>
                                    <p class="card-text"><small class="text-muted">Publicado el: ${noticia.fecha_publicacion}</small></p>
                                    <p class="card-text">${descripcionCorta}</p>
                                </div>
                            </div>
                        </a>
                    `;

                    contenedorNoticias.appendChild(columna);
                });
            } catch (error) {
                console.error("Error al cargar las noticias:", error);
            }
        }

        // Llamar a la función para cargar noticias al cargar la página
        document.addEventListener('DOMContentLoaded', cargarNoticias);
    </script>
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