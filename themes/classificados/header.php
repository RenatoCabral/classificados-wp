<!DOCTYPE html>
<html lang="en">
<head> <meta charset="UTF-8">
    <title>
		<?php
		if ( is_home() ) {
			echo "ClassiCarros";
		} else {
			wp_title( '|', true, 'right' );
			bloginfo( 'name' );
		}
		?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/materialize.css" media="screen,projection">

    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/material-icons.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick-theme.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/select2.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/classicarros.css">
    <?php wp_head(); ?>
</head>
<body>
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col s12 m4 l4">
                <a href="<?= home_url(); ?>">
                    <img class="logo-header" src="<?php bloginfo('template_directory') ?>/img/logo.png"></a>
            </div>
            <div class="col s12 m8 l8">
                <?php get_template_part ('menu'); ?>
            </div>
        </div>
    </div>
</div>

<?php
if ( class_exists( 'WP_Flash_Messages' ) )
	WP_Flash_Messages::show();
?>