<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="site-header">
    <div class="site-logo">
        <?php if (has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
        <?php endif; ?>
        <a href="<?php echo esc_url(home_url('/')); ?>">
            <?php bloginfo('name'); ?>
        </a>
    </div>

    <?php
        wp_nav_menu([
            'theme_location' => 'main_menu',
            'container' => 'false',
            'menu_class' => 'main-menu'
        ])
    ?>

    <button class="mobile-menu-toggle" aria-label="Open menu">
        ☰
    </button>

    <?php
        wp_nav_menu([
            'theme_location' => 'main_menu',
            'container'      => 'false',
            'menu_class' => 'mobile-menu'
        ]);
    ?>

</div>
