<?php

$post_id = get_the_ID();
$price = get_post_meta($post_id, 'price', true);
$km = get_post_meta($post_id, 'km', true);
$fabricante = get_the_terms($post_id, 'fabricante');
$year = get_post_meta($post_id, 'year', true);
$img_src = get_the_post_thumbnail_url($post_id, 'thumb-news');

?>

    <div class="col s12 m12 l3">
        <div class="card z-depth-1 card-vehicles">
            <div class="card-image card-image-vehicles">
                <img src="<?= $img_src?>" class="responsive-img">
                <span class="card-title">Cod. <?= $post_id?></span>
                <a href="<?php the_permalink()?>"
                   class="btn-floating btn-small halfway-fab waves-effect waves-light red transition-300ms icon-view-more">
                    <i class="small material-icons">add</i>
                </a>
            </div>
            <div class="card-content">
                <h5>R$ <?=$price?></h5>
                <p><?= the_title()?></p>
                <p><?= $km?> Km</p>
                <p><?= $fabricante[0]->name ?> - <?= $year?></p>
            </div>
        </div>
    </div>

