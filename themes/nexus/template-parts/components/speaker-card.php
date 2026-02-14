<?php
    $role = get_field('role');
?>

<div class="speaker-cards">
    <div class="content">
      <h3><?php the_title(); ?></h3>
      <?php if ($role) : ?>
        <p><?=$role; ?></p>
      <?php endif; ?>
    </div>

    <div class="media">
        <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('medium', [
                'alt' => get_the_title(),
                'loading' => 'lazy',
                ]);
            }
        ?>
    </div>
</div>
