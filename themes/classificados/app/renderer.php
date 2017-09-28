<?php

//Função que irá repetir os posts de noticias
function render_news($img_src){ ?>
    <div class="col s12 m12 l3">
        <div class="card medium z-depth-1 cards_news_home">
            <div class="card-image waves-effect waves-block waves-light">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?= $img_src ?>" class="responsive-img">
                </a>
            </div>
            <div class="card-content news_paragraph">
                        <span class="card-title activator grey-text text-darken-4">
                            <a href="<?php the_permalink(); ?>"></a><?php the_title(); ?></span>
                <p>
                    <a href="<?php the_permalink(); ?>"><?= wp_trim_words(get_the_content(), 10,'...' ); ?></a></p>
            </div>
        </div>
    </div>

<?php }

function display_itens_de_serie($post_id){


    $airbags = get_post_meta($post_id, 'airbags', true);
    $airbag_motorista = get_post_meta($post_id, 'airbag_motorista', true);
    $alarme = get_post_meta($post_id, 'alarme', true);
    $ar_quente = get_post_meta($post_id, 'ar_quente', true);
    $ar_condicionado = get_post_meta($post_id, 'ar_condicionado', true);
    $banco_eletrico = get_post_meta($post_id, 'banco_eletrico', true);
    $banco_couro = get_post_meta($post_id, 'banco_couro', true);
    $blindagem = get_post_meta($post_id, 'blindagem', true);
    $cd_player_mp3 = get_post_meta($post_id, 'cd_player_mp3', true);
    $central_multimidia = get_post_meta($post_id, 'central_multimidia', true);
    $computador_bordo = get_post_meta($post_id, 'computador_bordo', true);
    $controle_tracao = get_post_meta($post_id, 'controle_tracao', true);
    $direcao_hidraulica = get_post_meta($post_id, 'direcao_hidraulica', true);
    $direcao_eletrica = get_post_meta($post_id, 'direcao_eletrica', true);
    $desembacador_traseiro = get_post_meta($post_id, 'desembacador_traseiro', true);
    $farol_de_milha = get_post_meta($post_id, 'farol_de_milha', true);
    $som = get_post_meta($post_id, 'som', true);
    $freios_abs = get_post_meta($post_id, 'freios_abs', true);
    $porta_usb = get_post_meta($post_id, 'porta_usb', true);
    $camera_de_re = get_post_meta($post_id, 'camera_de_re', true);
    $vidro_eletrico = get_post_meta($post_id, 'vidro_eletrico', true);
    $rodas_esportivas = get_post_meta($post_id, 'rodas_esportivas', true);


    $options = [
        'Airbag(Motorista)'      => $airbag_motorista,
        'Airbags'                => $airbags,
        'Alarme'                 => $alarme,
        'Ar Quente'              => $ar_quente,
        'Ar Condicionado'        => $ar_condicionado,
        'Banco Elétrico'         => $banco_eletrico,
        'Bancos de Couro'        => $banco_couro,
        'Blindagem'              => $blindagem,
        'CD Player Mp3'          => $cd_player_mp3,
        'Central Multimídia'     => $central_multimidia,
        'Computador de Bordo'    => $computador_bordo,
        'Controle de Tração'     => $controle_tracao,
        'Direção Hidráulica'     => $direcao_hidraulica,
        'Direção Elétrica'       => $direcao_eletrica,
        'Desembaçador Traseiro'  => $desembacador_traseiro,
        'Farol de Milha'         => $farol_de_milha,
        'Som'                    => $som,


    ];


//    var_dump($options); die();
    foreach ($options as $option => $value){
        if($value === '1'){ ?>
            <p class="col s12 m6 l3">
                <input  type="checkbox" checked="checked" />
                <label><?= $option ?></label>
            </p>
        <?php }
    }


}