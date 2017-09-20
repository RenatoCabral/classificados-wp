<?php


function meta_box_veiculo()
{

    add_meta_box('meu-id', 'Detalhes veiculo', 'render_data_meta_box', 'veiculo', 'normal', 'high');
    add_meta_box('meu-id2', '+ Informacoes', 'render_mais_info', 'veiculo', 'normal', 'high');
    add_meta_box('meu-id3', 'Opcionais', 'render_opcionais', 'veiculo', 'normal', 'high');
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

    include "partials/admin/detalhes-veiculo.php";

}



/********+ info************/
function render_mais_info() {
    //estudar sobre a global $post
    global $post;
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );

    $post_id = $post->ID;

    $type = get_post_meta($post_id, 'type', true);
    $motor = get_post_meta($post_id, 'motor', true);
    $model = get_post_meta($post_id, 'model', true);
    $cod_vehicle = get_post_meta($post_id, 'cod_vehicle', true);
    $fabricator = get_post_meta($post_id, 'fabricator', true);
    $other = get_post_meta($post_id, 'other', true);

    include 'partials/admin/mais-info-veiculo.php';
}



/*******opcionais*****/

function render_opcionais() {
    //estudar sobre a global $post
    global $post;
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );

    $post_id = $post->ID;

    $airbag = get_post_meta($post_id, 'airbag', true);
    $farol_de_milha = get_post_meta($post_id, 'farol_de_milha', true);
    $som = get_post_meta($post_id, 'som', true);
    $ar_condicionado = get_post_meta($post_id, 'ar_condicionado', true);
    $freios_abs = get_post_meta($post_id, 'freios_abs', true);
    $porta_usb = get_post_meta($post_id, 'porta_usb', true);
    $camera_de_re = get_post_meta($post_id, 'camera_de_re', true);
    $vidro_eletrico = get_post_meta($post_id, 'vidro_eletrico', true);
    $rodas_esportivas = get_post_meta($post_id, 'rodas_esportivas', true);
    $bancos_couro = get_post_meta($post_id, 'bancos_couro', true);


    include 'partials/admin/detalhes-opcionais.php';

}



/*********obs.vendedor*******/

function render_obs_vendedor() {
    //estudar sobre a global $post
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


    update_post_meta( $post_id, 'type', $_POST['type']);
    update_post_meta( $post_id, 'motor', $_POST['motor']);
    update_post_meta( $post_id, 'model', $_POST['model']);
    update_post_meta( $post_id, 'cod_vehicle', $_POST['cod_vehicle']);
    update_post_meta( $post_id, 'fabricator', $_POST['fabricator']);
    update_post_meta( $post_id, 'other', $_POST['other']);



    /*airbag*/
    $airbag = isset( $_POST[ 'airbag' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'airbag', $airbag );


    /*farol_de_milha*/
    $farol_de_milha = isset( $_POST[ 'farol_de_milha' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'farol_de_milha', $farol_de_milha);


    /*som*/
    $som = isset( $_POST[ 'som' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'som', $som);

    /*ar_condicionado*/
    $ar_condicionado = isset( $_POST[ 'ar_condicionado' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'ar_condicionado', $ar_condicionado);

    /*freios_abs*/
    $freios_abs = isset( $_POST[ 'freios_abs' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'freios_abs', $freios_abs);

    /*porta_usb*/
    $porta_usb = isset( $_POST[ 'porta_usb' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'porta_usb', $porta_usb);


    /*camera_de_re*/
    $camera_de_re = isset( $_POST[ 'camera_de_re' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'camera_de_re', $camera_de_re);


    /*vidro_eletrico*/
    $vidro_eletrico = isset( $_POST[ 'vidro_eletrico' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'vidro_eletrico', $vidro_eletrico);


    /*rodas_esportivas*/
    $rodas_esportivas = isset( $_POST[ 'rodas_esportivas' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'rodas_esportivas', $rodas_esportivas);


    /*bancos_couro*/
    $bancos_couro = isset( $_POST[ 'bancos_couro' ] ) ? '1' : '0';
    update_post_meta( $post_id, 'bancos_couro', $bancos_couro);


    //obs do vendedor
    update_post_meta( $post_id, 'obs', $_POST['obs']);
}