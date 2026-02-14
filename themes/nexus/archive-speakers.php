<?php get_header(); ?>

<div class="container">
    <?php get_template_part('template-parts/sections/section-speakers',
        null,
        [
            'post_number' => -1,
        ]);
    ?>
</div>

<?php get_footer(); ?>