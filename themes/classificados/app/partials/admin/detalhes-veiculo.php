<?php //$states = get_uf(); ?>
<!--<label>Estados</label>-->
<!--<select required name="uf" id="selectUf">-->
<!--    <option selected="true" disabled>Selecione</option>-->
<!--    --><?php //foreach ($states as $state => $value){ ?>
<!--        <option value="--><?//= $state; ?><!--" --><?php //selected( $uf, $state ); ?><!-- >--><?//= $value; ?><!--</option>-->
<!---->
<!--    --><?php //} ?>
<!---->
<!--    -->
<!--</select>-->
<!--<br><br>-->
<!---->
<!---->
<!--<label>Cidade</label>-->
<!--<select name="city" id="selectCidade">-->
<!--    <option value="--><?//= $city; ?><!--" --><?php //selected( $city); ?><!-- >--><?//= $city; ?><!--</option>-->
<!--</select>-->

<label>Preço</label>
<input type="text" name="price" placeholder="Preço" required value="<?= $price?>">

<br><br>

<label>Ano</label>
<input type="text" name="year" placeholder="Ano" required value="<?= $year?>">

<br><br>
<label>Km</label>
<input type="text" name="km" placeholder="Km" required value="<?= $km?>">

<br><br>

<?php
$colors = get_colors();
$motors = get_motors();
$fuels = get_fuels();
$exchanges = get_exchanges();
$convervations = get_convervations();

?>

<label>
    Cor <?php handler_options('color',$colors, $color);?>
</label>

<br><br>

<label>Qtde Portas</label>
<input type="number" name="doors" required value="<?= $doors?>">

<br><br>

<label>
    Motor <?php handler_options('motor', $motors, $motor);?>
</label

<br><br><br>

<label>Modelo</label>
<input type="text" name="model" placeholder="Modelo" required value="<?= $model?>">

<br><br>

<label>
    Combustível <?php handler_options('fuel', $fuels, $fuel);?>
</label>

<br><br>

<label>
    Câmbio <?php handler_options('exchange', $exchanges, $exchange);?>
</label>

<br><br>

<label>
    Conservação <?php handler_options('conservation', $convervations, $conservation);?>
</label>


<br><br>
<label>Final Placa</label>
<input type="text" name="final_place" placeholder="Final da Placa" required value="<?= $final_place?>">
