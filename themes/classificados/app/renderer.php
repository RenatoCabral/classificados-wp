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
    $banco_regulagem_altura = get_post_meta($post_id, 'banco_regulagem_altura', true);
    $banco_dianteiro_com_aquecimento = get_post_meta($post_id, 'banco_dianteiro_com_aquecimento', true);
    $blindagem = get_post_meta($post_id, 'blindagem', true);
    $cd_player_mp3 = get_post_meta($post_id, 'cd_player_mp3', true);
    $central_multimidia = get_post_meta($post_id, 'central_multimidia', true);
    $computador_bordo = get_post_meta($post_id, 'computador_bordo', true);
    $controle_tracao = get_post_meta($post_id, 'controle_tracao', true);
    $camera_de_re = get_post_meta($post_id, 'camera_de_re', true);
    $capota_maritima = get_post_meta($post_id, 'capota_maritima', true);
    $cd_mp3_player = get_post_meta($post_id, 'cd_mp3_player', true);
    $controle_de_velocidade = get_post_meta($post_id, 'controle_de_velocidade', true);
    $direcao_hidraulica = get_post_meta($post_id, 'direcao_hidraulica', true);
    $direcao_eletrica = get_post_meta($post_id, 'direcao_eletrica', true);
    $desembacador_traseiro = get_post_meta($post_id, 'desembacador_traseiro', true);
    $espelhos_eletricos = get_post_meta($post_id, 'espelhos_eletricos', true);
    $farol_de_milha = get_post_meta($post_id, 'farol_de_milha', true);
    $farol_de_milha_neblina = get_post_meta($post_id, 'farol_de_milha_neblina', true);
    $farol_de_neblina = get_post_meta($post_id, 'farol_de_neblina', true);
    $farol_de_xenonio = get_post_meta($post_id, 'farol_de_xenonio', true);
    $freios_abs = get_post_meta($post_id, 'freios_abs', true);
    $insulfilme = get_post_meta($post_id, 'insulfilme', true);
    $limpador_traseiro = get_post_meta($post_id, 'limpador_traseiro', true);
    $piloto_automatico = get_post_meta($post_id, 'piloto_automatico', true);
    $pneu_reserva = get_post_meta($post_id, 'pneu_reserva', true);
    $rodas_liga_leve = get_post_meta($post_id, 'rodas_liga_leve', true);
    $radio = get_post_meta($post_id, 'radio', true);
    $radio_toca_fitas = get_post_meta($post_id, 'radio_toca_fitas', true);
    $sensor_estacionamento = get_post_meta($post_id, 'sensor_estacionamento', true);
    $sensor_chuva = get_post_meta($post_id, 'sensor_chuva', true);
    $teto_solar = get_post_meta($post_id, 'teto_solar', true);
    $tracao_4x4 = get_post_meta($post_id, 'tracao_4x4', true);
    $travas_eletricas = get_post_meta($post_id, 'travas_eletricas', true);
    $vidro_eletrico = get_post_meta($post_id, 'vidro_eletrico', true);
    $volante_regulagem_altura = get_post_meta($post_id, 'volante_regulagem_altura', true);



    $options = [
        'Airbag(Motorista)'      => $airbag_motorista,
        'Airbags'                => $airbags,
        'Alarme'                 => $alarme,
        'Ar Quente'              => $ar_quente,
        'Ar Condicionado'        => $ar_condicionado,
        'Banco Elétrico'         => $banco_eletrico,
        'Bancos de Couro'        => $banco_couro,
        'Bancos com regulagem de altura'        => $banco_regulagem_altura,
        'Bancos dianteiros com aquecimento'        => $banco_dianteiro_com_aquecimento,
        'Blindagem'              => $blindagem,
        'Câmera de ré'              => $camera_de_re,
        'Capota maritima'              => $capota_maritima,
        'CD Mp3 Player'          => $cd_mp3_player,
        'Central Multimídia'     => $central_multimidia,
        'Computador de Bordo'    => $computador_bordo,
        'Controle de Tração'     => $controle_tracao,
        'Controle de Velocidade'     => $controle_de_velocidade,
        'Direção Hidráulica'     => $direcao_hidraulica,
        'Direção Elétrica'       => $direcao_eletrica,
        'Desembaçador Traseiro'  => $desembacador_traseiro,
        'Espelhos Elétricos'     => $espelhos_eletricos,
        'Farol de Milha'         => $farol_de_milha,
        'Farol de Milha e Neblina'=> $farol_de_milha_neblina,
        'Farol de Neblina'       => $farol_de_neblina,
        'Farol de Xenônio'       => $farol_de_xenonio,
        'Freios ABS'             => $freios_abs,
        'Insulfilme'             => $insulfilme,
        'Limpador traseiro'             => $limpador_traseiro,
        'Piloto automático'             => $piloto_automatico,
        'Pneu reserva'             => $pneu_reserva,
        'Rodas de liga leve'             => $rodas_liga_leve,
        'Radio'             => $radio,
        'Radio e toca fitas'             => $radio_toca_fitas,
        'Sensor estacionamento'             => $sensor_estacionamento,
        'Sensor chuva'             => $sensor_chuva,
        'Teto solar'             => $teto_solar,
        '$tracao_4x4'             => $tracao_4x4,
        'Travas elétricas'             => $travas_eletricas,
        'Vidro elétrico'             => $vidro_eletrico,
        'Vidro elétrico'             => $vidro_eletrico,
        'Volante com regulagem de altura'             => $volante_regulagem_altura,


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