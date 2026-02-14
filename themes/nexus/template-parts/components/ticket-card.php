<?php
    $ticket_overview = get_field('ticket_overview');
    $ticket_price = get_field('ticket_price');
?>

<div class="ticket-card">
    <h5><?php the_title();?></h5>

    <?php if ($ticket_overview) : ?>
        <p class="desc"><?=$ticket_overview; ?></p>

    <?php endif; ?>

    <?php if ($ticket_price) : ?>
        <p class="price"><?=$ticket_price; ?></p>
    <?php endif; ?>
    
    <a href="#" class="btn">
        Get your ticket
        <?php
            echo file_get_contents(
                get_stylesheet_directory() . '/assets/icons/union-1.svg'
            );
        ?>
    </a>
</div>