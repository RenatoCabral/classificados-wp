<?php $states = get_uf(); ?>
<label>Estados</label>
<select style="width: 200px" class="select-localizacao" required name="uf" id="selectUf">
    <option selected="true" disabled>Selecione</option>
    <?php foreach ($states as $state => $value){ ?>
        <option value="<?= $state; ?>" <?php selected( $uf, $state ); ?> ><?= $value; ?></option>

    <?php } ?>


</select>
<br><br>


<label>Cidade</label>
<select style="width: 200px" class="select-localizacao" name="city" id="selectCidade">
    <option class="selecione-cidade" value="<?= $city; ?>" <?php selected( $city); ?> ><?= $city; ?></option>
</select>