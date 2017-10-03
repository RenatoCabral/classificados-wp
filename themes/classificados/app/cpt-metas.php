<?php


function meta_box_veiculo()
{

    add_meta_box('meu-id', 'Detalhes veiculo', 'render_data_meta_box', 'veiculo', 'normal', 'high');
    add_meta_box('meu-id3', 'Itens de Série', 'render_itens_de_serie', 'veiculo', 'normal', 'high');
    add_meta_box('meu-id4', 'Obs. Vendedor', 'render_obs_vendedor', 'veiculo', 'normal', 'high');
}


/*****detalhes veiculo****/
function render_data_meta_box() {
    //estudar sobre a global $post
    global $post;
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );

    $post_id = $post->ID;

    $price = get_post_meta($post_id, 'price', true);
    $year = get_post_meta($post_id, 'year', true);
    $km = get_post_meta($post_id, 'km', true);
    $color = get_post_meta($post_id, 'color', true);
    $doors = get_post_meta($post_id, 'doors', true);
    $fuel = get_post_meta($post_id, 'fuel', true);
    $exchange = get_post_meta($post_id, 'exchange', true);
    $conservation = get_post_meta($post_id, 'conservation', true);
    $final_place = get_post_meta($post_id, 'final_place', true);
    $motor = get_post_meta($post_id, 'motor', true);
    $model = get_post_meta($post_id, 'model', true);



    include "partials/admin/detalhes-veiculo.php";

}


/*******itens de série*****/

function render_itens_de_serie() {
    //estudar sobre a global $post
    global $post;
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );


    /************************/
    $items = get_item_series();

    foreach ($items as $item){
        ${"{$item}"} = get_post_meta($post->ID, $item, true);
    }


    require 'partials/admin/detalhes-itens-de-serie.php';

}


/*********obs.vendedor*******/

function render_obs_vendedor() {// a função render, renderizada os dados para serem exibidos
    //global $post, variavel global muito utilizada no Wordpress
    global $post;
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );

    $post_id = $post->ID;

    $obs = get_post_meta($post_id, 'obs', true);
    include 'partials/admin/obs-vendedor.php';
}



function save_meta_veiculo ($post_id){
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;

    if( !current_user_can( 'edit_post' ) ) return;



    update_post_meta( $post_id, 'price', $_POST['price']);
    update_post_meta( $post_id, 'doors', $_POST['doors']);
    update_post_meta( $post_id, 'exchange', $_POST['exchange']);
    update_post_meta( $post_id, 'year', $_POST['year']);
    update_post_meta( $post_id, 'km', $_POST['km']);
    update_post_meta( $post_id, 'color', $_POST['color']);
    update_post_meta( $post_id, 'fuel', $_POST['fuel']);
    update_post_meta( $post_id, 'conservation', $_POST['conservation']);
    update_post_meta( $post_id, 'final_place', $_POST['final_place']);


    update_post_meta( $post_id, 'motor', $_POST['motor']);
    update_post_meta( $post_id, 'model', $_POST['model']);


    $airbags = isset( $_POST[ 'airbags' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'airbags', $airbags );

    $airbag_motorista = isset( $_POST[ 'airbag_motorista' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'airbag_motorista', $airbag_motorista );

    $alarme = isset( $_POST[ 'alarme' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'alarme', $alarme );

    $ar_quente = isset( $_POST[ 'ar_quente' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'ar_quente', $ar_quente );

    $ar_condicionado = isset( $_POST[ 'ar_condicionado' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'ar_condicionado', $ar_condicionado );

    $banco_eletrico = isset( $_POST[ 'banco_eletrico' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'banco_eletrico', $banco_eletrico );

    $banco_couro = isset( $_POST[ 'banco_couro' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'banco_couro', $banco_couro );

    $banco_regulagem_altura = isset( $_POST[ 'banco_regulagem_altura' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'banco_regulagem_altura', $banco_regulagem_altura );

    $banco_dianteiro_com_aquecimento = isset( $_POST[ 'banco_dianteiro_com_aquecimento' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'banco_dianteiro_com_aquecimento', $banco_dianteiro_com_aquecimento );

    $blindagem = isset( $_POST[ 'blindagem' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'blindagem', $blindagem );

    $central_multimidia = isset( $_POST[ 'central_multimidia' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'central_multimidia', $central_multimidia );

    $computador_bordo = isset( $_POST[ 'computador_bordo' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'computador_bordo', $computador_bordo );

    $controle_tracao = isset( $_POST[ 'controle_tracao' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'controle_tracao', $controle_tracao );

    $camera_de_re = isset( $_POST[ 'camera_de_re' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'camera_de_re', $camera_de_re );

    $capota_maritima = isset( $_POST[ 'capota_maritima' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'capota_maritima', $capota_maritima );

    $cd_mp3_player = isset( $_POST[ 'cd_mp3_player' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'cd_mp3_player', $cd_mp3_player );

    $controle_de_velocidade = isset( $_POST[ 'controle_de_velocidade' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'controle_de_velocidade', $controle_de_velocidade );

    $direcao_hidraulica = isset( $_POST[ 'direcao_hidraulica' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'direcao_hidraulica', $direcao_hidraulica );

    $direcao_eletrica = isset( $_POST[ 'direcao_eletrica' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'direcao_eletrica', $direcao_eletrica );

    $desembacador_traseiro = isset( $_POST[ 'desembacador_traseiro' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'desembacador_traseiro', $desembacador_traseiro );

    $espelhos_eletricos = isset( $_POST[ 'espelhos_eletricos' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'espelhos_eletricos', $espelhos_eletricos );

    $farol_de_milha = isset( $_POST[ 'farol_de_milha' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'farol_de_milha', $farol_de_milha );

    $farol_de_milha_neblina = isset( $_POST[ 'farol_de_milha_neblina' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'farol_de_milha_neblina', $farol_de_milha_neblina );

    $farol_de_neblina = isset( $_POST[ 'farol_de_neblina' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'farol_de_neblina', $farol_de_neblina );

    $farol_de_xenonio = isset( $_POST[ 'farol_de_xenonio' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'farol_de_xenonio', $farol_de_xenonio );

    $freios_abs = isset( $_POST[ 'freios_abs' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'freios_abs', $freios_abs );

    $limpador_traseiro = isset( $_POST[ 'limpador_traseiro' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'limpador_traseiro', $limpador_traseiro );

    $piloto_automatico = isset( $_POST[ 'piloto_automatico' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'piloto_automatico', $piloto_automatico );

    $pneu_reserva = isset( $_POST[ 'pneu_reserva' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'pneu_reserva', $pneu_reserva );

    $rodas_liga_leve = isset( $_POST[ 'rodas_liga_leve' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'rodas_liga_leve', $rodas_liga_leve );

    $radio = isset( $_POST[ 'radio' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'radio', $radio );

    $radio_toca_fitas = isset( $_POST[ 'radio_toca_fitas' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'radio_toca_fitas', $radio_toca_fitas );

    $sensor_estacionamento = isset( $_POST[ 'sensor_estacionamento' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'sensor_estacionamento', $sensor_estacionamento );

    $sensor_chuva = isset( $_POST[ 'sensor_chuva' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'sensor_chuva', $sensor_chuva );

    $teto_solar = isset( $_POST[ 'teto_solar' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'teto_solar', $teto_solar );

    $tracao_4x4 = isset( $_POST[ 'tracao_4x4' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'tracao_4x4', $tracao_4x4 );

    $travas_eletricas = isset( $_POST[ 'travas_eletricas' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'travas_eletricas', $travas_eletricas );

    $vidro_eletrico = isset( $_POST[ 'vidro_eletrico' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'vidro_eletrico', $vidro_eletrico );

    $volante_regulagem_altura = isset( $_POST[ 'volante_regulagem_altura' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'volante_regulagem_altura', $volante_regulagem_altura );


    update_post_meta( $post_id, 'obs', $_POST['obs']);
}