<?php

function handler_options($name, $options, $selected){ ?>
    <select name="<?= $name ?>">
        <option value="-1">Selecione</option>

<?php        foreach ( $options as $code => $name ) { ?>
            <option value="<?= $code; ?>" <?php selected( $selected, $code ); ?> ><?= $name; ?></option>
        <?php }

    echo ' </select>';
}



function get_colors() {
    $colors = [
        'Azul'          => 'Azul',
        'Cinza'         => 'Cinza',
        'Vermelho'      => ' Vermelho'

    ];

    return $colors;
}


function get_motors() {
    $motors = [
        '1.0'       => '1.0',
        '1.4'       => '1.4',
        '1.6'       => ' 1.6'

    ];

    return $motors;
}

function get_fuels() {
    $fuels = [
        'Gasolina'      => 'Gasolina',
        'Álcool'        => 'Álcool',
        'Flex'          => 'Flex',
        'Diesel'        => 'Diesel'

    ];
    return $fuels;
}

function get_exchanges() {
    $exchanges = [
        'Manual'        => 'Manual',
        'Automatico'    => 'Automatico',
        'CVT'           => 'CVT'

    ];
    return $exchanges;
}

function get_convervations() {
    $convervations = [
        'Novo'        => 'Novo',
        'Seminovo'    => 'Seminovo',
        'Usado'       => 'Usado'

    ];
    return $convervations;
}


