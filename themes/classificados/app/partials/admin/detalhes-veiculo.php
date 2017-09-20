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
