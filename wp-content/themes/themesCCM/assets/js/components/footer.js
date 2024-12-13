// footer.js
function loadFooter() {
    const footerHTML = `
        <footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Encuentranos</h4>
                                <span>San Nicolás #1261, San Miguel, Santiago de Chile</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Llamanos</h4>
                                <span>(56 2) 2522 3387</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Contactenos</h4>
                                <span><a href="mailto:ccm.contacto@colegiocorazondemaria.cl" target="_blank"
                                        rel="noopener">ccm.contacto@colegiocorazondemaria.cl</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="${logoUrlFooter}" class="img-fluid"
                                        alt="logo"></a>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Enlaces</h3>
                            </div>
                            <ul>
                                <li><a href="${miTemaFooter.rutaInicial}/lista-de-utiles/">Lista de Útiles Escolares</a></li>
                                <li><a href="${miTemaFooter.rutaInicial}/uniformes/">Uniformes Escolares</a></li>
                                <li><a href="${miTemaFooter.rutaInicial}/transporte-escolar/">Transporte Escolar</a></li>
                                <li><a href="${miTemaFooter.rutaInicial}/trabaja-con-nosotros/">Trabaja con Nosotros</a></li>
                                <li><a href="https://colegiocorazondemaria.cl/new/docs/menu_casino_ccm_Noviembre_2024.pdf">Menu Casino del mes</a></li>                                
                                <li><a href="${miTemaFooter.rutaInicial}/tutoriales-lirmi/">Tutoriales Lirmi</a></li>                                
                                <li><a href="${miTemaFooter.rutaInicial}/procedimientos-de-emergencia-y-o-evacuacion/">Procedimientos de emergencia</a></li>
                                <!--<li><a href="#">Calendario Actividades Anuales</a></li>-->

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Subscribete</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Recibe las noticias de nuestro colegio.</p>
                            </div>
                            <div class="subscribe-form">
                                <form id="subscribeForm">
                                    <input type="email" placeholder="Correo" required>
                                    <button type="submit"><i class='bx bxs-envelope'></i></button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row justify-content-center">                    
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-center">
                        <div class="footer-menu text-white">
                            <span>Colegio Corazón de María 2025</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    `;
    //document.getElementById('footer-component').innerHTML = footerHTML;

    const footerElement = document.getElementById('footer-component');
    if (footerElement) {
        footerElement.innerHTML = footerHTML;
    }
}


// Manejo del formulario de suscripción
document.addEventListener('DOMContentLoaded', function () {
    loadFooter(); // Llama a la función para cargar el footer

    const subscribeForm = document.getElementById('subscribeForm');
    if (subscribeForm) {
        subscribeForm.addEventListener('submit', async function (e) {
            e.preventDefault(); // Previene el comportamiento por defecto del formulario

            const emailInput = this.querySelector('input[type="email"]');
            const email = emailInput.value.trim();

            if (!email) {
                alert('Por favor, ingresa un correo válido.');
                return;
            }

            try {
                const response = await fetch('http://localhost/web_ccm_wordpress/wp-json/ccm/v1/subscribe', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ email }), // Enviar el correo como JSON
                });


                const result = await response.json();

                if (response.ok) {
                    alert(result.message || '¡Te has suscrito correctamente! Recibirás las últimas noticias del colegio directamente en tu correo electrónico.');

                    emailInput.value = ''; // Limpiar el campo de entrada
                } else {
                    alert(result.message || 'Hubo un error al registrarte. Intenta nuevamente.');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('No se pudo procesar tu registro. Por favor, intenta más tarde.');
            }
        });
    }
});

// Llama a la función al cargar el archivo
//loadFooter();
