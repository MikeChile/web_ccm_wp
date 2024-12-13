<?php
function mi_tema_scripts()
{
    // Estilos principales
    wp_enqueue_style('estilos', get_stylesheet_uri());

    // Swipper para noticias de la pagina de inicio
    function agregar_swiper_js()
    {
        wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.js', array(), '1.0', true);
    }
    add_action('wp_enqueue_scripts', 'agregar_swiper_js');

    // Script para el header
    wp_enqueue_script('header-js', get_template_directory_uri() . '/assets/js/components/header-home.js', array('jquery'), null, true);
    wp_localize_script('header-js', 'miTema', array(
        'rutaInicial' => get_template_directory_uri(),
        'homeUrl' => home_url(),
    ));

    // Script para el footer
    wp_enqueue_script('footer-js', get_template_directory_uri() . '/assets/js/components/footer.js', array('jquery'), null, true);
    wp_localize_script('footer-js', 'miTemaFooter', array(
        'rutaInicial' => get_template_directory_uri(),
        'homeUrl' => home_url(),
    ));

    // Estilos específicos para páginas
    if (is_page('talleres')) {
        wp_enqueue_style('estilo-talleres', get_template_directory_uri() . '/assets/css/talleres.css');
    }

    if (is_page('admision-2025')) {
        wp_enqueue_style('estilo-admision', get_template_directory_uri() . '/assets/css/admision.css');
    }

    if (
        is_page(array('infraestructura', 'academicos', 'noticias', 'institucionales', 'informativos', 'procedimientos-de-emergencia-y-o-evacuacion', 'transporte-escolar', 'trabaja-con-nosotros', 'tutoriales-lirmi', 'uniformes', 'calendario-de-actividades', 'lecturas-complementarias', 'organizacion', 'colegio', 'comunicados', 'historia', 'mision-vision-valores', 'misioneras-del-corazon-de-maria', 'lista-de-utiles'))
    ) {
        wp_enqueue_style('estilo-infraestructura', get_template_directory_uri() . '/assets/css/infraestructura.css');
    }

    if (is_page('noticias')) {
        wp_enqueue_style('estilo-noticias', get_template_directory_uri() . '/assets/css/noticias.css');
    }

    if (is_page('calendario-de-actividades')) {
        wp_enqueue_style('estilo-noticias', get_template_directory_uri() . '/assets/css/calendario-actividades.css');
    }

    // EmailJS para servicios de correo
    wp_enqueue_script('emailjs', 'https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js', array(), null, true);
    wp_add_inline_script('emailjs', '
        var logoUrl = "' . esc_url(get_template_directory_uri() . '/assets/img/logo_ccm.png') . '";
        (function() {
            emailjs.init("1TbyQx7QRVmwpvrJA");
        })();
    ');
}

add_action('wp_enqueue_scripts', 'mi_tema_scripts');

// Registrar endpoint para suscripciones
add_action('rest_api_init', function () {
    register_rest_route('ccm/v1', '/subscribe', [
        'methods' => 'POST',
        'callback' => 'ccm_handle_subscription',
        'permission_callback' => '__return_true', // Permitir acceso público
    ]);
});

// Registrar endpoint para suscripciones
add_action('rest_api_init', function () {
    register_rest_route('ccm/v1', '/subscribe', [
        'methods' => 'POST',
        'callback' => 'ccm_handle_subscription',
        'permission_callback' => '__return_true', // Permitir acceso público
    ]);
});


// Función para manejar la suscripción
function ccm_handle_subscription(WP_REST_Request $request)
{
    // Obtener el correo desde la solicitud
    $email = sanitize_email($request->get_param('email'));

    // Validar que el correo sea válido
    if (!is_email($email)) {
        return new WP_REST_Response('Correo no válido', 400); // Responder con error 400 si no es válido
    }

    // Ruta al archivo correos.json
    $file_path = get_template_directory() . '/datos/correos.json';

    // Leer los correos existentes
    $emails = [];
    if (file_exists($file_path)) {
        $content = file_get_contents($file_path);
        $emails = json_decode($content, true) ?? []; // Decodificar JSON o inicializar vacío
    }

    // Agregar el nuevo correo
    if (!in_array($email, $emails)) {
        $emails[] = $email;

        // Guardar el archivo correos.json
        if (file_put_contents($file_path, json_encode($emails, JSON_PRETTY_PRINT))) {
            return new WP_REST_Response(['message' => '¡Te has registrado correctamente!'], 200); // Responder con éxito
        } else {
            return new WP_REST_Response('Error al guardar el correo', 500); // Responder con error si no se guarda
        }
    }

    return new WP_REST_Response('Este correo ya está registrado', 200); // Responder si el correo ya está en la lista
}
