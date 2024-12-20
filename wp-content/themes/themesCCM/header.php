<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Metas -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sitio web oficial del Colegio Corazón de María, donde puedes encontrar información sobre noticias, admisiones y eventos escolares.">
    <meta name="keywords" content="colegio, educación, noticias, admisión, Corazón de María, eventos escolares">
    <meta name="author" content="Mike Dev">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo_ccm.png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- BoxIcon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Estilo Principal -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/freeps2/a7rarpress@main/swiper-bundle.min.css">

    <!-- Titulo -->
    <title><?php wp_title(); ?></title>

    <!-- Elementos Wordpress -->
    <?php wp_head(); ?>

    <!-- Carga del Logo -->
    <script>
        var logoUrl = "<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo_ccm.png'); ?>";
    </script>

</head>

<body <?php body_class(); ?>>