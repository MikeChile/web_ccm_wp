<?php
get_header(); ?>

<style>
    @media (max-width: 576px) {
        .card {
            max-width: 100%;
        }
    }
</style>
<!-- LOADER -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/components/loader.js"></script>

<!-- HEADER -->
<div id="header-component"></div>

<!-- TITULO -->
<div id="header" class="mb-4 pt-4">
    <div class="container">
        <div id="cajaTitulo">
            <h1>COMUNICADOS</h1>
        </div>
    </div>
</div>

<!-- CONTENIDO PRINCIPAL -->
<div class="container">
    <div class="row">
        <div class="col">
            <div id="comunicados-container"></div>

            <script>
                async function cargarComunicados() {
                    try {
                        const respuesta = await fetch('<?php echo get_template_directory_uri(); ?>/datos/comunicados.json');
                        const comunicados = await respuesta.json();

                        if (!Array.isArray(comunicados)) {
                            console.error("El formato del JSON no es válido.");
                            return;
                        }

                        // Ordenar los comunicados por fecha (más reciente primero)
                        const comunicadosOrdenados = comunicados.sort((a, b) => new Date(b.fecha) - new Date(a.fecha));

                        const container = document.querySelector('#comunicados-container');
                        container.innerHTML = ''; // Limpiar contenido previo

                        // Crear tarjetas para cada comunicado
                        comunicadosOrdenados.forEach(comunicado => {
                            const tarjeta = document.createElement('div');
                            tarjeta.className = 'card mb-4';

                            tarjeta.innerHTML = `
                                <div class="card-body">
                                    <h5 class="card-title">${comunicado.titulo}</h5>
                                    <p class="card-text">${comunicado.descripcion}</p>
                                    <p class="text-muted">Fecha: ${new Date(comunicado.fecha).toLocaleDateString()}</p>
                                </div>
                            `;

                            container.appendChild(tarjeta);
                        });
                    } catch (error) {
                        console.error("Error al cargar los comunicados:", error);
                    }
                }

                // Llamar a la función para cargar comunicados al cargar la página
                document.addEventListener('DOMContentLoaded', cargarComunicados);
            </script>

        </div>
    </div>
</div>

<!-- FOOTER -->
<div id="footer-component"></div>

<?php get_footer(); ?>