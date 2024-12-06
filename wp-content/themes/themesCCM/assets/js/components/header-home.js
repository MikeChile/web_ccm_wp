// header.js

async function loadData() {
    try {
        const responsePages = await fetch(`${miTema.rutaInicial}/datos/pages.json`);
        const pages = await responsePages.json();

        const responseNoticias = await fetch(`${miTema.rutaInicial}/datos/noticias.json`);
        const noticias = await responseNoticias.json();

        const responseTalleres = await fetch(`${miTema.rutaInicial}/datos/talleres.json`);
        const talleres = await responseTalleres.json();

        return { pages, noticias, talleres };
    } catch (error) {
        console.error('Error al cargar los datos:', error);
        return { pages: [], noticias: [], talleres: [] };
    }
}

function setupSearch(data) {
    const searchIcon = document.getElementById('search-icon');
    const searchInput = document.getElementById('search-input');
    const resultsContainer = document.getElementById('search-results');

    searchIcon.addEventListener('click', function (event) {
        event.preventDefault();
        searchInput.classList.toggle('d-none');
        searchInput.focus();
        resultsContainer.classList.add('d-none');
    });

    searchInput.addEventListener('input', function () {
        const query = searchInput.value.toLowerCase();
        const filteredResults = [];

        // Buscar en páginas
        data.pages.forEach(page => {
            if (page.title.toLowerCase().includes(query)) {
                filteredResults.push({ title: page.title, url: page.url, type: 'página' });
            }
        });

        // Buscar en noticias
        data.noticias.forEach(noticia => {
            if (noticia.titulo.toLowerCase().includes(query)) {
                filteredResults.push({ title: noticia.titulo, url: `noticia/?id=${noticia.id}`, type: 'noticia' });

            }
        });

        // Buscar en talleres
        data.talleres.forEach(taller => {
            if (taller.nombre.toLowerCase().includes(query)) {
                filteredResults.push({ title: taller.nombre, url: `taller/?id=${taller.ID}`, type: 'taller' });

            }
        });

        resultsContainer.innerHTML = '';
        if (filteredResults.length > 0) {
            resultsContainer.classList.remove('d-none');
            filteredResults.forEach(result => {
                const resultItem = document.createElement('div');
                resultItem.innerHTML = `<a href="${result.url}">${result.title} (${result.type})</a>`;
                resultItem.addEventListener('click', () => {
                    window.location.href = result.url;
                });
                resultsContainer.appendChild(resultItem);
            });
        } else {
            resultsContainer.classList.add('d-none');
        }
    });
}

// Cargar header
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
                                                                <!-- Aquí puedes agregar enlaces a redes sociales si lo deseas -->
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
                        <p id="titulo">CORAZÓN <a href="${miTema.homeUrl}"><img class="logo" src="${logoUrl}" alt="Logo Corazón de María"></a> DE MARÍA</p>
                    </div>
                    <div class="col-6 col-md-4 text-end order-2 order-md-3">
                        <div class="navbar-brand">
                            <a href="#" id="search-icon"><i class='bx bx-search'></i></a>
                            <input type="text" id="search-input" class="d-none" placeholder="Buscar..." aria-label="Buscar">
                            <div id="search-results" class="d-none"></div>

                            <a href="${miTema.rutaInicial}/noticias/" class="d-none d-md-inline">Noticias</a>
                            <a href="${miTema.rutaInicial}/admision-2025/" id="admision">Admisión</a>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="${miTema.homeUrl}/">Inicio</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Colegio
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="${miTema.rutaInicial}/colegio/">Equipos</a></li>
                                <li><a class="dropdown-item" href="${miTema.rutaInicial}/historia/">Historia</a></li>
                                <li><a class="dropdown-item" href="${miTema.rutaInicial}/mision-vision-valores/">Misión, Visión y Valores</a></li>
                                <li><a class="dropdown-item" href="${miTema.rutaInicial}/misioneras-del-corazon-de-maria/">Misioneras del Corazón de María</a></li>
                                <li><a class="dropdown-item" href="${miTema.rutaInicial}/infraestructura/">Infraestructura</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="${miTema.rutaInicial}/organizacion/">Organización</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Documentos
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="${miTema.rutaInicial}/academicos/">Académicos</a></li>
                                <li><a class="dropdown-item" href="${miTema.rutaInicial}/institucionales/">Institucionales</a></li>
                                <li><a class="dropdown-item" href="${miTema.rutaInicial}/informativos/">Informativos</a></li>
                                <li><a class="dropdown-item" href="${miTema.rutaInicial}/lecturas-complementarias/">Lecturas Complementarias</a></li>
                            </ul>
                        </li>                    
                        <li class="nav-item">
                            <a class="nav-link" href="${miTema.rutaInicial}/talleres/">Talleres</a>
                        </li>
                    </ul>                
                </div>
            </div>
        </nav>

        <!-- BARRA DE INFORMACIÓN-->
        <div id="barra-info" class="mb-3">
            <p class="barra-p text-center">Nuevo Taller: Experiencias Pedagogicas <a href="${miTema.rutaInicial}/taller/?id=44"><b>info aquí</b></a></p>
        </div>
    `;

    document.getElementById('header-component').innerHTML = headerHTML;

    // Cargar las páginas y configurar la búsqueda
    // Cargar las páginas y configurar la búsqueda
    const data = await loadData();
    setupSearch(data);

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
    if (!window.menuInitialized) {
        document.querySelector('.navbar-toggler').addEventListener('click', function () {
            // Tu código para manejar el menú

        });

        window.menuInitialized = true;
    }
    const myCollapse = new bootstrap.Collapse(document.getElementById('navbarSupportedContent'), {
        toggle: false // Deshabilita el toggle automático
    });

    // Luego controlas manualmente el abrir/cerrar del menú
    document.querySelector('.navbar-toggler').addEventListener('click', function () {
        myCollapse.toggle(); // Alterna el estado
    });

}


// Ejecuta la función al cargar el archivo
loadHeader();