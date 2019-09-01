<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#67b0d6">
    <link rel="manifest" href="/grzybowscy/wp-content/themes/grzybowscy/manifest.json">
    <link rel="stylesheet" type="text/css" href="grzybowscy/wp-content/themes/grzybowscy/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=""></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '');
    </script>

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

    <div id="nav">
        <a href="/" title="grzybowscy - nauka pływania, Warszawa">
            <img id="logo" alt="grzybowscy - nauka pływania, Warszawa" src="/grzybowscy/wp-content/themes/grzybowscy/img/logo.png" />
        </a>
        <nav>
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </nav>
        <div id="toggle-button" onclick="slideToggle()"><i></i></div>
        <div id="nav-mobile">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        </div>
    </div>

    <!-- closed in footer.php -->
    <main>

    <?php if ( is_front_page() && !is_home() ) { ?>
        <header id="header">
            <section id="branding">
                <?php dynamic_sidebar('slogan'); ?>
            </section>
        </header>
    <?php } ?>
