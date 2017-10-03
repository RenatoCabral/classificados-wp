<?php

//Função que irá repetir os posts de noticias
function render_news($img_src){ ?>
    <div class="col s12 m12 l3">
        <div class="card medium z-depth-1 cards_news_home">
            <div class="card-image waves-effect waves-block waves-light">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?= $img_src ?>" class="responsive-img">
                </a>
            </div>
            <div class="card-content news_paragraph">
                        <span class="card-title activator grey-text text-darken-4">
                            <a href="<?php the_permalink(); ?>"></a><?php the_title(); ?></span>
                <p>
                    <a href="<?php the_permalink(); ?>"><?= wp_trim_words(get_the_content(), 10,'...' ); ?></a></p>
            </div>
        </div>
    </div>

<?php }

function display_itens_de_serie($post_id){


    $items = get_item_series();

    foreach ($items as $item => $value){
        ${"{$item}"} = get_post_meta($post_id, $item, true);

        if(${"{$item}"} === '1'){ ?>
            <p class="col s12 m6 l3">
                <input  type="checkbox" checked="checked"/>
                <label><?= $value ?></label>
            </p>
        <?php }
    }

}