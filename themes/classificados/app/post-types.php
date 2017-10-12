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
            'supports' => array( 'title', 'author', 'thumbnail')
        )
    );
}

function post_type_blog() {
	register_post_type( 'blog',
		array(
			'labels' => array(
				'name' => 'Blog',
				'singular_name' => 'Blog'
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array( 'title', 'editor', 'thumbnail')
		)
	);
}