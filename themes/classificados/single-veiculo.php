<?php get_header();
get_template_part( 'basic-search');

include 'app/partials/public/monta-dados-veiculos.php';

?>

<div class="container-fluid">
    <div class="row">
        <div class="col s12 m12 l4">
            <div class=" col s12 m12 l12 description-vehicle">
                <h1><?php the_title(); ?> </h1>
                <p><strong>R$ <?= number_format($price, 2, ',', '.'); ?></strong></p>
            </div>
            <div class=" col s6 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">date_range</i><strong>Ano:</strong> <?= $year ?></p>
            </div>
            <div class=" col s6 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">av_timer</i><strong>KM:</strong> <?= $km ?></p>
            </div>
            <div class=" col s12 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">color_lens</i><strong>Cor:</strong> <?= $color?></p>
            </div>
            <div class=" col s12 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">local_gas_station</i><strong>Portas</strong> <?= $doors?></p>
            </div>
            <div class=" col s12 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">local_gas_station</i><strong>Combústivel:</strong> <?= $fuel?></p>
            </div>
            <div class=" col s12 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">directions_car</i><strong>Câmbio:</strong><?= $exchange ?></p>
            </div>
            <div class=" col s12 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">directions_car</i><strong>Conservação:</strong> <?= $conservation?></p>
            </div>
            <div class=" col s12 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">insert_invitation</i><strong>Final Placa:</strong> <?= $final_place ?></p>
            </div>
            <div class=" col s12 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">insert_invitation</i><strong>Motor:</strong> <?= $motor?></p>
            </div>

            <div class=" col s12 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">insert_invitation</i><strong>Cod:</strong> <?= $post_id?></p>
            </div>

            <div class=" col s12 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">insert_invitation</i><strong>Fabricante:</strong> <?= $fabricante[0]->name ?></p>
            </div>

            <div class=" col s12 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">insert_invitation</i><strong>Modelo</strong> <?= $model?></p>
            </div>

        </div>
        <div class="col s12 m12 l8">

            <div class="slider-vehicle-details img-slide-fancybox slider-for">
                <a href="<?php bloginfo('template_directory') ?>/img/car_01.jpg" data-fancybox="gallery">
                    <img src="<?php bloginfo('template_directory') ?>/img/car_01.jpg" class="responsive-img" alt="">
                </a>
                <a href="<?php bloginfo('template_directory') ?>/img/car_02.jpg" data-fancybox="gallery">
                    <img src="<?php bloginfo('template_directory') ?>/img/car_02.jpg" class="responsive-img" alt="">
                </a>
                <a href="<?php bloginfo('template_directory') ?>/img/car_03.jpg" data-fancybox="gallery">
                    <img src="<?php bloginfo('template_directory') ?>/img/car_03.jpg" class="responsive-img" alt="">
                </a>
                <a href="<?php bloginfo('template_directory') ?>/img/car_04.jpg" data-fancybox="gallery">
                    <img src="<?php bloginfo('template_directory') ?>/img/car_04.jpg" class="responsive-img" alt="">
                </a>
                <a href="<?php bloginfo('template_directory') ?>/img/car_05.jpeg" data-fancybox="gallery">
                    <img src="<?php bloginfo('template_directory') ?>/img/car_05.jpeg" class="responsive-img" alt="">
                </a>
            </div>
            <div class="slider-vehicle-details img-thumb-single slider-nav">
                <img src="<?php bloginfo('template_directory') ?>/img/car_01.jpg" class="responsive-img z-depth-4" alt="">
                <img src="<?php bloginfo('template_directory') ?>/img/car_02.jpg" class="responsive-img z-depth-4" alt="">
                <img src="<?php bloginfo('template_directory') ?>/img/car_03.jpg" class="responsive-img z-depth-4" alt="">
                <img src="<?php bloginfo('template_directory') ?>/img/car_04.jpg" class="responsive-img z-depth-4" alt="">
                <img src="<?php bloginfo('template_directory') ?>/img/car_05.jpeg" class="responsive-img z-depth-4" alt="">
            </div>
        </div>
    </div>
</div>

<!-- Tabs -->
<div class="container-fluid container-tabs-form">
    <div class="row">
        <div class="col s12 m12 l6 tabs-home">
            <ul id="tabs-swipe-demo" class="tabs vehicle-details-tabs">
                <li class="tab col s4"><a class="active link-title-tab" href="#test-swipe-1">Itens de Série</a></li>
                <li class="tab col s4"><a class="link-title-tab" href="#test-swipe-2">Obs. Vendedor</a></li>
                <li class="tab col s4"><a class="link-title-tab" href="#test-swipe-3">Dados do Vendedor</a></li>
            </ul>
            <div id="test-swipe-1" class="col s12 m12 l12">
                <div class="col s12 m12 l12">

                    <div class="row list-opcionals">
                        <p class="col s12 m6 l3">
                            <input  type="checkbox" id="test6" checked="checked" />
                            <label for="test6">Air-Bag</label>
                        </p>
                        <p class="col s12 m6 l3">
                            <input  type="checkbox" id="test6" checked="checked" />
                            <label for="test6">Ar Condicionado</label>
                        </p>
                        <p class="col s12 m6 l3">
                            <input type="checkbox" id="test6" checked="checked" />
                            <label for="test6">Câmera de Ré</label>
                        </p>
                        <p class="col s12 m6 l3">
                            <input type="checkbox" id="test6" checked="checked" />
                            <label for="test6">Direção Hidráulica</label>
                        </p>
                        <p class="col s12 m6 l3">
                            <input  type="checkbox" id="test6" checked="checked" />
                            <label for="test6">Farol de Neblina</label>
                        </p>
                        <p class="col s12 m6 l3">
                            <input  type="checkbox" id="test6" checked="checked" />
                            <label for="test6">Freio ABS</label>
                        </p>
                        <p class="col s12 m6 l3">
                            <input type="checkbox" id="test6" checked="checked" />
                            <label for="test6">Vidro Elétrico</label>
                        </p>
                        <p class="col s12 m6 l3">
                            <input type="checkbox" id="test6" checked="checked" />
                            <label for="test6">Retrovisor Elétrico</label>
                        </p>
                        <p class="col s12 m6 l3">
                            <input  type="checkbox" id="test6" checked="checked" />
                            <label for="test6">Som</label>
                        </p>
                        <p class="col s12 m6 l3">
                            <input  type="checkbox" id="test6" checked="checked" />
                            <label for="test6">Porta USB</label>
                        </p>
                        <p class="col s12 m6 l3">
                            <input type="checkbox" id="test6" checked="checked" />
                            <label for="test6">Rodas de liga leve</label>
                        </p>
                        <p class="col s12 m6 l3">
                            <input type="checkbox" id="test6" checked="checked" />
                            <label for="test6">Sensor de estacionamento</label>
                        </p>
                    </div>


                </div>
            </div>

            <div id="test-swipe-2" class="col s12 m12 l12">
                <div class="row">
                    <div class="col s12 m12 l12 texto-info">
                        <?= nl2br($obs)?>
                    </div>
                </div>
            </div>
            <div id="test-swipe-3" class="col s12 m12 l12 texto-info">
                <div class="row">
                    <form class="col s12 m12 l12">
                        <div class="row">
                            <div class="input-field col s12 m8 l8">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="icon_prefix" type="text" class="validate">
                                <label for="icon_prefix">Nome</label>
                            </div>
                            <div class="input-field col s12 m8 l8">
                                <i class="material-icons prefix">phone</i>
                                <input id="icon_telephone" type="tel" class="validate">
                                <label for="icon_telephone">Telefone</label>
                            </div>
                            <div class="input-field col s12 m8 l8">
                                <i class="material-icons prefix">phone_iphone</i>
                                <input id="telefone" type="tel" class="validate">
                                <label for="telefone">Celular: </label>
                            </div>
                            <div class="input-field col col s12 m8 l8">
                                <i class="material-icons prefix">markunread</i>
                                <input id="email" type="email" class="validate">
                                <label for="email">E-mail</label>
                            </div>
                            <div class="input-field col col s12 m8 l8">
                                <i class="material-icons prefix">location_city</i>
                                <input id="city" type="text" class="validate">
                                <label for="city">Cidade/Estado</label>
                            </div>
                        </div>
                    </form>
                </div>

                <!--                <p><strong>Nome:</strong> José Ribamar</p>-->
<!--                <p><strong>Email:</strong> teste@teste.com</p>-->
<!--                <p><strong>Telefone:</strong> (64)99632-2365</p>-->
<!--                <p><strong>Estado:</strong> Goiás</p>-->
<!--                <p><strong>Cidade:</strong> Jataí</p>-->
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
                    <input id="telefone" type="email" class="validate">
                    <label for="telefone">Telefone: </label>
                </div>
                <div class="input-field col s12 m12 l6">
                    <i class="material-icons prefix">phone_iphone</i>
                    <input id="telefone" type="email" class="validate">
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
                            <input class="file-path validate" type="text" placeholder="Deseja incluir outro veículo no negócio? Anexe fotos.">
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
                    <button class="btn waves-effect waves-light button-send-proposta" type="submit" name="action">Enviar Proposta
                        <i class="material-icons right">send</i>
                    </button>
                </div>
        </div>
    </div>
</div>



<?php get_footer();