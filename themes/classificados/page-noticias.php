<?php get_header();
get_template_part( 'basic-search'); ?>


    <div class="container-fluid">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="row title_div_cars ">
                    <h5>Notícias</h5>
                </div>
            </div>

            <div class="col s12 m12 l12">
                <?php
                $query = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => -1
                ]);
                if(!$query->have_posts()){
                    echo '<p> Sem notícias no momento </p>';
                }else {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $img_src = get_the_post_thumbnail_url(get_the_ID(), 'thumb-news');

                        render_news($img_src);
                    }
                }?>

                <!--paginação-->
                <div>
                    <div class="row all_news_pagination">
                        <ul class="pagination">
                            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                            <li class="active"><a href="#!">1</a></li>
                            <li class="waves-effect"><a href="#!">2</a></li>
                            <li class="waves-effect"><a href="#!">3</a></li>
                            <li class="waves-effect"><a href="#!">4</a></li>
                            <li class="waves-effect"><a href="#!">5</a></li>
                            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();