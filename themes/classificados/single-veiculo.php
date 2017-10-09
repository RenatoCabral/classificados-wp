<?php get_header();
get_template_part( 'basic-search' );

include 'app/partials/public/monta-dados-veiculos.php';

?>

    <div class="container-fluid">
        <div class="row">
            <div class="col s12 m6 l6">
                <div class=" col s12 m12 l12 description-vehicle">
                    <h1><?php the_title(); ?> </h1>
                    <p class="price-veiculo"><strong>R$ <?= number_format( $price, 2, ',', '.' ); ?></strong></p>
                </div>

				<?php
				$fabricante = is_array( $fabricante ) ? $fabricante[0]->name : '';
				$categoria  = is_array( $categorias ) ? $categorias[0]->name : '';
				display_details( $year, $km, $color, $doors, $fuel, $exchange, $conservation, $final_place, $motor, $post_id, $fabricante, $model, $uf, $city, $categoria ); ?>
            </div>
			<?php display_gallery(); ?>
        </div>
    </div>

    <!-- Tabs -->
    <div class="container-fluid container-tabs-form">
        <div class="row">
            <div class="col s12 m12 l6 tabs-home">
                <ul id="tabs-swipe-demo" class="tabs vehicle-details-tabs">
                    <li class="tab col s4"><a class="active link-title-tab" href="#test-swipe-1">Opcionais</a></li>
                    <li class="tab col s4"><a class="link-title-tab" href="#test-swipe-2">Observação</a></li>
                    <li class="tab col s4"><a class="link-title-tab" href="#test-swipe-3">Vendedor</a></li>
                </ul>
                <div id="test-swipe-1" class="col s12 m12 l12">
                    <div class="col s12 m12 l12">

                        <div class="row list-opcionals">
							<?php display_itens_de_serie( $post_id ) ?>
                        </div>


                    </div>
                </div>

                <div id="test-swipe-2" class="col s12 m12 l12">
                    <div class="row">
                        <div class="col s12 m12 l12 texto-info">
                            <br><br>
                            <!--  nl2br é uma funcao php que faz a quebra de linha do texto-->
							<?= nl2br( $obs ) ?>
                        </div>
                    </div>
                </div>
                <div id="test-swipe-3" class="col s12 m12 l12 texto-info">
                    <div class="row div-vendedor">
						<?php display_author_data( $post_id ); ?>
                    </div>

                </div>
            </div>

            <!--FORM ENVIO PROPOSTA--->

            <div class="col s12 m12 l6">
                <p class="title-proposta">FICOU INTERESSADO?</p>
                <br>
                <div class="row">
                    <?= do_shortcode('[contact-form-7 id="63" title="Interesse"]'); ?>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();