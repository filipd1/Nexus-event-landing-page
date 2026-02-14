<?php
    $date = get_field('promotion_end_date', 'option');
    $end = $date 
        ? strtotime($date . ' 00:00:00') 
        : 0;

    $tickets = new WP_Query([
        'post_type'      => 'tickets',
        'posts_per_page' => 3,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    ]);
?>

<div class="section section-tickets">
    <div class="front-page-header">
        <h2 class="front-page-title">Register now</h2>
        <p>Secure your spot at the Next-Gen AI Summit 2052 and join the future of AI innovation.</p>
    </div>

    <div class="timer-wrapper">
        <p>early bird pricing end in:</p>

        <div 
            class="timer" 
            data-end="<?php echo esc_attr($end * 1000); ?>"
        >
            <span class="timer-days">14</span>
            <span class="timer-hours">00</span>
            <span class="timer-minutes">00</span>

            <span class="timer-label">days</span>
            <span class="timer-label">hours</span>
            <span class="timer-label">minutes</span>
        </div>

        <div class="timer-img">
            <?php
                echo file_get_contents(
                    get_stylesheet_directory() . '/assets/img/section_tickets_img.svg'
                );
            ?>
        </div>

    </div>

    <div class="ticket-options">
        <h3 class="front-page-subtitle">Ticket Options</h3>

        <div class="ticket-cards-wrapper">

            <?php if ($tickets->have_posts()) : ?>
                <?php while($tickets->have_posts()) : $tickets->the_post(); ?>
                    <?php get_template_part('template-parts/components/ticket-card'); ?>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

        </div>
    </div>
</div>