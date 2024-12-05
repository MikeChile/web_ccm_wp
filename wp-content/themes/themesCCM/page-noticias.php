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
    <!-- Pestañas de años -->
    <ul class="nav nav-tabs" id="tabsNoticias" role="tablist">
        <!-- Las pestañas se generarán dinámicamente -->
    </ul>

    <!-- Contenido tabulado -->
    <div class="tab-content mt-4" id="contenidoTabs">
        <!-- Las noticias separadas por años se generarán aquí -->
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

            // Agrupar las noticias por año
            const noticiasPorAño = agruparPorAño(todasLasNoticias);

            // Generar las pestañas y contenido
            generarPestañas(noticiasPorAño);
        } catch (error) {
            console.error("Error al cargar las noticias:", error);
        }
    }

    // Función para agrupar las noticias por año
    function agruparPorAño(noticias) {
        return noticias.reduce((grupo, noticia) => {
            const año = new Date(noticia.fecha_publicacion).getFullYear();
            if (!grupo[año]) {
                grupo[año] = [];
            }
            grupo[año].push(noticia);
            return grupo;
        }, {});
    }

    // Generar pestañas y contenido tabulado
    function generarPestañas(noticiasPorAño) {
        const tabsContainer = document.getElementById('tabsNoticias');
        const contenidoTabs = document.getElementById('contenidoTabs');

        tabsContainer.innerHTML = '';
        contenidoTabs.innerHTML = '';

        const años = Object.keys(noticiasPorAño).sort((a, b) => b - a); // Ordenar años descendente
        años.forEach((año, index) => {
            // Crear pestaña
            const tab = document.createElement('li');
            tab.className = 'nav-item';
            tab.innerHTML = `
            <button class="nav-link ${index === 0 ? 'active' : ''}" id="tab-${año}" data-bs-toggle="tab" data-bs-target="#contenido-${año}" type="button" role="tab" aria-controls="contenido-${año}" aria-selected="${index === 0}">
                ${año}
            </button>
        `;
            tabsContainer.appendChild(tab);

            // Crear contenido del tab
            const contenido = document.createElement('div');
            contenido.className = `tab-pane fade ${index === 0 ? 'show active' : ''}`;
            contenido.id = `contenido-${año}`;
            contenido.setAttribute('role', 'tabpanel');
            contenido.setAttribute('aria-labelledby', `tab-${año}`);

            // Generar las noticias de este año
            const noticias = noticiasPorAño[año];
            const row = document.createElement('div');
            row.className = 'row';
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
                row.appendChild(columna);
            });

            contenido.appendChild(row);
            contenidoTabs.appendChild(contenido);
        });
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
    // Filtrar noticias según el texto ingresado
    document.getElementById('buscadorNoticias').addEventListener('input', (evento) => {
        const textoBusqueda = evento.target.value.toLowerCase();

        // Iterar sobre cada tab-pane (contenedor de cada pestaña)
        document.querySelectorAll('.tab-pane').forEach(tabPane => {
            const noticias = tabPane.querySelectorAll('.card');
            let tieneResultados = false;

            noticias.forEach(noticia => {
                const titulo = noticia.querySelector('.card-title').textContent.toLowerCase();
                if (titulo.includes(textoBusqueda)) {
                    noticia.style.display = 'block'; // Mostrar la tarjeta si coincide
                    tieneResultados = true;
                } else {
                    noticia.style.display = 'none'; // Ocultar la tarjeta si no coincide
                }
            });

            // Mostrar u ocultar la pestaña según los resultados
            const tabId = tabPane.id;
            const tabButton = document.querySelector(`[data-bs-target="#${tabId}"]`);
            tabButton.style.display = tieneResultados ? 'block' : 'none';
        });
    });


    // Cargar noticias al cargar la página
    document.addEventListener('DOMContentLoaded', cargarNoticias);
</script>

<!-- FOOTER -->
<div id="footer-component"></div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/footer.js"></script>

<?php get_footer(); ?>