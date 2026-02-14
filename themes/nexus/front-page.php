<?php get_header(); ?>

<div class="container">

    <?=the_content(); ?>
    <?php get_template_part('template-parts/sections/section-speakers',
        null,
        [
            'post_number' => 4,
        ]);
    ?>
    <?php get_template_part('template-parts/sections/section-benefits'); ?>
    <?php get_template_part('template-parts/sections/section-tickets'); ?>
    <?php get_template_part('template-parts/sections/section-contact'); ?>
    
</div>

<?php get_footer(); ?>