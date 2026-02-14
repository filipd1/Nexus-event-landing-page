<?php
    $title = get_field('title');
    $location = get_field('event_location', 'option');
    $date = get_field('event_date', 'option');
?>

<div class="section section-agenda">

    <div class="front-page-header">
        <h2 class="front-page-title"><?=$title; ?></h2>
        <div>
            <p><?=$date; ?></p>
            <p><?=$location; ?></p>
        </div>
    </div>

    <div class="agenda-container">
        <?php if (have_rows('event_days')) : ?>
            <?php while (have_rows('event_days')) : the_row(); ?>
                <div class="agenda-event">
                    <div class="agenda-event-time">
                        <h5><?=get_sub_field('session');?></h5>
                        <p><?=get_sub_field('start');?> - <?=get_sub_field('end');?></p>
                    </div>

                    <div class="agenda-event-overview">
                        <h5><?=get_sub_field('header');?></h5>
                        <p><?=get_sub_field('overview');?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <div class="section-agenda-img">
            <?php
                echo file_get_contents(
                    get_stylesheet_directory() . '/assets/img/Mark.svg'
                );
            ?>
        </div>

        <a href="#" class="btn btn-primary">
            View detailed schedule
            <?php
                echo file_get_contents(
                    get_stylesheet_directory() . '/assets/icons/union-1.svg'
                );
            ?>
        </a>

    </div>
    
</div>