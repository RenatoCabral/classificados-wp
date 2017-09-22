

<label>Preço</label>
<input type="text" name="price" placeholder="Preço" value="<?= $price?>">

<br><br>

<label>Ano</label>
<input type="text" name="year" placeholder="Ano" value="<?= $year?>">

<br><br>
<label>Km</label>
<input type="text" name="km" placeholder="Km" value="<?= $km?>">

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
<input type="number" name="doors" value="<?= $doors?>">

<br><br>

<label>
    Motor <?php handler_options('motor', $motors, $motor);?>
</label

<br><br><br>

<label>Modelo</label>
<input type="text" name="model" placeholder="Modelo" value="<?= $model?>">

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
<input type="text" name="final_place" placeholder="Final da Placa" value="<?= $final_place?>">
