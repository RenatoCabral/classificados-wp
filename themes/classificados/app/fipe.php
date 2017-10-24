<?php
add_action( 'wp_ajax_get_manufacturer', 'get_manufacturer' );
add_action( 'wp_ajax_nopriv_get_manufacturer', 'get_manufacturer' );

function get_manufacturer() {
	$url           = 'http://fipeapi.appspot.com/api/1/carros/marcas.json';
	$result_array  = file_get_contents( $url );
	$json          = json_decode( $result_array, true );
	$manufacturers = [];

	foreach ( $json as $result ) {
		$marca['id']     = $result['id'];
		$marca['name']   = $result['name'];
		$manufacturers[] = $marca;

	}
	save_manufacturer_values( $manufacturers );
	get_models( $manufacturers );
	die();
}

function save_manufacturer_values( $manufacturers ) {
	global $wpdb;
	$table_name      = $wpdb->prefix . 'fipe_manufacturer';
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE IF NOT EXISTS $table_name (
				  id int(11) NOT NULL,
				  nome varchar(60) DEFAULT NULL,
				  last_update DATETIME NOT NULL,
				  PRIMARY KEY (`id`)) $charset_collate;";

	require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
	$last_update = date( "Y-m-d H:i:s" );

	foreach ( $manufacturers as $manufacturer ) {
		$wpdb->insert( $table_name, [
			'id'          => $manufacturer['id'],
			'nome'        => $manufacturer['name'],
			'last_update' => $last_update
		] );
	}

}


//add_action( 'wp_ajax_get_models', 'get_models' );
//add_action( 'wp_ajax_nopriv_get_models', 'get_models' );
function get_models( $manufacturers ) {
	$all_models = [];
	foreach ( $manufacturers as $manufacturer ) {
		$url          = 'http://fipeapi.appspot.com/api/1/carros/veiculos/' . $manufacturer['id'] . '.json';
		$result_array = file_get_contents( $url );
		$json         = json_decode( $result_array, true );
		$models       = [];
		foreach ( $json as $result ) {
			$modelo['id']       = $result['id'];
			$modelo['name']     = $result['name'];
			$modelo['marca_id'] = $manufacturer['id'];
			$models[]           = $modelo;
		}
		$all_models[] = $models;
	}
	save_model_values( $all_models );
}

function save_model_values( $models ) {
//var_dump($models); die();
	global $wpdb;
	$table_name      = $wpdb->prefix . 'fipe_model';
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE IF NOT EXISTS $table_name (
				  id int(11) NOT NULL,
				  nome varchar(60) DEFAULT NULL,
				  marca int(7) DEFAULT NULL,
				  last_update DATETIME NOT NULL,
				  PRIMARY KEY (`id`),
				  KEY fk_Modelo_marca (`marca`)
			)
			$charset_collate";

	require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
	$last_update = date( "Y-m-d H:i:s" );

	foreach ( $models as $key => $model ) {
		foreach ( $model as $property => $value ) {
			$wpdb->insert( $table_name, [
				'id'          => $value['id'],
				'nome'        => $value['name'],
				'marca'       => $value['marca_id'],
				'last_update' => $last_update
			] );
		}

	}
}