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

function get_models( $manufacturers ) {
	$models = [];
	foreach ( $manufacturers as $manufacturer ) {
		$url          = 'http://fipeapi.appspot.com/api/1/carros/veiculos/' . $manufacturer['id'] . '.json';
		$result_array = file_get_contents( $url );
		$json         = json_decode( $result_array, true );

		foreach ( $json as $result ) {
			$modelo['id']       = $result['id'];
			$modelo['name']     = $result['name'];
			$modelo['marca'] = $manufacturer['id'];
			$models[]           = $modelo;
		}

	}
	save_model_values( $models );
}

function save_model_values( $models ) {

	global $wpdb;
	$table_name      = $wpdb->prefix . 'fipe_model';
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE IF NOT EXISTS $table_name (
				  id int(11) NOT NULL,
				  nome varchar(60) DEFAULT NULL,
				  marca int(7) DEFAULT NULL,
				  last_update DATETIME NOT NULL,
				  PRIMARY KEY (id),
				  KEY fk_Modelo_marca (marca)
			)
			$charset_collate";

	require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
	$last_update = date( "Y-m-d H:i:s" );

	foreach ( $models as $key => $value ) {
//		var_dump('Nome : '.$value['name']);
		var_dump( 'Id: ' . $value['id'] );
//		var_dump('marca id : '.$value['marca']);

		if(has_min_time_passed($last_update, $value['id'], $table_name)) {
			$insert_data = [ 'id'          => $value['id'],
			                      'nome'        => $value['name'],
			                      'marca'   => $value['marca'],
			                      'last_update' => $last_update
			];
			$result      = insert_on_duplicate( $table_name, $insert_data );
		}
//		$wpdb->insert( $table_name, [
//			'id'          => $value['id'],
//			'nome'        => $value['name'],
//			'marca'    => $value['marca'],
//			'last_update' => $last_update
//		] );


	}
}

function has_min_time_passed($last_update, $model_id ,$table_name){
	global $wpdb;
	$stored_last_update = $wpdb->get_var('SELECT last_update FROM '.$table_name.' WHERE id="'.$model_id.'"');
	if(isset($stored_last_update) && !empty($stored_last_update)){
		$last_update = strtotime($last_update);
		$stored_last_update = strtotime($stored_last_update);
		$diff = ($last_update - $stored_last_update)/60;
		if($diff > 15)
			return true;
		else
			return false;
	}
	return true;
}

function insert_on_duplicate($table, $data) {
	global $wpdb;
	$fields = array_keys($data);
	$formatted_fields = array();
	foreach ( $fields as $field ) {
		$form = '%s';
		$formatted_fields[] = $form;
	}
	$sql = "INSERT INTO `$table` (`" . implode( '`,`', $fields ) . "`) VALUES ('" . implode( "','", $formatted_fields ) . "')";
	$sql .= " ON DUPLICATE KEY UPDATE ";

	$dup = array();
	foreach($fields as $field) {
		$dup[] = "`" . $field . "` = VALUES(`" . $field . "`)";
	}
	$sql .= implode(',', $dup);
	return $wpdb->query( $wpdb->prepare( $sql, $data) );
}