<?php 
    $main_title = get_field('main_title');
    $main_desc = get_field('main_desc');
    $link = get_field('main_cta_link');
?>

<div class="section section-info">

    <div class="info-card">
        <?php if ($main_title) : ?>
            <h3><?=$main_title;?></h3>
        <?php endif; ?>

        <div class="info-flex svg-flex">
            <?php
                echo file_get_contents(
                    get_stylesheet_directory() . '/assets/img/info.svg'
                );
            ?>

            <?php if ($main_desc) : ?>
                <p><?=$main_desc;?></p>
            <?php endif; ?>
        </div>

        <div class="info-flex">

            <div class="info-imgs">
                <img src="<?=get_template_directory_uri(); ?>/assets/img/avatar1.png" alt="avatar1">
                <img src="<?=get_template_directory_uri(); ?>/assets/img/avatar2.png" alt="avatar2">
                <img src="<?=get_template_directory_uri(); ?>/assets/img/avatar3.png" alt="avatar3">
                <img src="<?=get_template_directory_uri(); ?>/assets/img/avatar4.png" alt="avatar4">
            </div>

            <a href="<?php echo esc_url($link); ?>" class="btn section-info-btn">
                And more
                <?php
                    echo file_get_contents(
                        get_stylesheet_directory() . '/assets/icons/union-1.svg'
                    );
                ?>
            </a>
        </div>

    </div>

    <div class="info-right">
        <?php if (have_rows('card')) : ?>
            <?php while (have_rows('card')) : the_row(); ?>
                <div class="info-card">
                    <h3><?=get_sub_field('card_title');?></h3>
                    <p><?=get_sub_field('card_desc');?></p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

</div>