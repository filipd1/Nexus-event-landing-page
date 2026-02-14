<div class="section section-benefits">
    <div class="front-page-header">
        <h2 class="front-page-title">Why attend?</h2>
        <p>
            Discover why Next-Gen AI Summit is the must-attend event for AI professionals, innovators, and industry leaders.
        </p>
    </div>

    <div class="benefits-grid">
        <?php
            $benefits = new WP_Query([
            'post_type'      => 'benefits',
            'posts_per_page' => 4,
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
            ]);

            $i=1;
        ?>
        <?php if ($benefits->have_posts()) : ?>
            <?php while ($benefits->have_posts()) : $benefits->the_post(); ?>
                <?php
                    get_template_part('template-parts/components/benefit-card', null, ['i' => $i]);
                    $i++;
                ?>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>

    <?php get_template_part('template-parts/components/benefits-testimonies'); ?>


</div>