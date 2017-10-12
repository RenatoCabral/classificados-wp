<div class="container-fluid">
    <div class="row title_div_cars">
        <h5>Busque Rápido</h5>
    </div>
</div>

<div class="container-fluid">
    <div class="row div-form-search">
        <form class="form-search" action="<?= home_url() ?>" method="get">
            <input type="hidden" name="s" value="-1">
            <input type="hidden" name="post_type" id="post_type" value="veiculo">
            <div class="row div-item-input-search-form">

                <div class="col s12 m2 l2">
					<?php $conservacao = get_conservations(); ?>
                    <select name="conservacao" id="conservacao" class="select-searchform">
                        <option value="-1">Conservação</option>

						<?php foreach ( $conservacao as $code => $name ) { ?>
                            <option value="<?= $code; ?>" <?php selected( 'conservacao', $code ); ?> ><?= $name; ?></option>
						<?php } ?>

                    </select>
                </div>

                <div class="col s12 m2 l2">
					<?php
					global $wpdb;
					$sql_states   = "SELECT DISTINCT meta_value from $wpdb->postmeta WHERE meta_key = 'br_la_state' and meta_value <> ''";
					$valid_states = $wpdb->get_col( $sql_states );
					?>
                    <select class="select-searchform" name="estado" id="estado">
						<?php
						$tablename = $wpdb->prefix . 'br_la_state';
						echo '<option value="-1">Estado</option>';
						foreach ( $valid_states as $key => $value ) {
							$state = $wpdb->get_var( "SELECT nome from $tablename WHERE id = $value" );
							echo '<option value="' . $value . '">' . $state . '</option>';
						} ?>
                    </select>
                </div>

                <div class="col s12 m2 l2">
                    <select class="select-searchform" name="cidade" id="cidade">
                        <option value="-1">Cidade</option>
                    </select>
                </div>

                <div class=" col s12 m2 l2">

					<?php wp_dropdown_categories(
						[
							'show_option_none' => 'Categoria',
							'selected'         => - 1,
							'taxonomy'         => 'categoria',
							'name'             => 'categoria',
							'value_field'      => 'term_id',
							'orderby'          => 'name',
							'hide_empty'       => true,
							'class'            => 'select-searchform'
						]
					); ?>


                </div>

                <div class="col s12 m2 l2">
					<?php wp_dropdown_categories(
						[
							'show_option_none' => 'Fabricante',
							'selected'         => - 1,
							'taxonomy'         => 'fabricante',
							'name'             => 'fabricante',
							'value_field'      => 'term_id',
							'orderby'          => 'name',
							'hide_empty'       => true,
							'class'            => 'select-searchform'
						]
					); ?>
                </div>

            </div>

            <div class="row div-item-input-search-form">
                <div class="col s12 m2 l2">

	                <?php
	                global $wpdb;
	                $modelos = $wpdb->get_col( "SELECT DISTINCT meta_value FROM $wpdb->postmeta WHERE meta_key = 'model'" );
	                ?>

                    <select name="modelo" id="modelo" class="select-searchform">
                        <option value="-1">Modelos</option>
		                <?php foreach ( $modelos as $modelo ) { ?>
                            <option value="<?= $modelo ?>"><?= $modelo ?></option>
		                <?php } ?>

                    </select>
                </div>

                <div class=" col s12 m2 l2">
	                <?php
	                global $wpdb;
	                $anos = $wpdb->get_col( "SELECT DISTINCT meta_value FROM $wpdb->postmeta WHERE meta_key = 'year'" );
	                ?>

                    <select name="ano" id="ano" class="select-searchform">
                        <option value="-1">Ano</option>
		                <?php foreach ( $anos as $ano ) { ?>
                            <option value="<?= $ano ?>"><?= $ano ?></option>
		                <?php } ?>

                    </select>
                </div>


                <div class="col s12 m2 l2">
                    <select name="price_min" id="price_min" class="price_min select-searchform">
                        <option value="-1">Valor Mínimo</option>
                    </select>
                </div>

                <div class="col s12 m2 l2">
                    <select name="price_max" id="price_max" class="price_max select-searchform">
                        <option value="-1">Valor Máximo</option>
                    </select>
                </div>

                <div class="input-field input-searchform col s12 m2 l2">
                    <input id="code" name="code" type="text" class="validate">
                    <label for="code">Código: </label>
                </div>
            </div>

            <div class="input-field input-searchform col s12 m12 l12 btn_basic_search">
                <button class="btn waves-effect waves-light" type="submit">Buscar
                    <i class="material-icons right">search</i>
                </button>
            </div>
        </form>
    </div>
</div>