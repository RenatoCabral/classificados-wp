<div class="container-fluid">
    <div class="row">
        <div class="col s12 m9 l9 ">
            <div class="item-slider slider-home ">
                <?php render_slide_home(); ?>
            </div>
        </div>
        <div class="col s12 m3 l3 div-anuncie-home">
            <a class="link-anuncie transition-300ms " href="<?= get_permalink( get_page_by_path( 'minha-conta' ) ) ?>">
                <img class="responsive-img anuncie-desktop" src="<?php bloginfo( 'template_directory' ) ?>/img/anuncie.jpg" alt="">
                <img class="responsive-img anuncie-mobile"  src="<?php bloginfo( 'template_directory' ) ?>/img/anuncie-mobile.jpg" alt="">
            </a>
        </div>

    </div>


</div>
