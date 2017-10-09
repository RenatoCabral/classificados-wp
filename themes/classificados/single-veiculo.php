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
                    <div class="input-field col s12 m12 l6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="nome" type="text" class="validate">
                        <label for="nome">Nome Completo: </label>
                    </div>
                    <div class="input-field col s12 m12 l6">
                        <i class="material-icons prefix">markunread</i>
                        <input id="email" type="email" class="validate">
                        <label for="email">E-mail: </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m12 l6">
                        <i class="material-icons prefix">phone</i>
                        <input id="telefone" type="text" class="validate phone">
                        <label for="telefone">Telefone: </label>
                    </div>
                    <div class="input-field col s12 m12 l6">
                        <i class="material-icons prefix">phone_iphone</i>
                        <input id="telefone" type="text" class="validate phone">
                        <label for="telefone">Celular: </label>
                    </div>
                </div>
                <div class="row">
                    <form action="#" class="col s12 m12 l12">
                        <div class="file-field input-field col s12 m12 l12">
                            <div class="btn">
                                <span>Arquivo</span>
                                <input type="file" multiple>
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text"
                                       placeholder="Deseja incluir outro veículo no negócio? Anexe fotos.">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <form class="col s12">
                        <div class="row">
                            <div class="input-field col s12 m12 l12">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea id="textarea1" class="materialize-textarea"></textarea>
                                <label for="textarea1">Detalhe sua Proposta</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="input-field col s12 m12 l12 btn_basic_search">
                    <button class="btn waves-effect waves-light button-send-proposta" type="submit" name="action">Enviar
                        Proposta
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </div>
    </div>


<?php get_footer();