<?php get_header();?>

<div class="container-fluid">
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="col s12 m12 l6 doubts-title">
                <div class="row ">
                    <h1><?php the_title(); ?></h1>

                    <?php if(have_posts()){
                        while (have_posts()){
                            the_post();
                            the_content();
                        }
                        wp_reset_postdata();
                        wp_reset_query();
                    }?>

                </div>
            </div>
            <?php
            $query_pages = new WP_Query([
                'post_type' => 'page',
                'post_parent__in' => [get_the_ID()],
                'post_status' => 'publish',
                'orderby' => 'menu_order',
                'order' => 'ASC'
            ]);

            if($query_pages->have_posts()) { ?>
                <div class="col s12 m12 l8">
                    <ul class="collapsible" data-collapsible="accordion">
                        <?php while($query_pages->have_posts()){
                            $query_pages->the_post();?>
                            <li>
                                <div class="collapsible-header"><?php the_title() ?></div>
                                <div class="collapsible-body"><span><?php the_content() ?></span></div>
                            </li>
                        <?php } wp_reset_postdata(); ?>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
