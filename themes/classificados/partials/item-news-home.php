<?php
//
//$posts_slides = new WP_Query(array(
//        'category-name' => 'noticias',
//        'posts_per_page' => 8
//    ));
//
//while ($posts_slides->have_posts()) : $posts_slides->the_post();
//?>
    <!---->
    <!--<div class="col s12 m9 l9">-->
    <!--    <h5 class="title_news">Notícias</h5>-->
    <!--<!--    --><?php ////for ($i =0; $i <= 7; $i++ ) { ?>
    <!--        <div class="col s12 m12 l3">-->
    <!--            <div class="card medium z-depth-1 cards_news_home">-->
    <!--                <div class="card-image waves-effect waves-block waves-light">-->
    <!--                    <a href="#"><img src="--><?php //bloginfo('template_directory') ?><!--/img/sample-1.jpg" class="responsive-img"></a>-->
    <!--                </div>-->
    <!--                <div class="card-content news_paragraph">-->
    <!--                    <span class="card-title activator grey-text text-darken-4"><a href="#"></a>Card Title</span>-->
    <!--                    <p>-->
    <!--                        <a href="--><?php //bloginfo('template_directory') ?><!--/single-news.php"> In sem justo, commodo ut, suscipit at, pharetra vitae, orci-->
    <!--                            In sem justo, commodo ut, suscipit at.</a></p>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!---->
    <!--<!--    --><?php ////} ?>
    <!--    <div class="box-view-more-button-news-home">-->
    <!--        <a href="--><?php //bloginfo('template_directory') ?><!--/news.php" class="waves-effect waves-light btn-large">Ver Mais</a>-->
    <!--    </div>-->
    <!---->
    <!--</div>-->
    <!---->
<?php //endwhile; wp_reset_postdata(); ?>

    <!-- Backup acima-->
<?php

$query = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 8
]);

if($query->have_posts()){ ?>
    <div class="col s12 m9 l9">
        <h5 class="title_news">Notícias</h5>
        <?php while ($query->have_posts()) {
            $query->the_post();
            $img_src = get_the_post_thumbnail_url(get_the_ID(), 'thumb-news');

                render_news($img_src);

        } ?>
        <div class="box-view-more-button-news-home">
            <a href="<?= get_post_type_archive_link('post'); ?>" class="waves-effect waves-light btn-large">Ver Mais</a>
        </div>
    </div>
<?php }else{
    echo '<h3 style="text-align: center">Sem Notícias no momento</h3>';
}
