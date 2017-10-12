<div class="container-fluid">
    <div class="row title_div_cars">
        <h5>Busque Rápido</h5>
    </div>
</div>

<div class="container-fluid">
    <div class="row div-form-search">
        <form class="form-search" action="<?= home_url() ?>" method="get">
            <div class="row div-item-input-search-form">
                <div class="col s12 m2 l2">
					<?php
					global $wpdb;
					$sql_states   = "SELECT DISTINCT meta_value from $wpdb->postmeta WHERE meta_key = 'br_la_state' and meta_value <> ''";
					$valid_states = $wpdb->get_col( $sql_states );
					?>
                    <select class="select-searchform" name="br_la_state" id="estado">
						<?php
						$tablename = $wpdb->prefix . 'br_la_state';
						echo '<option value="">Estado</option>';
						foreach ( $valid_states as $key => $value ) {
							$state = $wpdb->get_var( "SELECT nome from $tablename WHERE id = $value" );
							echo '<option value="' . $value . '">' . $state . '</option>';
						} ?>
                    </select>
                </div>

                <div class="col s12 m2 l2">
                    <select class="select-searchform" name="br_la_city" id="cidade">
                        <option value="">Cidade</option>
                    </select>
                </div>


                <div class="col s12 m2 l2">
                    <select class="select-searchform">
                        <option value="" selected>Conservação</option>
                        <option value="1">Novo</option>

                    </select>
                </div>

                <div class=" col s12 m2 l2">
                    <select class="select-searchform">
                        <option value="" selected>Categoria</option>
                    </select>
                </div>

                <div class="col s12 m2 l2">
                    <select class="select-searchform">
                        <option value="" selected>Fabricante</option>
                        <option value="1">Chevrolet</option>
                    </select>
                </div>

            </div>

            <div class="row div-item-input-search-form">
                <div class="col s12 m2 l2">
                    <select class="select-searchform">
                        <option value="" selected>Modelo</option>
                        <option value="1">Focus</option>
                    </select>
                </div>

                <div class=" col s12 m2 l2">
                    <select class="select-searchform">
                        <option value="" selected>Ano</option>
                        <option value="2011">2011</option>
                    </select>
                </div>


                <div class="input-field input-searchform col s12 m2 l2">
                    <input id="inicial_price" type="text" class="validate">
                    <label for="inicial_price">Preço Mínimo: </label>
                </div>

                <div class="input-field input-searchform col s12 m2 l2">
                    <input id="final_price" type="text" class="validate">
                    <label for="final_price">Preço Máximo: </label>
                </div>

                <div class="input-field input-searchform col s12 m2 l2">
                    <input id="code" type="text" class="validate">
                    <label for="code">Código: </label>
                </div>
            </div>
            <div class="input-field input-searchform col s12 m12 l12 btn_basic_search">
                <button class="btn waves-effect waves-light" type="submit" name="action">Buscar
                    <i class="material-icons right">search</i>
                </button>
            </div>
        </form>
    </div>
</div>