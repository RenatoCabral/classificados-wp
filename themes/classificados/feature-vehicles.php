<?php

$query = new WP_Query([
    'post_type' => 'veiculo',
    'posts_per_page' => 8
]);
?>

<div class="container-fluid">
    <div class="row title_div_cars">
        <h5>Veículos em destaque</h5>
    </div>
</div>

<!--Veiculos detaques-->
<div class="container-fluid">
    <div class="row">
        <div class="col s12 m12 l12 list-featured-vehicles">
            <?php while ($query->have_posts()) {
                $query->the_post();

                include 'partials/item-featured-vehicles.php';

            } ?>

            <a href="<?php bloginfo('template_directory') ?>/vehicles.php" class="waves-effect waves-light btn-large view-more-button">Ver Mais</a>
        </div>

    </div>
</div>
