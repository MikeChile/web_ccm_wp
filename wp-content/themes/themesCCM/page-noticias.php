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
<div class="container mt-4">
    <div class="row">
        <!-- Barra de años -->
        <div class="col-2">
            <ul class="nav flex-column nav-pills" id="pills-tab" role="tablist">
                <!-- Pestañas de años generadas dinámicamente -->
            </ul>
        </div>

        <!-- Noticias -->
        <div class="col-10">
            <div class="tab-content" id="pills-tabContent">
                <!-- Contenido de las noticias por año generado dinámicamente -->
            </div>
        </div>
    </div>
</div>

<script>
    async function cargarNoticias() {
        try {
            const respuesta = await fetch('<?php echo get_template_directory_uri(); ?>/datos/noticias.json');
            const noticias = await respuesta.json();

            // Agrupar noticias por año
            const noticiasPorAno = noticias.reduce((acumulador, noticia) => {
                const ano = new Date(noticia.fecha_publicacion).getFullYear();
                if (!acumulador[ano]) {
                    acumulador[ano] = [];
                }
                acumulador[ano].push(noticia);
                return acumulador;
            }, {});

            // Ordenar las noticias de cada año por fecha de publicación (descendente)
            for (const ano in noticiasPorAno) {
                noticiasPorAno[ano].sort((a, b) => new Date(b.fecha_publicacion) - new Date(a.fecha_publicacion));
            }

            // Obtener los años en orden descendente
            const anosOrdenados = Object.keys(noticiasPorAno).sort((a, b) => b - a);

            const navPills = document.querySelector('#pills-tab');
            const tabContent = document.querySelector('#pills-tabContent');

            // Crear pestañas y contenido
            anosOrdenados.forEach((ano, index) => {
                const isActive = index === 0 ? 'active' : '';

                // Crear pestaña
                const tabItem = document.createElement('li');
                tabItem.className = 'nav-item';
                tabItem.innerHTML = `
                    <button class="nav-link ${isActive}" id="pills-${ano}-tab" data-bs-toggle="pill" data-bs-target="#pills-${ano}" type="button" role="tab" aria-controls="pills-${ano}" aria-selected="${index === 0}">
                        ${ano}
                    </button>
                `;
                navPills.appendChild(tabItem);

                // Crear contenido
                const noticiasDelAno = noticiasPorAno[ano];
                const tabPane = document.createElement('div');
                tabPane.className = `tab-pane fade ${isActive ? 'show active' : ''}`;
                tabPane.id = `pills-${ano}`;
                tabPane.role = 'tabpanel';
                tabPane.ariaLabelledby = `pills-${ano}-tab`;

                const row = document.createElement('div');
                row.className = 'row';

                noticiasDelAno.forEach(noticia => {
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

                tabPane.appendChild(row);
                tabContent.appendChild(tabPane);
            });
        } catch (error) {
            console.error("Error al cargar las noticias:", error);
        }
    }

    // Llamar a la función para cargar noticias al cargar la página
    document.addEventListener('DOMContentLoaded', cargarNoticias);
</script>


<!-- FOOTER -->
<div id="footer-component"></div>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/footer.js"></script>

<?php get_footer(); ?>