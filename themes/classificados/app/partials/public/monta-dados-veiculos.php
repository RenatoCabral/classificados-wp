<?php
$post_id = get_the_ID();

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
$cod_vehicle = get_post_meta($post_id, 'cod_vehicle', true);
$model = get_post_meta($post_id, 'model', true);
$obs = get_post_meta($post_id, 'obs', true);



$tipo = get_the_terms($post_id, 'tipo');
$fabricante = get_the_terms($post_id, 'fabricante');
$categorias= get_the_terms($post_id, 'categoria');



//opcionais
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


//$opcionais_validos = [];
//
//if($airbag ==='1' ){
//    $opcionais_validos = array_push($opcionais_validos, $airbag);
//}
//if($farol_de_milha ==='1' ){
//    $opcionais_validos = $farol_de_milha;
//}
//
//if($som ==='1' ){
//    $opcionais_validos = $som;
//}
//if($ar_condicionado ==='1' ){
//    $opcionais_validos = $ar_condicionado;
//}
//if($freios_abs ==='1' ){
//    $opcionais_validos = $freios_abs;
//}
//if($porta_usb ==='1' ){
//    $opcionais_validos = $porta_usb;
//}
//if($camera_de_re ==='1' ){
//    $opcionais_validos = $camera_de_re;
//}
//if($vidro_eletrico ==='1' ){
//    $opcionais_validos = $vidro_eletrico;
//}
//if($rodas_esportivas ==='1' ){
//    $opcionais_validos = $rodas_esportivas;
//}
//if($bancos_couro ==='1' ){
//    $opcionais_validos = $bancos_couro;
//}
