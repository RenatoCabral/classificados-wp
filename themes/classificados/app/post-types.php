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
        )
    );
}