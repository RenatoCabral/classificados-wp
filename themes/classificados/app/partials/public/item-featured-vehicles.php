<?php

$post_id    = get_the_ID();
$price      = get_post_meta( $post_id, 'price', true );
$km         = get_post_meta( $post_id, 'km', true );
$fabricante = get_the_terms( $post_id, 'fabricante' );
$year       = get_post_meta( $post_id, 'year', true );


$thumb_id  = get_post_thumbnail_id( $post_id );
$thumb_url = wp_get_attachment_image_src( $thumb_id, 'thumb-news' );
$img_src   = has_post_thumbnail() ? $thumb_url[0] : get_bloginfo( 'template_directory' ) . "/img/no-image-veiculo-thumb.jpg";

?>

<div class="col s12 m12 l3">

    <div class="card z-depth-1 card-vehicles">
        <div class="card-image card-image-vehicles">
            <a href="<?php the_permalink() ?>">
                <img src="<?= $img_src ?>">
            </a>
            <a href="<?php the_permalink() ?>"
               class="btn-floating btn-small halfway-fab waves-effect waves-light red transition-300ms icon-view-more">
                <i class="small material-icons">add</i>
            </a>
        </div>
        <div class="card-content">
            <a class="dados-veiculos" href="<?php the_permalink() ?>">
                <p class="cod-vehicle">Cod. <?= $post_id ?></p>
                <p class="price">R$ <?= number_format( $price, 2, ',', '.' ); ?></p>
                <p><?= the_title() ?></p>
                <p><?= $km ?> Km</p>
                <p><?= $fabricante[0]->name ?> - <?= $year ?></p>
            </a>
        </div>
    </div>

</div>

