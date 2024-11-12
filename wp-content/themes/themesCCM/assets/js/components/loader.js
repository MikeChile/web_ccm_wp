// loader.js
function loadLoader() {
    const loaderHTML = `
        <div id="loader-out">
            <div class="row cf">
                <div class="three col">
                    <div class="loader" id="loader-6">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    `;
    document.body.insertAdjacentHTML('afterbegin', loaderHTML);

    // Oculta el loader cuando la página ha cargado completamente
    window.addEventListener('load', () => {
        const loader = document.getElementById('loader-out');
        loader.style.opacity = '0';  // Agrega una transición suave para desvanecerlo
        setTimeout(() => loader.style.display = 'none', 500); // Tiempo en ms para ocultarlo tras la transición
    });
}

// Llama a la función para mostrar el loader
loadLoader();
