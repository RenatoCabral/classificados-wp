<!--Titulo veiculos em destaques-->
<div class="container-fluid">
    <div class="row title_div_cars">
        <h5>Veículos em destaque</h5>
    </div>
</div>

<!--Veiculos detaques-->
<div class="container-fluid">
    <div class="row">
        <div class="col s12 m12 l12 list-featured-vehicles">
            <?php for ($i =0; $i <= 7; $i++ ) {
                include 'partials/item-featured-vehicles.php';
            }  ?>
            <a href="<?php bloginfo('template_directory') ?>/vehicles.php" class="waves-effect waves-light btn-large view-more-button">Ver Mais</a>
        </div>

    </div>
</div>
