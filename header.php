<?php
    /**
     * The header for our theme
     *
     * Displays all of the <head> section and everything up till <div id="content">
     *
     * @package understrap
 */
    
    // Exit if accessed directly.
    defined( 'ABSPATH' ) || exit;
    
    $container = get_theme_mod( 'understrap_container_type' );
    ?>
    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <!-- <link rel="stylesheet" type="text/css" href="/wp-content/themes/understrap-master/slick/slick.css"/> -->
        <!-- <link rel="stylesheet" type="text/css" href="/wp-content/themes/understrap-master/slick/slick-theme.css"/> -->
        <!-- <link href="/wp-content/themes/understrap-master/src-box/css/lightbox.css" rel="stylesheet" /> -->
    
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <!-- <script type="text/javascript" src="/wp-content/themes/understrap-master/slick/slick.min.js"></script> -->
        <!-- <script src="/wp-content/themes/understrap-master/src-box/js/lightbox.js"></script> -->

        <?php wp_head(); ?>
    </head>
    
    <body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
    <?php do_action( 'wp_body_open' ); ?>
    <div class="site" id="page">
    
        <!-- ******************* The Navbar Area ******************* -->
        <div class="container-fluid heading-contact">
            <div class="col-md-12 col-12">
                <div>
                    <a href="/contact"><i class="fa fa-envelope-o"></i> Napisz do nas</a>
                    <a href="tel:123456789"><i class="fa fa-phone"></i> Zadzwoń do nas</a>
                    <a href="/#"><i class="fa fa-facebook-square"></i></a>
                    <a href="/#"><i class="fa fa-linkedin-square"></i></a>
                </div>
            </div>
        </div>
        <div id="wrapper-navbar">
    
            <a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
    
            <nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-primary" aria-labelledby="main-nav-label">
                <div class="container">
                <h2 id="main-nav-label" class="sr-only">
                    <?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
                </h2>
                    <a href="/"><img src="" alt="simple-solutions-logo"></a>
    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <!-- The WordPress Menu goes here -->
					<div class="header-main-menu">
                    <?php wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id'    => 'navbarNavDropdown',
                            'menu_class'      => 'navbar-nav ml-auto',
                            'fallback_cb'     => '',
                            'menu_id'         => 'main-menu',
                            'depth'           => 2,
                            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                        )
                    ); ?>
                <?php if ( 'container' === $container ) : ?>
                    
                </div><!-- .container -->
                <?php endif; ?>
                </div>
				</div>
            </nav><!-- .site-navigation -->
    
        </div><!-- #wrapper-navbar end -->
