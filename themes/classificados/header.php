<!DOCTYPE html>
<html lang="en">
<head> <meta charset="UTF-8">
    <title>Sistema com Materialize</title>
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
    <div class="row">
        <div class="col s12 m12 l6 offset-l9 button_anuncie_aqui show-on-large hide-on-med-and-down">

            <!-- Modal Trigger -->
            <a class="waves-effect waves-light btn modal-trigger" href="#modal1"> <i class="material-icons teal lighten-1 left" >search</i>Pesquisa</a>

            <!-- Modal Structure -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis et harum illum nesciunt praesentium, repudiandae sed tempora. Animi cumque delectus eius ipsum laboriosam qui quidem tempore tenetur veniam, vitae! Voluptatum.</p>
                    <input type="text" placeholder="Digite aqui sua busca">
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Buscar</a>
                </div>
            </div>

            <a class="waves-effect waves-light btn">
                <i class="large material-icons left">attach_money</i>Anuncie Aqui
            </a>
        </div>

        <div class="col s12 m2 l2 button_anuncie_aqui show-on-small show-on-medium hide-on-large-only grey lighten-2">
            <a class="waves-effect waves-light btn">Anuncie Aqui</a>
        </div>
    </div>
</div>

