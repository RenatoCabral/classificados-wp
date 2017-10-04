<?php $states = get_uf(); ?>
<label>Estados</label>
<select required name="uf" id="selectUf">
    <option selected="true" disabled>Selecione</option>
    <?php foreach ($states as $state => $value){ ?>
        <option value="<?= $state; ?>" <?php selected( $uf, $state ); ?> ><?= $value; ?></option>

    <?php } ?>


</select>
<br><br>


<label>Cidade</label>
<select name="city" id="selectCidade">
    <option value="<?= $city; ?>" <?php selected( $city); ?> ><?= $city; ?></option>
</select>