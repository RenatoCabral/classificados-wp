<?php
// Imagens dos posts
add_theme_support( 'post-thumbnails' );

//Definindo dimensões padrão das imagens dos posts
add_image_size('thumb-news', '500','516', array( 'left', 'top' ));


add_action( 'init', 'post_type_veiculo' );

//metabox - campos pernalizados
add_action( 'add_meta_boxes', 'meta_box_veiculo');
add_action( 'save_post_veiculo', 'save_meta_veiculo' );

add_action( 'init', 'create_tipo_taxonomy' );
add_action( 'init', 'create_fabricante_taxonomy' );
add_action( 'init', 'create_categoria_taxonomy' );


add_action('admin_head','admin_scripts');
