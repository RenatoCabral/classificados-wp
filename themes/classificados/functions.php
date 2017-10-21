<?php

require 'app/actions.php';
require 'app/post-types.php';
require 'app/taxonomies.php';
require 'app/cpt-metas.php';
require 'app/renderer.php';
require 'app/functions.php';
require 'app/gallery-metabox.php';
require 'app/handler-users.php';
require 'app/mais-vistos.php';
require 'app/restrict_user_access.php';


//filtro para remover a tag span do formulario de contato
add_filter('wpcf7_form_elements', function($content) {
	$content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

	return $content;
});

//disable css contact form 7
add_filter( 'wpcf7_load_css', '__return_false' );






