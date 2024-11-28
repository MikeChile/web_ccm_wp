<?php
get_header(); ?>

<!-- LOADER -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/loader.js"></script>

<!-- HEADER -->
<div id="header-component"></div>

<!-- TITULO -->
<div id="header" class="mb-4 pt-4">
    <div class="container">
        <div id="cajaTitulo">
            <h1> TALLERES</h1>
        </div>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL-->
<div class="container">
    <div class="row">
        <div class="col">
            <video class="elementor-video"
                src="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2024/03/Profesores-talleres-2024.mp4"
                controls="" preload="metadata" controlslist="nodownload"
                poster="https://www.colegiocorazondemaria.cl/new/wp-content/uploads/2024/03/portada-talleres-2024.png"></video>
        </div>
    </div>
    <div class="row">
        <div class="col mt-4">
            <a href="https://www.colegiocorazondemaria.cl/new/docs/listado_seleccionados_talleres_2024.pdf">
                <h2>Listado de Seleccionados y Lista de Espera Talleres TAE 2024</h2>
            </a>
        </div>
    </div>

    <!-- TALLERES -->
    <div id="talleres-container" class="mt-4"></div>
</div>

<!-- FOOTER -->
<div id="footer-component"></div>

<?php get_footer(); ?>

<script>
    async function cargarTalleres() {
        try {
            // Carga el archivo JSON con los talleres
            const respuesta = await fetch('<?php echo get_template_directory_uri(); ?>/datos/talleres.json');
            const talleres = await respuesta.json();

            // Ordenar talleres alfabéticamente por nombre
            talleres.sort((a, b) => a.nombre.localeCompare(b.nombre));

            const contenedor = document.getElementById('talleres-container');

            // Crear las tarjetas de cada taller
            talleres.forEach((taller, index) => {
                const card = document.createElement('div');
                card.classList.add('card', 'mb-4', 'd-flex', 'flex-row');
                card.style.width = '100%';

                // Contenido de la tarjeta
                card.innerHTML = `
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/${taller.portada}" 
                     alt="${taller.nombre}" class="card-img-left" style="width: 30%; height: auto;">
                <div class="card-body d-flex flex-column" style="width: 70%;">
                    <h3 class="card-title">${taller.nombre}</h3>
                    <p class="card-text">${taller.descripcion}</p>
                    <a href="<?php echo get_template_directory_uri(); ?>/taller/?id=${taller.ID}" class="btn btn-primary">Ver detalles</a>
                </div>
            `;

                contenedor.appendChild(card);
            });
        } catch (error) {
            console.error("Error cargando los talleres:", error);
        }
    }

    // Ejecutar la función al cargar el script
    cargarTalleres();
</script>