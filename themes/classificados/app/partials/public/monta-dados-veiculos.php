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
$model = get_post_meta($post_id, 'model', true);
$obs = get_post_meta($post_id, 'obs', true);


/*a função get_the_terms recupera os termos da taxonomia que foi anexada, incluida a publicação*/

$tipo = get_the_terms($post_id, 'tipo');
$fabricante = get_the_terms($post_id, 'fabricante');
$categorias= get_the_terms($post_id, 'categoria');



//itens de série
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



