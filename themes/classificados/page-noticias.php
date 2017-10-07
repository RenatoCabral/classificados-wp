<!--Função resposável por incluir o arquivo header.php-->
<?php get_header(); ?>

<!-- Modal Trigger -->
<a class="waves-effect waves-light btn modal-trigger btn-pesquisa-news" href="#modal1"> <i class="material-icons teal lighten-1 left" >search</i>Pesquisa</a>

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <!--                funcao responsavel por chamar o arquivo searchform.php - esse arquivo ẽ onde fica o formulario.
	essa é a funcionalidade padrao.-->
	<?php get_search_form(); ?>
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col s12 m12 l12">
                <div class="row title_div_cars ">
                    <h5>Notícias</h5>
                </div>
            </div>

            <div class="col s12 m12 l12">

                <!-- Variavel $query recebendo o objeto WP_Query, que realiza a consulta das
                informações na página ou post e as retorna. Passando que o tipo de variavel é post
                e apenas uma post por vez.-->
                <?php
                $query = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => -1
                ]);

                /*Verifica se existe post, se não tiver, é exibida a mensagem, caso, tenha a varaivel
                recebe as informações do post, inseridas no Wordpress.*/
                if(!$query->have_posts()){
                    echo '<p> Sem notícias no momento </p>';
                }else {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $img_src = get_the_post_thumbnail_url(get_the_ID(), 'thumb-news');

                    /*Função responsável por repetir os posts*/
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