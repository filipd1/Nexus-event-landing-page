<div class="section sponsors">

    <?php 
    $images = get_field('sponsor_img');
    if ($images) :
        foreach ($images as $img) : ?>

        <img
            src="<?php echo esc_url($img['url']); ?>"
            alt="<?php echo esc_attr($img['alt']); ?>"
        >
        <?php endforeach;
    endif; ?>

</div>