<?php
get_header(); ?>

<!-- LOADER -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/loader.js"></script>

<!-- HEADER -->
<div id="header-component"></div>

<!-- CONTENIDO PRINCIPAL-->
<div class="container mt-4">
    <div id="taller-detalle"></div>

    <div class="row">
        <div class="col mt-4">
            <hr>
            <h3>CONTACTO</h3>
            <p>Para mayores antecedentes sobre la realización y funcionamiento del taller, tomar contacto:</p>
            <p>Secretaria de Admisión: María Angélica Céspedes</p>
            <p>
                Correo: admision@colegiocorazondemaria.cl</p>
            <p>
                Teléfono: (+56 9) 4623 7730</p>
            <p>
                Dirección: San Nicolás 1261 – San Miguel</p>

            <hr>
        </div>
    </div>
</div>

<!-- FOOTER -->
<div id="footer-component"></div>

<?php get_footer(); ?>

<script>
    async function cargarTaller() {
        try {
            // Obtener el ID del taller de la URL
            const params = new URLSearchParams(window.location.search);
            const id = params.get('id');

            // Cargar el archivo JSON
            const respuesta = await fetch('<?php echo get_template_directory_uri(); ?>/datos/talleres.json');
            const talleres = await respuesta.json();

            // Validar si el ID es válido
            const taller = talleres.find(t => t.ID == id); // Buscar el taller por ID

            if (!taller) {
                document.getElementById('taller-detalle').innerHTML = `
                <div class="alert alert-danger" role="alert">
                    Taller no encontrado. Verifica el enlace.
                </div>`;
                return;
            }

            // Construir el contenido del taller
            const contenedor = document.getElementById('taller-detalle');
            contenedor.innerHTML = `
            <h2>${taller.nombre}</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/${taller.portada}" 
                 alt="${taller.nombre}" class="img-fluid my-4">
            <p>${taller.descripcion}</p>
            <div class="gallery mt-4">
                <h3>Galería de imágenes</h3>
                <div class="row">
                    ${taller.imagenes_del_taller.map(imagen => `
                        <div class="col-md-4 col-sm-6 mb-3">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/${imagen}" 
                                 alt="${taller.nombre}" class="img-fluid rounded">
                        </div>
                    `).join('')}
                </div>
            </div>
        `;
        } catch (error) {
            console.error("Error cargando el taller:", error);
            document.getElementById('taller-detalle').innerHTML = `
            <div class="alert alert-danger" role="alert">
                Hubo un error al cargar la información del taller.
            </div>`;
        }
    }

    // Ejecutar la función al cargar el script
    cargarTaller();
</script>