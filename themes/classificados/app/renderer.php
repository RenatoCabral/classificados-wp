<?php

function render_blog( $img_src ) {
	?>

    <div class="col s12 m12 l3">
        <div class="card medium z-depth-1 cards_news_home">
            <div class="card-image waves-effect waves-block waves-light">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?= $img_src ?>" class="responsive-img">
                </a>
            </div>
            <div class="card-content news_paragraph">
                <span class="card-title activator grey-text text-darken-4">
                    <a href="<?php the_permalink(); ?>"></a>
                    <?php the_title(); ?>
                </span>
            </div>
        </div>
    </div>

<?php
}

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

function display_details( $year, $km, $color, $doors, $fuel, $exchange, $conservation, $final_place, $motor, $post_id, $fabricante, $model, $uf, $city, $categoria ) { ?>
    <div class=" col s12 m6 l6 vehicle-details">
        <p>
            <i class="material-icons small left vehicle-details-icon">insert_invitation</i><strong>Cod:</strong> <?= $post_id ?>
        </p>
    </div>
	<?php if ( ! empty( $year ) ) { ?>
        <div class=" col s6 m6 l6 vehicle-details">
            <p>
                <i class="material-icons small left vehicle-details-icon">date_range</i><strong>Ano:</strong> <?= $year ?>
            </p>
        </div>
	<?php }
	if ( ! empty( $km ) ) { ?>
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
	<?php }
	if ( ! empty( $fuel ) ) { ?>
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
	<?php }
	if ( $fabricante != '' ) { ?>
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
	if ( ! empty( $categoria != '' ) ) { ?>
        <div class=" col s12 m6 l6 vehicle-details">
            <p>
                <i class="material-icons small left vehicle-details-icon">insert_invitation</i><strong>Categoria: </strong> <?= $categoria ?>
            </p>
        </div>
	<?php }
	if ( ! empty( $uf ) ) { ?>
        <div class=" col s12 m6 l6 vehicle-details">
            <p>
                <i class="material-icons small left vehicle-details-icon">insert_invitation</i><strong>Estado: </strong> <?= $uf ?>
            </p>
        </div>
	<?php }
	if ( ! empty( $city ) ) { ?>
        <div class=" col s12 m6 l6 vehicle-details">
            <p>
                <i class="material-icons small left vehicle-details-icon">insert_invitation</i><strong>Cidade: </strong> <?= $city ?>
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
                    <img src="<?= $img_src ?>" alt="<?php the_title(); ?>"/>
                </a>
			<?php } ?>
        </div>

        <!-- Thumb -->
		<?php if ( ! empty( $images ) ) { ?>
            <div class="slider-vehicle-details img-thumb-single slider-nav">
				<?php for ( $i = 0; $i < count( $images ); $i ++ ) {
					$url_thumb = wp_get_attachment_image_src( $images [ $i ], 'thumb-single-slide-veiculo' ); ?>
                    <img src="<?= $url_thumb[0] ?>" alt="<?php the_title(); ?>">
				<?php } ?>
            </div>
		<?php } ?>

    </div>


<?php }

function display_author_data( $post_id ) {
	$author_id  = get_post_field( 'post_author', $post_id );
	$first_name = get_user_meta( $author_id, 'first_name', true );
	$last_name  = get_user_meta( $author_id, 'last_name', true );
	$phone      = get_user_meta( $author_id, 'idx_user_phone', true );
	?>

    <div class=" col s12 m12 l12">
        <p>
            <i class="material-icons icon-vendedor">account_circle</i>
            Nome: <?= $first_name . ' ' . $last_name ?>
        </p>

        <p>
            <i class="material-icons icon-vendedor">phone</i>
            Telefone: <?= $phone ?>
        </p>

        <p>
            <i class="material-icons icon-vendedor">markunread</i>
            E-mail: <?php the_author_meta( 'user_email', $author_id ); ?>
        </p>
    </div>
	<?php
}

function render_outros_veiculos( $post_id, $term ) {

	$query = new WP_Query( [
		'post_type'      => 'veiculo',
		'post_status'    => 'publish',
		'posts_per_page' => 4,
		'post__not_in'   => [ $post_id ],
		'tax_query'      => [
			[
				'taxonomy' => 'categoria',
				'field'    => 'slug',
				'terms'    => $term
			]
		]
	] );
	if ( $query->have_posts() ) { ?>
        <div class="row title_div_cars">
            <h5>Outros Veículos</h5>
        </div>
        <div class="row">
            <div class="col s12 m12 l12">
				<?php while ( $query->have_posts() ) {
					$query->the_post();
					require 'partials/public/item-featured-vehicles.php';
				} ?>
            </div>
        </div>
		<?php
	}
}

function render_most_viewed() {
	$query = new WP_Query(
		[
			'post_type'      => 'veiculo',
			'posts_per_page' => 8,
			'orderby'        => 'random',
			'meta_key'       => 'post_views_count',
			'post_status'    => 'publish',
		]
	);
	if ( $query->have_posts() ) { ?>

        <div class="container-fluid">
            <div class="row title_div_cars">
                <h5>Veículos em Destaque</h5>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col s12 m12 l12 list-featured-vehicles">
					<?php while ( $query->have_posts() ) {
						$query->the_post();
						require 'partials/public/item-featured-vehicles.php';
					} ?>

                    <a href="<?= get_post_type_archive_link( 'veiculo' ) ?>"
                       class="waves-effect waves-light btn-large view-more-button">Ver Mais</a>
                </div>
            </div>
        </div>
	<?php }
}
