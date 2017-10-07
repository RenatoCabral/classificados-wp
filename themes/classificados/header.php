<!DOCTYPE html>
<html lang="en">
<head> <meta charset="UTF-8">
    <title>ClassiCarros</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/materialize.css" media="screen,projection">


<!--    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/material-icons.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick-theme.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/jquery.fancybox.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
    <?php wp_head(); ?>
</head>
<body>
<div class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col s12 m4 l4">
                <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" class="responsive-img"></a>
            </div>
            <div class="col s12 m8 l8">
                <?php get_template_part ('menu'); ?>
            </div>
        </div>
    </div>
</div> <!--pesquisa e anuncie aqui-->
<div class="container-fluid">
<!--    <div class="row">-->
<!--        <div class="col s12 m12 l12 button_anuncie_aqui show-on-large hide-on-med-and-down">-->
<!---->
<!--            <a class="waves-effect waves-light btn btn-anuncie-aqui">-->
<!--                <i class="large material-icons left">attach_money</i>Anuncie Aqui-->
<!--            </a>-->
<!---->
<!--        </div>-->
<!---->
<!--        <div class="col s12 m12 l12 button_anuncie_aqui show-on-small show-on-medium hide-on-large-only">-->
<!---->
<!--            <a class="waves-effect waves-light btn btn-anuncie-aqui">-->
<!--                <i class="large material-icons left">attach_money</i>Anuncie Aqui-->
<!--            </a>-->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->
</div>

<?php
if ( class_exists( 'WP_Flash_Messages' ) )
	WP_Flash_Messages::show();
?>