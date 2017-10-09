<?php

//Função que irá repetir os posts de noticias
function render_news( $img_src ) { ?>
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
                    <a href="<?php the_permalink(); ?>"><?= wp_trim_words( get_the_content(), 10, '...' ); ?></a></p>
            </div>
        </div>
    </div>

<?php }

function display_itens_de_serie( $post_id ) {


	$items = get_item_series();

	foreach ( $items as $item => $value ) {
		${"{$item}"} = get_post_meta( $post_id, $item, true );

		if ( ${"{$item}"} === '1' ) { ?>
            <div class="col s12 m6 l4 div-item-serie">
                <input type="checkbox" checked="checked"/>
                <label><?= $value ?></label>
            </div>
		<?php }
	}

}

function display_details( $year, $km, $color, $doors, $fuel, $exchange, $conservation, $final_place, $motor, $post_id, $fabricante, $model ) { ?>
	<?php if ( ! empty( $year ) ) { ?>
        <div class=" col s6 m6 l6 vehicle-details">
            <p>
                <i class="material-icons small left vehicle-details-icon">date_range</i><strong>Ano:</strong> <?= $year ?>
            </p>
        </div>

		<?php if ( ! empty( $km ) ) { ?>
            <div class=" col s6 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">av_timer</i><strong>KM:</strong> <?= $km ?>
                </p>
            </div>
		<?php }
		if ( ! empty( $color ) ) { ?>
            <div class=" col s6 m6 l6 vehicle-details">
                <p>
                    <i class="material-icons small left vehicle-details-icon">color_lens</i><strong>Cor:</strong> <?= $color ?>
                </p>
            </div>
		<?php }
		if ( ! empty( $doors ) ) { ?>
            <div class=" col s6 m6 l6 vehicle-details">
                <p>
                    <i class="material-icons small left vehicle-details-icon">local_gas_station</i><strong>Portas: </strong> <?= $doors ?>
                </p>
            </div>
		<?php } ?>

		<?php if ( ! empty( $fuel ) ) { ?>
            <div class=" col s6 m6 l6 vehicle-details">
                <p>
                    <i class="material-icons small left vehicle-details-icon">local_gas_station</i><strong>Combústivel:</strong> <?= $fuel ?>
                </p>
            </div>
		<?php }
		if ( ! empty( $exchange ) ) { ?>
            <div class=" col s6 m6 l6 vehicle-details">
                <p>
                    <i class="material-icons small left vehicle-details-icon">directions_car</i><strong>Câmbio: </strong><?= $exchange ?>
                </p>
            </div>
		<?php }
		if ( ! empty( $conservation ) ) { ?>
            <div class=" col s6 m6 l6 vehicle-details">
                <p>
                    <i class="material-icons small left vehicle-details-icon">directions_car</i><strong>Conservação:</strong> <?= $conservation ?>
                </p>
            </div>
		<?php }
		if ( ! empty( $final_place ) ) { ?>
            <div class=" col s6 m6 l6 vehicle-details">
                <p><i class="material-icons small left vehicle-details-icon">insert_invitation</i><strong>Final
                        Placa:</strong> <?= $final_place ?></p>
            </div>
		<?php }
		if ( ! empty( $motor ) ) { ?>
            <div class=" col s6 m6 l6 vehicle-details">
                <p>
                    <i class="material-icons small left vehicle-details-icon">insert_invitation</i><strong>Motor:</strong> <?= $motor ?>
                </p>
            </div>
		<?php } ?>
        <div class=" col s12 m6 l6 vehicle-details">
            <p>
                <i class="material-icons small left vehicle-details-icon">insert_invitation</i><strong>Cod:</strong> <?= $post_id ?>
            </p>
        </div>
	<?php }
	if ( $fabricante != ''  ) { ?>
        <div class=" col s12 m6 l6 vehicle-details">
            <p>
                <i class="material-icons small left vehicle-details-icon">insert_invitation</i><strong>Fabricante:</strong> <?= $fabricante ?>
            </p>
        </div>
	<?php }
	if ( ! empty( $model ) ) { ?>
        <div class=" col s12 m6 l6 vehicle-details">
            <p>
                <i class="material-icons small left vehicle-details-icon">insert_invitation</i><strong>Modelo: </strong> <?= $model ?>
            </p>
        </div>
	<?php }
}

function display_gallery() { ?>

    <div class="col s12 m6 l6">
		<?php
		$thumb_id  = get_post_thumbnail_id( get_the_ID() );
		$thumb_url = wp_get_attachment_image_src( $thumb_id, 'full-single-slide-veiculo' );
		$img_src   = has_post_thumbnail() ? $thumb_url[0] : get_bloginfo( 'template_directory' ) . "/images/no-image-slide-single";
		$images    = get_post_meta( get_the_ID(), 'vdw_gallery_id', true );
		?>

        <!-- Full-->
        <div class="slider-vehicle-details img-slide-fancybox slider-for">
			<?php if ( ! empty( $images ) ) {
				for ( $i = 0; $i < count( $images ); $i ++ ) {
					$url_full = wp_get_attachment_image_src( $images [ $i ], 'full-single-slide-veiculo' ); ?>
                    <a href="<?= $url_full[0] ?>" data-fancybox="gallery">
                        <img src="<?= $url_full[0] ?>" class="img-slide-full" alt="<?php the_title(); ?>">
                    </a>
				<?php }
			} else { ?>
                <a href="<?= $img_src ?>" data-fancybox="gallery">
                    <img src="<?= $img_src ?>" class="" alt="<?php the_title(); ?>"/>
                </a>
			<?php } ?>
        </div>

        <!-- Thumb -->
		<?php if ( ! empty( $images ) ) { ?>
            <div class="slider-vehicle-details img-thumb-single slider-nav">
				<?php for ( $i = 0; $i < count( $images ); $i ++ ) {
					$url_thumb = wp_get_attachment_image_src( $images [ $i ], 'thumb-single-slide-veiculo' ); ?>
                    <img src="<?= $url_thumb[0] ?>" class="" alt="<?php the_title(); ?>">
				<?php } ?>
            </div>
		<?php } ?>

    </div>


<?php }