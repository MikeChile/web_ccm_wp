<?php
function mi_tema_scripts()
{
    wp_enqueue_style('estilos', get_stylesheet_uri());

    // Encolar el archivo JavaScript para el header
    wp_enqueue_script('header-js', get_template_directory_uri() . '/assets/js/components/header-home.js', array('jquery'), null, true);

    // Encolar el archivo JavaScript para el footer
    wp_enqueue_script('footer-js', get_template_directory_uri() . '/assets/js/components/footer-home.js', array('jquery'), null, true);

    // Cargar el estilo específico para la página de Talleres
    if (is_page('talleres')) { // Asegúrate de que el slug de la página sea 'talleres'
        wp_enqueue_style('estilo-talleres', get_template_directory_uri() . '/assets/css/talleres.css');
    }

    // Cargar el estilo específico para la página de Admisión 2025
    if (is_page('admision-2025')) { // Asegúrate de que el slug de la página sea 'admision-2025'
        wp_enqueue_style('estilo-admision', get_template_directory_uri() . '/assets/css/admission.css');
    }

    // Cargar el estilo específico para la página de Infraestructura
    if (is_page('infraestructura')) { // Asegúrate de que el slug de la página sea 'infraestructura'
        wp_enqueue_style('estilo-infraestructura', get_template_directory_uri() . '/assets/css/infraestructura.css');
    }

    // Cargar el estilo específico para la página de Noticias
    if (is_page('noticias')) { // Asegúrate de que el slug de la página sea 'noticias'
        wp_enqueue_style('estilo-noticias', get_template_directory_uri() . '/assets/css/noticias.css');
    }
}
add_action('wp_enqueue_scripts', 'mi_tema_scripts');
