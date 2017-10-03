<?php

function post_type_veiculo() {
    register_post_type( 'veiculo',
        array(
            'labels' => array(
                'name' => 'Veículo',
                'singular_name' => 'Veículo'
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail')
        )
    );
}

//function post_type_moto() {
//    register_post_type( 'moto',
//        array(
//            'labels' => array(
//                'name' => 'Moto',
//                'singular_name' => 'Moto'
//            ),
//            'public' => true,
//            'has_archive' => true,
//            'supports' => array( 'title', 'editor', 'author', 'thumbnail')
//        )
//    );
//}