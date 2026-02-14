<?php
    $post_number = $args['post_number'];

    $speakers = new WP_Query([
        'post_type'      => 'speakers',
        'posts_per_page' => $post_number,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    ]);
?>

<div class="section section-speakers">
    <div class="front-page-header">
        <h2 class="front-page-title">Keynote Speakers</h2>
        <p>Meet the industry leaders shaping the future of AI.</p>
    </div>

    <div class="speakers-grid">  

        <?php if ($speakers->have_posts()) : ?>
            <?php while($speakers->have_posts()) : $speakers->the_post(); ?>
                <?php get_template_part('template-parts/components/speaker-card'); ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

    </div>

    <?php if ( ! is_post_type_archive('speakers') ) : ?>
        <a href="<?php echo get_post_type_archive_link('speakers'); ?>" class="btn">
            And more
            <?php
                echo file_get_contents(
                    get_stylesheet_directory() . '/assets/icons/union-1.svg'
                );
            ?>
        </a>
    <?php endif; ?>

</div>