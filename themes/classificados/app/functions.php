<?php

function handler_options($name, $options, $selected){ ?>
    <select required name="<?= $name ?>">
        <option value="">Selecione</option>

<?php        foreach ( $options as $code => $name ) { ?>
            <option value="<?= $code; ?>" <?php selected( $selected, $code ); ?> ><?= $name; ?></option>
        <?php }

    echo ' </select>';
}



function get_colors() {
    $colors = [
        'Amarelo'       => 'Amarelo',
        'Azul'          => 'Azul',
        'Azul Metálico' => 'Azul Metálico',
        'Bege'          => 'Bege',
        'Branco'        => 'Branco',
        'Cinza'         => 'Cinza',
        'Cinza Metálico'=> 'Cinza Metálico',
        'Cromado'       => 'Cromado',
        'Dourado'       => 'Dourado',
        'Indefinida'    => 'Indefinida',
        'Laranja'       => 'Laranja',
        'Marrom'        => 'Marrom',
        'Prata'         => 'Prata',
        'Preto'         => 'Preto',
        'Preto Metálico'=> 'Preto Metálico',
        'Rosa'          => 'Rosa',
        'Roxo'          => 'Roxo',
        'Verde'         => 'Verde',
        'Vermelho'      => ' Vermelho',
        'Vinho'         => 'Vinho'

    ];

    return $colors;
}


function get_motors() {
    $motors = [
        '1.0'       => '1.0',
        '1.4'       => '1.4',
        '1.6'       => ' 1.6',
        '2.0'       =>  '2.0',
        'Turbo'     =>  'Turbo',
        'V6'        =>  'V6',
        'V8'        =>  'V8'

    ];

    return $motors;
}

function get_fuels() {
    $fuels = [
        'Álcool'        => 'Álcool',
        'Álcool e gás natural' => 'Álcool e gás natural',
        'Diesel'        => 'Diesel',
        'Flex'          => 'Flex',
        'Gás natural' => 'Gás natural',
        'Gasolina'      => 'Gasolina',
        'Gasolina e álcool'      => 'Gasolina e álcool',
        'Gasolina e eletrico' => 'Gasolina e eletrico',



    ];
    return $fuels;
}

function get_exchanges() {
    $exchanges = [
        'Automatico'    => 'Automatico',
        'Automatico sequencial'    => 'Automatico sequencial',
        'CVT'           => 'CVT',
        'Manual'        => 'Manual',

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


function get_item_series(){


    $options = [
        'airbags' => 'airbags',
        'airbag_motorista' => 'airbag_motorista',
        'alarme' => 'alarme',
        'ar_quente' => 'ar_quente',
        'ar_condicionado' => 'ar_condicionado',
        'banco_eletrico' => 'banco_eletrico',
        'banco_couro' => 'banco_couro',
        'banco_regulagem_altura' => 'banco_regulagem_altura',
        'banco_dianteiro_com_aquecimento' => 'banco_dianteiro_com_aquecimento',
        'blindagem' => 'blindagem',
        'central_multimidia' => 'central_multimidia',
        'computador_bordo' => 'computador_bordo',
        'controle_tracao' => 'controle_tracao',
        'camera_de_re' => 'camera_de_re',
        'capota_maritima' => 'capota_maritima',
        'cd_mp3_player' => 'cd_mp3_player',
        'controle_de_velocidade' => 'controle_de_velocidade',
        'direcao_hidraulica' => 'direcao_hidraulica',
        'direcao_eletrica' => 'direcao_eletrica',
        'desembacador_traseiro' => 'desembacador_traseiro',
        'espelhos_eletricos' => 'espelhos_eletricos',
        'farol_de_milha' => 'farol_de_milha',
        'farol_de_milha_neblina' => 'farol_de_milha_neblina',
        'farol_de_neblina' => 'farol_de_neblina',
        'farol_de_xenonio' => 'farol_de_xenonio',
        'freios_abs' => 'freios_abs',
        'insulfilme' => 'insulfilme',
        'limpador_traseiro' => 'limpador_traseiro',
        'piloto_automatico' => 'piloto_automatico',
        'pneu_reserva' => 'pneu_reserva',
        'rodas_liga_leve' => 'rodas_liga_leve',
        'radio' => 'radio',
        'radio_toca_fitas' => 'radio_toca_fitas',
        'sensor_estacionamento' => 'sensor_estacionamento',
        'sensor_chuva' => 'sensor_chuva',
        'teto_solar' => 'teto_solar',
        'tracao_4x4' => 'tracao_4x4',
        'travas_eletricas' => 'travas_eletricas',
        'vidro_eletrico' => 'vidro_eletrico',
        'volante_regulagem_altura' => 'volante_regulagem_altura',
    ];


   return $options;


}