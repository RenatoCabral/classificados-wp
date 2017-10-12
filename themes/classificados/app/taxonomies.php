<?php
function create_fabricante_taxonomy() {
	register_taxonomy(
		'fabricante',
		'veiculo',
		array(
			'label'        => 'Fabricante',
			'hierarchical' => true,
		)
	);
}

function create_categoria_taxonomy() {
	register_taxonomy(
		'categoria',
		'veiculo',
		array(
			'label'        => 'Categoria',
			'hierarchical' => true,
		)
	);
}
