<?php get_header();?>

<div class="container-fluid">
    <div class="row">
        <div class="col s12 m12 l12 div-pag">
            <div class="col s12 m12 l6 doubts-title">
                <div class="row ">
                    <!--Pegar o título da página-->
                    <h1><?php the_title(); ?></h1>

                    <!--Esse trecho de código verifica se existe post, caso tenha
                    irá exibir o post e o conteudo-->
                    <?php if(have_posts()){
                        while (have_posts()){
                            the_post();
                            the_content();
                        }
                        wp_reset_postdata();

                    }?>

                </div>
            </div>
            <?php
            $query_pages = new WP_Query([ /*variavel $query_pages recebe um novo objeto WP_Query, responsável por mapear uma página ou post*/
                'post_type' => 'page', /*declarado o tipo do post, que é uma página*/
                'post_parent__in' => [get_the_ID()],/*procurar a página pai no ID que foi passado na função get_the_ID*/
                'post_status' => 'publish',/*exibir post que estejam publicados*/
                'orderby' => 'menu_order', /*realizar ordenação ASC*/
                'order' => 'ASC'
            ]);/*Se exisitirem post, entra no if abaixo, para montar o HTML*/

            if($query_pages->have_posts()) { ?><!--variavel $query_pages recebe os posts-->
                <div class="col s12 m12 l8">
                    <ul class="collapsible" data-collapsible="accordion">
                        <?php while($query_pages->have_posts()){ /*laço que irá exibir todos os posts(páginas filhas e seus conteúdos abaixo*/
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
