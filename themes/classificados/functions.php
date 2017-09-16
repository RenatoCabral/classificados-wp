<?php

// Imagens dos posts
add_theme_support( 'post-thumbnails' );

//Definindo dimensões padrão das imagens dos posts
add_image_size('thumb-news', '688','516', true);

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

add_action( 'init', 'post_type_artigo' );
function post_type_artigo() {
    register_post_type( 'bl_artigo',
        array(
            'labels' => array(
                'name' => 'Artigos',
                'singular_name' => 'Artigo'
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}



//metabox - campos pernalizados
add_action( 'add_meta_boxes', 'minha_meta_box' );

function minha_meta_box()
{

    add_meta_box('meu-id', 'Meu primeiro Meta Box', 'render_data_meta_box', 'bl_artigo', 'normal', 'high');
}

function render_data_meta_box() {
    //estudar sobre a global $post
    global $post;
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );

    $post_id = $post->ID;

    $price = get_post_meta($post_id, 'price', true);
    $doors = get_post_meta($post_id, 'doors', true);


    ?>

    <label>Preço</label>
    <input type="text" name="price" placeholder="100.000,00" value="<?= $price?>">

    <br><br>
    <label>Quantidade de Portas</label>
    <input type="number" name="doors" value="<?= $doors?>">

<?php }


add_action( 'save_post', 'save_minha_meta_box' );
function save_minha_meta_box( $post_id )
{
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;

    if( !current_user_can( 'edit_post' ) ) return;


    update_post_meta( $post_id, 'price', $_POST['price']);
    update_post_meta( $post_id, 'doors', $_POST['doors']);

}





