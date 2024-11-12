// header.js

async function loadPages() {
    try {
        const response = await fetch('../../../datos/pages.json');
        const pages = await response.json();
        return pages;
    } catch (error) {
        console.error('Error al cargar las páginas:', error);
        return [];
    }
}

function setupSearch(pages) {
    const searchIcon = document.getElementById('search-icon');
    const searchInput = document.getElementById('search-input');
    const resultsContainer = document.getElementById('search-results');

    searchIcon.addEventListener('click', function (event) {
        event.preventDefault(); // Evitar el comportamiento por defecto del enlace
        searchInput.classList.toggle('d-none'); // Mostrar/ocultar el input de búsqueda
        searchInput.focus(); // Enfocar el input
        resultsContainer.classList.add('d-none'); // Ocultar resultados al abrir el input
    });

    searchInput.addEventListener('input', function () {
        const query = searchInput.value.toLowerCase();
        const filteredPages = pages.filter(page => page.title.toLowerCase().includes(query));

        resultsContainer.innerHTML = ''; // Limpiar resultados anteriores
        if (filteredPages.length > 0) {
            resultsContainer.classList.remove('d-none');
            filteredPages.forEach(page => {
                const resultItem = document.createElement('div');
                resultItem.innerHTML = `<a href="${page.url}">${page.title}</a>`;
                resultItem.addEventListener('click', () => {
                    window.location.href = page.url; // Redirigir al hacer clic en un resultado
                });
                resultsContainer.appendChild(resultItem);
            });
        } else {
            resultsContainer.classList.add('d-none'); // Ocultar si no hay resultados
        }
    });
}

//cargar header
async function loadHeader() {
    const headerHTML = `
        <!-- BARRA SUPERIOR-->
    <div id="barra">
        <a href="https://www.lirmi.com/" class="link">
            <i class='bx bxs-lock'></i><span class="d-none d-md-inline"> Lirmi</span>
        </a>
        <a href="https://bibliotecadigitalccm.cl/" class="link">
            <i class='bx bxs-book-reader'></i><span class="d-none d-md-inline"> Biblioteca Digital</span>
        </a>
        <!-- Botón para activar el modal -->
        <a href="#" class="link" data-bs-toggle="modal" data-bs-target="#contactModal">
            <i class='bx bx-envelope'></i><span class="d-none d-md-inline"> Contacto</span>
        </a>

        <!-- Modal -->
        <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="contactModalLabel">Contacto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <section class="contact_us">
                            <div class="container">
                                <div class="row m-0">
                                    <div class="col-md-10 offset-md-1">
                                        <div class="contact_inner">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="contact_form_inner">
                                                        <div class="m-0 p-4">
                                                            <h3>Contáctanos</h3>
                                                            <p>Siéntete libre de contactarnos en cualquier momento. ¡Te responderemos tan pronto como podamos!</p>
                                                            <input type="text" id="nombre" class="form-control form-group mb-2" placeholder="Nombre" required />
                                                            <input type="email" id="email" class="form-control form-group mb-2" placeholder="Email" required />
                                                            <textarea id="mensaje" class="form-control form-group mb-2" placeholder="Mensaje" required></textarea>
                                                            <button class="contact_form_submit" id="sendEmail">Enviar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="right_conatct_social_icon d-flex align-items-end">
                                                        <div class="socil_item_inner d-flex">
                                                            <!--
                                                        <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- BARRA PRINCIPAL-->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="row cajaBarra">
                <div class="col-6 col-md-4 order-1 order-md-1">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        Menú
                    </button>
                </div>
                <div class="col-12 col-md-4 text-center order-3 order-md-2">
                    <p id="titulo">CORAZÓN <a href="../../../index.html"><img class="logo" src="../assets/img/logo CCM.png"
                                alt=""></a> DE MARÍA</p>
                </div>
                <div class="col-6 col-md-4 text-end order-2 order-md-3">
                    <div class="navbar-brand">
                       <a href="#" id="search-icon"><i class='bx bx-search'></i></a>
                            <input type="text" id="search-input" class="d-none" placeholder="Buscar..." aria-label="Buscar">
                            <div id="search-results" class="d-none"></div>

                        <a href="noticias.html" class="d-none d-md-inline">Noticias</a>
                        <a href="admision-2025.html" id="admision">Admisión</a>
                    </div>
                </div>
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.html">Inicio</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Colegio
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="./colegio.html">Equipos</a></li>
                            <li><a class="dropdown-item" href="./historia.html">Historia</a></li>
                            <li><a class="dropdown-item" href="./mision-vision-valores.html">Misión, Visión y Valores</a></li>
                            <li><a class="dropdown-item" href="./misioneras-del-corazon-de-maria.html">Misioneras del Corazón de María</a></li>
                            <li><a class="dropdown-item" href="./infraestructura.html">Infraestructura</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./organizacion.html">Organización</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Documentos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Academicos</a></li>
                            <li><a class="dropdown-item" href="#">Institucionales</a></li>
                            <li><a class="dropdown-item" href="#">Informativos</a></li>
                            <li><a class="dropdown-item" href="#">Lecturas Complementarias</a></li>
                        </ul>
                    </li>                    
                    <li class="nav-item">
                        <a class="nav-link" href="talleres.html">Talleres</a>
                    </li>
                </ul>                
            </div>
        </div>
    </nav>

    <!-- BARRA DE INFORMACIÓN-->
    <div id="barra-info" class="mb-3">
        <p>Comienzo de clases 2025 <a href=""><b>info aquí</b></a></p>
    </div>
    `;
    document.getElementById('header-component').innerHTML = headerHTML;

    // Cargar las páginas y configurar la búsqueda
    const pages = await loadPages();
    setupSearch(pages);

    document.getElementById('sendEmail').addEventListener('click', function () {
        const nombre = document.getElementById('nombre').value;
        const email = document.getElementById('email').value;
        const mensaje = document.getElementById('mensaje').value;

        // Validar que los campos no estén vacíos
        if (!nombre || !email || !mensaje) {
            alert('Por favor, completa todos los campos.');
            return;
        }

        // Validar formato de correo electrónico
        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            alert('Por favor, ingresa un correo electrónico válido.');
            return;
        }

        // Validar longitud del mensaje
        const minMessageLength = 10;
        const maxMessageLength = 500;
        if (mensaje.length < minMessageLength || mensaje.length > maxMessageLength) {
            alert(`El mensaje debe tener entre ${minMessageLength} y ${maxMessageLength} caracteres.`);
            return;
        }

        // Enviar el correo
        emailjs.send("service_ow3d7tg", "template_c4ucvlu", {
            from_name: nombre,
            from_email: email,
            message: mensaje
        })
            .then(function (response) {
                console.log('Éxito!', response.status, response.text);
                alert('Mensaje enviado con éxito!');
            }, function (error) {
                console.log('Error:', error);
                alert('Error al enviar el mensaje. Inténtalo de nuevo.');
            });
    });
}

// Ejecuta la función al cargar el archivo
loadHeader();