<?php
    $i = $args['i'] ?? null;
?>

<div class="benefit-card">
    <div class="benefit-card-content">
        <h4><?=the_title();?></h4>
        <div class="benefit-card-number">0<?=$i;?></div>
        <p><?=the_excerpt();?></p>
    </div>
</div>