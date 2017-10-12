<!--Função resposável por incluir o arquivo header.php-->
<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col s12 m12 l12">
            <div class="row title_div_cars ">
                <h5>Resultado da Busca</h5>
            </div>
        </div>

        <div class="col s12 m12 l12 info_return_search">

			<?php

			if ( ! have_posts() ) {
				echo '<h3> Resultado não encontrado</h3>';
			} else {
				while ( have_posts() ) {
					the_post();
					$img_src = get_the_post_thumbnail_url( get_the_ID(), 'thumb-news' );

					render_blog( $img_src );
				}
			}
			post_pagination(); ?>
        </div>
    </div>
</div>

<!--
SELECT * FROM `wp_posts` WHERE `post_title` LIKE '%Evento%' OR `post_content` LIKE '%Evento%'
-->

<?php get_footer();