<?php
// Imagens dos posts
add_theme_support( 'post-thumbnails' );

//Definindo dimensões padrão das imagens dos posts
add_image_size('slide-home', '938','404', true);
add_image_size('thumb-news', '500','516', array( 'left', 'top' ));
add_image_size('full-single-slide-veiculo', '618','380', array( 'left', 'top' ));
add_image_size('thumb-single-slide-veiculo', '200','200', array( 'left', 'top' ));


add_action( 'init', 'post_type_veiculo' );
add_action( 'init', 'post_type_blog' );
add_action( 'init', 'post_type_slides' );

//metabox - campos pernalizados
add_action( 'add_meta_boxes', 'meta_box_veiculo');
add_action( 'save_post_veiculo', 'save_meta_veiculo' );

add_action( 'add_meta_boxes', 'add_slide_details_to_admin' );
add_action( 'save_post_sliders', 'update_slide_details' );

add_action( 'init', 'create_categoria_taxonomy' );

add_action('admin_head','admin_scripts');

add_action( 'wp_head', 'define_ajaxurl' );

add_action( 'wp_ajax_nopriv_get_valid_cities_by_state_id', 'get_valid_cities_by_state_id' );
add_action( 'wp_ajax_get_valid_cities_by_state_id', 'get_valid_cities_by_state_id' );

add_action( 'wp_ajax_get_models_by_manufacturer', 'get_models_by_manufacturer' );
add_action( 'wp_ajax_nopriv_get_models_by_manufacturer', 'get_models_by_manufacturer' );

add_action( 'wp_ajax_get_years_by_model', 'get_years_by_model' );
add_action( 'wp_ajax_nopriv_get_years_by_model', 'get_years_by_model' );

