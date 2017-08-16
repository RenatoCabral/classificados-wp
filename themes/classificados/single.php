<?php get_header();
get_template_part('basic-search');
?>


<div class="container-fluid">
    <div class="row">
        <div class="col s12 m12 l12 ">
            <div class="title-news-date">
                <h1><?php the_title(); ?></h1>

                    <div class="div-single-date">
                        <i class="material-icons small">today</i>
                        <p><?= get_the_date(); ?></p>
                    </div>


            </div>
            <br><br><br>

            <?php if(has_post_thumbnail()){ ?>
                <div class="thumb-single-news">
                    <?php the_post_thumbnail();?>
                </div>
           <?php } ?>

            <div class="content-single-news">

                <?php  while(have_posts()){
                    the_post();
                    the_content();
                } ?>

            </div>

        </div>
    </div>
</div>

<?php get_footer();
