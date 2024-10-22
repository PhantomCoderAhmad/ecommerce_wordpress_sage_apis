<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

if (! function_exists('\Roots\bootloader')) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://roots.io/acorn/docs/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

\Roots\bootloader()->boot();

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

    
    if ( ! function_exists( 'my_portfolio_support' ) ) :

        /**
         * Sets up theme defaults and registers support for various WordPress features.
         *
         * @since Twenty Twenty-Two 1.0
         *
         * @return void
         */
        function my_portfolio_support() {
    
            // Add support for block styles.
            add_theme_support( 'wp-block-styles' );
    
            // Enqueue editor styles.
            add_editor_style( 'style.css' );
        }
    
    endif;
    
    
    
    if ( ! function_exists( 'my_portfolio_setup' ) ) :

        /**
         * Sets up theme defaults and registers support for various WordPress features.
         *
         * @since My Portfolio 1.0
         *
         * @return void
         */
        function my_portfolio_setup() {
            // Add support for various features.
            add_theme_support( 'title-tag' );
            add_theme_support( 'post-thumbnails' );
            add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    
            // Enqueue editor styles.
            add_editor_style( 'style.css' );
    
        }
    
    endif;
    
    // Enqueue styles function
    // Enqueue styles function
    function my_portfolio_enqueue_styles() {
        // Enqueue main stylesheet located in the theme's root directory
        wp_enqueue_style( 'my-portfolio-styles', get_template_directory_uri() . '/style.css', array(), null );
        wp_enqueue_style('my-portfolio-styles', get_template_directory_uri() . '/app.7a7dc4.css', array(), null);
        // Enqueue Font Awesome
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/vendor/fortawesome/font-awesome/css/all.min.css', array(), null );
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . 'wp-admin/css/about.css', array(), null );
        wp_enqueue_style( 'font-awesome', get_template_directory_uri() . 'wp-admin/css/about-rtl.css', array(), null );
        
        wp_enqueue_style('theme-style', get_stylesheet_uri());
        

    }
    add_action('wp_enqueue_scripts', 'my_portfolio_enqueue_styles');

    // Hook into the 'after_setup_theme' action
    add_action( 'after_setup_theme', 'my_portfolio_setup' );

    add_filter('sober/controller/namespace', function () {
        return 'Data';
    });
    add_theme_support('post-thumbnails');


    