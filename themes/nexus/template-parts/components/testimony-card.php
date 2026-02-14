<?php
    $name = get_field('name');
    $avatar = get_field('avatar');
    $role = get_field('role');
?>

<div class="testimony-card swiper-slide">

    <h4><?php the_title(); ?></h4>
    <div class="testimony-card-content"><?php the_content(); ?></div>

    <div class="testimony-card-author">
        <img src="<?=$avatar; ?>" alt="author1">
        <div class="author-overview">
            <p class="name"><?=$name; ?></p>
            <p class="role"><?=$role; ?></p>
        </div>
    </div>

</div>