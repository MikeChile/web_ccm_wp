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

<!-- BÚSQUEDA -->
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <input type="text" id="buscadorNoticias" class="form-control" placeholder="Buscar noticias por título...">
        </div>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL -->
<div class="container mt-4">
    <div class="row" id="contenedorNoticias">
        <!-- Noticias dinámicas cargadas aquí -->
    </div>
</div>

<script>
    let todasLasNoticias = [];

    async function cargarNoticias() {
        try {
            const respuesta = await fetch('<?php echo get_template_directory_uri(); ?>/datos/noticias.json');
            todasLasNoticias = await respuesta.json();

            // Ordenar las noticias por fecha (más recientes primero)
            todasLasNoticias.sort((a, b) => new Date(b.fecha_publicacion) - new Date(a.fecha_publicacion));

            // Mostrar todas las noticias inicialmente
            mostrarNoticias(todasLasNoticias);
        } catch (error) {
            console.error("Error al cargar las noticias:", error);
        }
    }


    function mostrarNoticias(noticias) {
        const contenedor = document.getElementById('contenedorNoticias');
        contenedor.innerHTML = ''; // Limpiar contenido previo

        if (noticias.length === 0) {
            contenedor.innerHTML = `<p>No se encontraron noticias.</p>`;
            return;
        }

        noticias.forEach(noticia => {
            const columna = document.createElement('div');
            columna.className = 'col-12 col-md-6 col-lg-4 mb-4';

            const descripcionCorta = noticia.descripcion.length > 100 ?
                noticia.descripcion.substring(0, 100) + '...' :
                noticia.descripcion;

            columna.innerHTML = `
                <a href="<?php echo get_template_directory_uri(); ?>/noticia/?id=${noticia.id}" class="text-decoration-none text-dark">
                    <div class="card h-100">
                        <img src="<?php echo get_template_directory_uri(); ?>/${noticia.ruta_imagen}" 
                            class="card-img-top img-noticia" alt="${noticia.titulo}">
                        <div class="card-body">
                            <h5 class="card-title">${noticia.titulo}</h5>
                            <p class="card-text">
                                <small class="text-muted">Publicado el: ${noticia.fecha_publicacion}</small>
                            </p>
                            <p class="card-text">${descripcionCorta}</p>
                        </div>
                    </div>
                </a>
            `;

            contenedor.appendChild(columna);
        });
    }

    // Filtrar noticias según el texto ingresado
    document.getElementById('buscadorNoticias').addEventListener('input', (evento) => {
        const textoBusqueda = evento.target.value.toLowerCase();
        const noticiasFiltradas = todasLasNoticias.filter(noticia =>
            noticia.titulo.toLowerCase().includes(textoBusqueda)
        );

        mostrarNoticias(noticiasFiltradas);
    });

    // Cargar noticias al cargar la página
    document.addEventListener('DOMContentLoaded', cargarNoticias);
</script>

<!-- FOOTER -->
<div id="footer-component"></div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/footer.js"></script>

<?php get_footer(); ?>