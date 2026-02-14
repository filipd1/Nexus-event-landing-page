<?php

add_action( 'after_setup_theme', function () {

    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    register_nav_menus([
        'main_menu' => 'Main menu',
        'footer_menu' => 'Footer menu',
    ]);

    add_theme_support('post-thumbnails');
});

add_action( 'wp_enqueue_scripts', function () {

    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        filemtime(get_template_directory() . '/assets/css/main.css')
    );
});

add_action('init', function () {
    
    register_post_type('speakers', [
        'labels' => [
            'name' => 'Speakers',
            'singular_name' => 'Speaker',
        ],
        'rewrite' => [
            'slug' => 'speakers',
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'thumbnail'],
    ]);

    register_post_type('benefits', [
        'labels' => [
            'name' => 'Benefits',
            'singular_name' => 'Benefit',
        ],
        'rewrite' => [
            'slug' => 'benefits',
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'excerpt'],
    ]);

    register_post_type('testimonies', [
        'labels' => [
            'name' => 'Testimonies',
            'singular_name' => 'Testimony',
        ],
        'rewrite' => [
            'slug' => 'testimonies',
        ],
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-portfolio',
    ]);

    register_post_type('tickets', [
        'labels' => [
            'name' => 'Tickets',
            'singular_name' => 'Ticket',
        ],
        'rewrite' => [
            'slug' => 'tickets',
        ],
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-portfolio',
    ]);
});

function load_scripts() {

    wp_enqueue_script(
        'countdown',
        get_stylesheet_directory_uri() . '/assets/js/countdown.js',
        [],
        null,
        true
    );

    wp_enqueue_script(
        'testimonies-swiper',
        get_stylesheet_directory_uri() . '/assets/js/testimonies-swiper.js',
        ['swiper-js'],
        '1.0',
        true
    );

    wp_enqueue_script(
        'mobile-menu',
        get_stylesheet_directory_uri() . '/assets/js/mobile-menu.js',
        [],
        null,
        true
    );
};

add_action( 'wp_enqueue_scripts', 'load_scripts');

function nexus_enqueue_swiper() {
    
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css',
        [],
        null
    );

    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js',
        [],
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'nexus_enqueue_swiper');


function klfc_register_acf_blocks() {
    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'            => 'section-1-landing-page',
            'title'           => __('Front page - hero section'),
            'description'     => __('First section on front page'),
            'render_template' => 'template-parts/sections/section-hero.php',
            'category'        => 'layout',
            'icon'            => 'layout',
            'supports'        => array(
                'align' => false
            )
        ));

        acf_register_block_type(array(
            'name'            => 'section-2-landing-page',
            'title'           => __('Front page - info cards'),
            'description'     => __('Second section on front page below sponsors'),
            'render_template' => 'template-parts/sections/section-front-page-cards.php',
            'category'        => 'layout',
            'icon'            => 'layout',
            'supports'        => array(
                'align' => false
            )
        ));

        acf_register_block_type(array(
            'name'            => 'section-3-landing-page',
            'title'           => __('Front page - agenda'),
            'description'     => __('Third section on front page'),
            'render_template' => 'template-parts/sections/section-agenda.php',
            'category'        => 'layout',
            'icon'            => 'layout',
            'supports'        => array(
                'align' => false
            )
        ));
        
        acf_register_block_type(array(
            'name'            => 'section-sponsors',
            'title'           => __('Sponsors'),
            'description'     => __('Second section on front page below sponsors'),
            'render_template' => 'template-parts/components/sponsors.php',
            'category'        => 'layout',
            'icon'            => 'layout',
            'supports'        => array(
                'align' => false
            )
        ));

    }
}
add_action('acf/init', 'klfc_register_acf_blocks');

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page([
        'page_title' => 'Ustawienia eventu',
        'menu_title' => 'Event Settings',
        'menu_slug'  => 'event-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ]);
}