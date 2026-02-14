<?php
    $title = get_field('title');
    $overview = get_field('overview');
    $location = get_field('event_location', 'option');
    $date = get_field('event_date', 'option');
    $cta_text = get_field('cta_text') ?? 'CTA';
?>

<div class="section section-hero">

    <div class="section-hero-upper">
        <?php if ($date) : ?>
            <p class="section-hero-date"><?=$date;?></p>
        <?php endif; ?>

        <?php if ($location) : ?>
            <p><?=$location;?></p>
        <?php endif; ?>
    </div>

    <?php if ($title) : ?>
        <h1 class="front-page-title"><?=$title;?></h1>
    <?php endif; ?>

    <?php if ($overview) : ?>
        <p class="section-hero-text"><?=$overview;?></p>
    <?php endif; ?>

    <a href="#" class="btn">
        <?=$cta_text;?>
        <?php
            echo file_get_contents(
                get_stylesheet_directory() . '/assets/icons/union-1.svg'
            );
        ?>
    </a>

    <div class="section-hero-img">
        <?php
            echo file_get_contents(
                get_stylesheet_directory() . '/assets/icons/B1.svg'
            );
        ?>
    </div>

</div>