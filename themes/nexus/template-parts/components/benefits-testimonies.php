<div class="benefits-testimonies">
    <div class="front-page-header">
        <h3 class="front-page-subtitle">What Past Attendees Say</h3>

        <div class="testimonies-btns">
            <button class="btn btn-left">
                <?php
                    echo file_get_contents(
                        get_stylesheet_directory() . '/assets/icons/arrow_left.svg'
                    );
                ?>
            </button>

            <button class="btn btn-right">
                <?php
                    echo file_get_contents(
                        get_stylesheet_directory() . '/assets/icons/arrow_right.svg'
                    );
                ?>
            </button>   
        </div>

    </div>

    <?php
        $testimonies = new WP_Query([
        'post_type'      => 'testimonies',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
        ]);
    ?>

    <?php if ($testimonies->have_posts()) : ?>
        <div class="swiper mySwiper">
            
            <div class="swiper-wrapper">
                <?php while($testimonies->have_posts()) : $testimonies->the_post(); ?>
                    <?php get_template_part('template-parts/components/testimony-card'); ?>
                <?php endwhile; ?>
            </div>

        </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

</div>