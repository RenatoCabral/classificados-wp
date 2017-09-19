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

add_action( 'init', 'post_type_veiculo' );
function post_type_veiculo() {
    register_post_type( 'veiculo',
        array(
            'labels' => array(
                'name' => 'Veículo',
                'singular_name' => 'Veículo'
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}

//metabox - campos pernalizados
add_action( 'add_meta_boxes', 'minha_meta_box');

function minha_meta_box()
{

    add_meta_box('meu-id', 'Detalhes veiculo', 'render_data_meta_box', 'veiculo', 'normal', 'high');
    add_meta_box('meu-id2', '+ Informacoes', 'render_mais_info', 'veiculo', 'normal', 'high');
    add_meta_box('meu-id3', 'Opcionais', 'render_opcionais', 'veiculo', 'normal', 'high');
}


                /*****detalhes veiculo****/
function render_data_meta_box() {
    //estudar sobre a global $post
    global $post;
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );

    $post_id = $post->ID;

    $price = get_post_meta($post_id, 'price', true);
    $year = get_post_meta($post_id, 'year', true);
    $km = get_post_meta($post_id, 'km', true);
    $color = get_post_meta($post_id, 'color', true);
    $doors = get_post_meta($post_id, 'doors', true);
    $fuel = get_post_meta($post_id, 'fuel', true);
    $exchange = get_post_meta($post_id, 'exchange', true);
    $conservation = get_post_meta($post_id, 'conservation', true);
    $final_place = get_post_meta($post_id, 'final_place', true);



    ?>

    <label>Preço</label>
    <input type="text" name="price" placeholder="Preço" value="<?= $price?>">

    <br><br>

    <label>Ano</label>
    <input type="text" name="year" placeholder="Ano" value="<?= $year?>">

    <br><br>
    <label>Km</label>
    <input type="text" name="km" placeholder="Km" value="<?= $km?>">

    <br><br>
    <label>Cor</label>
    <input type="text" name="color" placeholder="Cor" value="<?= $color?>">

    <br><br>
    <label>Quantidade de Portas</label>
    <input type="number" name="doors" value="<?= $doors?>">

    <br><br>
    <label for="meta_box_select">Combustível</label>
    <select name="fuel" id="meta_box_select">
        <option value="Selecione" <?php selected( $fuel, 'Selecione' ); ?>>Selecione</option>
        <option value="Gasolina" <?php selected( $fuel, 'Gasolina' ); ?>>Gasolina</option>
        <option value="Álcool" <?php selected( $fuel, 'Álcool' ); ?>>Álcool</option>
        <option value="Flex" <?php selected( $fuel, 'Flex' ); ?>>Flex</option>
    </select>

    <br><br>
        <label for="meta_box_select">Câmbio</label>
        <select name="exchange" id="meta_box_select">
            <option value="Selecione" <?php selected( $exchange, 'Selecione' ); ?>>Selecione</option>
            <option value="Automatico" <?php selected( $exchange, 'Automatico' ); ?>>Automatico</option>
            <option value="Manual" <?php selected( $exchange, 'Manual' ); ?>>Manual</option>
        </select>

    <br><br>
    <label for="meta_box_select">Comservação</label>
    <select name="conservation" id="meta_box_select">
        <option value="Selecione" <?php selected( $conservation, 'Selecione' ); ?>>Selecione</option>
        <option value="Novo" <?php selected( $conservation, 'Novo' ); ?>>Novo</option>
        <option value="Seminovo" <?php selected( $conservation, 'Seminovo' ); ?>>Seminovo</option>
        <option value="Usado" <?php selected( $conservation, 'Usado' ); ?>>Usado</option>
    </select>

    <br><br>
    <label>Final Placa</label>
    <input type="text" name="final_place" placeholder="Final da Placa" value="<?= $final_place?>">

<?php }

add_action( 'save_post', 'save_minha_meta_box' );
function save_minha_meta_box( $post_id )
{
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;

    if( !current_user_can( 'edit_post' ) ) return;


    update_post_meta( $post_id, 'price', $_POST['price']);
    update_post_meta( $post_id, 'doors', $_POST['doors']);
    update_post_meta( $post_id, 'exchange', $_POST['exchange']);
    update_post_meta( $post_id, 'year', $_POST['year']);
    update_post_meta( $post_id, 'km', $_POST['km']);
    update_post_meta( $post_id, 'color', $_POST['color']);
    update_post_meta( $post_id, 'fuel', $_POST['fuel']);
    update_post_meta( $post_id, 'conservation', $_POST['conservation']);
    update_post_meta( $post_id, 'final_place', $_POST['final_place']);

}

                   /********+ info************/
function render_mais_info() {
    //estudar sobre a global $post
    global $post;
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );

    $post_id = $post->ID;

    $type = get_post_meta($post_id, 'type', true);
    $motor = get_post_meta($post_id, 'motor', true);
    $model = get_post_meta($post_id, 'model', true);
    $cod_vehicle = get_post_meta($post_id, 'cod_vehicle', true);
    $fabricator = get_post_meta($post_id, 'fabricator', true);
    $other = get_post_meta($post_id, 'other', true);

    ?>

    <label>Tipo</label>
    <input type="text" name="type" placeholder="Tipo" value="<?= $type?>">

    <br><br>

    <label>Motor</label>
    <input type="text" name="motor" placeholder="Motor" value="<?= $motor?>">

    <br><br>
    <label>Modelo</label>
    <input type="text" name="model" placeholder="Modelo" value="<?= $model?>">

    <br><br>
    <label>Cód.Veículo</label>
    <input type="text" name="cod_vehicle" placeholder="Cód.Veículo" value="<?= $cod_vehicle?>">

    <br><br>
    <label>Fabricante</label>
    <input type="text" name="fabricator" placeholder="Fabricante" value="<?= $fabricator?>">

    <br><br>
    <label>Outro</label>
    <input type="text" name="other" placeholder="outro" value="<?= $other?>">

<?php }

add_action( 'save_post', 'save_mais_info' );
function save_mais_info( $post_id )
{
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;

    if( !current_user_can( 'edit_post' ) ) return;


    update_post_meta( $post_id, 'type', $_POST['type']);
    update_post_meta( $post_id, 'motor', $_POST['motor']);
    update_post_meta( $post_id, 'model', $_POST['model']);
    update_post_meta( $post_id, 'cod_vehicle', $_POST['cod_vehicle']);
    update_post_meta( $post_id, 'fabricator', $_POST['fabricator']);
    update_post_meta( $post_id, 'other', $_POST['other']);

}

                        /*******opcionais*****/

function render_opcionais() {
    //estudar sobre a global $post
    global $post;
    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );

    $post_id = $post->ID;

    $airbag = get_post_meta($post_id, 'airbag', true);
    $farol_de_milha = get_post_meta($post_id, 'farol_de_milha', true);
    $som = get_post_meta($post_id, 'som', true);
    $ar_condicionado = get_post_meta($post_id, 'ar_condicionado', true);
    $freios_abs = get_post_meta($post_id, 'freios_abs', true);
    $porta_usb = get_post_meta($post_id, 'porta_usb', true);
    $camera_de_re = get_post_meta($post_id, 'camera_de_re', true);
    $vidro_eletrico = get_post_meta($post_id, 'vidro_eletrico', true);
    $rodas_esportivas = get_post_meta($post_id, 'rodas_esportivas', true);
    $bancos_couro = get_post_meta($post_id, 'bancos_couro', true);

    ?>

    <input type="checkbox" name="airbag" value="<?= $airbag?>">
    <label>Airbag</label>

    <br><br>
    <input type="checkbox" name="farol_de_milha" value="<?= $farol_de_milha?>">
    <label>Farol de Milha</label>

    <br><br>
    <input type="checkbox" name="som" value="<?= $som?>">
    <label>Som</label>

    <br><br>
    <input type="checkbox" name="ar_condicionado" value="<?= $ar_condicionado?>">
    <label>Ar Condicionado</label>

    <br><br>
    <input type="checkbox" name="freios_abs" value="<?= $freios_abs?>">
    <label>Freios ABS</label>

    <br><br>
    <input type="checkbox" name="porta_usb" value="<?= $porta_usb?>">
    <label>Porta USB</label>

    <br><br>
    <input type="checkbox" name="camera_de_re" value="<?= $camera_de_re?>">
    <label>Câmera de ré</label>

    <br><br>
    <input type="checkbox" name="vidro_eletrico" value="<?= $vidro_eletrico?>">
    <label>Vidros Elétricos</label>

    <br><br>
    <input type="checkbox" name="rodas_esportivas" value="<?= $rodas_esportivas?>">
    <label>Rodas Esportivas</label>

    <br><br>
    <input type="checkbox" name="bancos_couro" value="<?= $bancos_couro?>">
    <label>Bancos de Couro</label>

<?php }

add_action( 'save_post', 'save_opcionais' );
function save_opcionais( $post_id )
{
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;

    if( !current_user_can( 'edit_post' ) ) return;


    update_post_meta( $post_id, 'airbag', $_POST['airbag']);
    update_post_meta( $post_id, 'farol_de_milha', $_POST['farol_de_milha']);
    update_post_meta( $post_id, 'som', $_POST['som']);
    update_post_meta( $post_id, 'ar_condicionado', $_POST['ar_condicionado']);
    update_post_meta( $post_id, 'freios_abs', $_POST['freios_abs']);
    update_post_meta( $post_id, 'porta_usb', $_POST['porta_usb']);
    update_post_meta( $post_id, 'camera_de_re', $_POST['camera_de_re']);
    update_post_meta( $post_id, 'vidro_eletrico', $_POST['vidro_eletrico']);
    update_post_meta( $post_id, 'rodas_esportivas', $_POST['rodas_esportivas']);
    update_post_meta( $post_id, 'bancos_couro', $_POST['bancos_couro']);

}







