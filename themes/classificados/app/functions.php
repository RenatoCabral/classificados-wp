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
        'Vinho'         => 'Vinho',
        'Outros'        => 'Outros'

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
        'V8'        =>  'V8',
        'Outro'        =>  'Outro'

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

function get_conservations() {
    $conservations = [
        'Novo'        => 'Novo',
        'Seminovo'    => 'Seminovo',
        'Usado'       => 'Usado'

    ];
    return $conservations;
}

function get_item_series(){

    $options = [
        'airbags' => 'Airbags',
        'airbag_motorista' => 'Airbag Motorista',
        'alarme' => 'Alarme',
        'ar_quente' => 'Ar Quente',
        'ar_condicionado' => 'Ar Condicionado',
        'banco_eletrico' => 'Banco Elétrico',
        'banco_couro' => 'Banco Couro',
        'banco_regulagem_altura' => 'Banco Regulagem Altura',
        'banco_dianteiro_com_aquecimento' => 'Banco Dianteiro com Aquecimento',
        'blindagem' => 'Blindagem',
        'central_multimidia' => 'Central Multimídia',
        'computador_bordo' => 'Computador Bordo',
        'controle_tracao' => 'Controle de Tração',
        'camera_de_re' => 'Câmera de ré',
        'capota_maritima' => 'Capota Marítima',
        'cd_mp3_player' => 'CD Mp3 Player',
        'controle_de_velocidade' => 'Controle de Velocidade',
        'direcao_hidraulica' => 'Direção Hidráulica',
        'direcao_eletrica' => 'Direção Elétrica',
        'desembacador_traseiro' => 'Desembaçador Traseiro',
        'espelhos_eletricos' => 'Espelhos Elétricos',
        'farol_de_milha' => 'Farol de Milha',
        'farol_de_milha_neblina' => 'Farol de Milha e Neblina',
        'farol_de_neblina' => 'Farol de Neblina',
        'farol_de_xenonio' => 'Farol de Xenônio',
        'freios_abs' => 'Freios ABS',
        'insulfilme' => 'Insulfilme',
        'limpador_traseiro' => 'Limpador Traseiro',
        'piloto_automatico' => 'Piloto Automático',
        'pneu_reserva' => 'Pneu Reserva(Step)',
        'rodas_liga_leve' => 'Rodas de Liga Leve',
        'radio' => 'Rádio',
        'radio_toca_fitas' => 'Rádio e Toca Fitas',
        'sensor_estacionamento' => 'Sensor de Estacionamento',
        'sensor_chuva' => 'Sensor de Chuva',
        'teto_solar' => 'Teto Solar',
        'tracao_4x4' => 'Tração 4x4',
        'travas_eletricas' => 'Travas Elétricas',
        'vidro_eletrico' => 'Vidro Elétrico',
        'volante_regulagem_altura' => 'Volante com Regulagem de altura',
    ];


   return $options;


}


/*função que carrega os estados*/
function get_uf() {
	$options = [
		'AC'               => 'Acre',
		'AL'            => 'Alagoas',
		'AP'              => 'Amapá',
		'AM'           => 'Amazonas',
		'BA'              => 'Bahia ',
		'CE'              => 'Ceará',
		'DF'   => 'Distrito Federal',
		'ES'     => 'Espírito Santo',
		'GO'              => 'Goiás',
		'MA'           => 'Maranhão',
		'MT'        => 'Mato Grosso',
		'MS' => 'Mato Grosso do Sul',
		'MG'       => 'Minas Gerais',
		'PA'               => 'Pará',
		'PB'            => 'Paraíba',
		'PR'             => 'Paraná',
		'PE'         => 'Pernambuco',
		'PI'              => 'Piauí',
		'RJ'     => 'Rio de Janeiro',
		'RN'                 => 'Rio Grande do Norte',
		'RS'  => 'Rio Grande do Sul',
		'RO'           => 'Rôndonia',
		'RR'            => 'Roraima',
		'SC'     => 'Santa Catarina',
		'SP'          => 'São Paulo',
		'SE'            => 'Sergipe',
		'TO'          => 'Tocantins'
	];

	return $options;
}



function admin_scripts(){
    //https://pt.stackoverflow.com/questions/186880/formul%C3%A1rio-ajax-javascript-e-php/186923
    global $typenow;
    //scripts serao carregados no admin onde o post type for veiculos
    if(is_admin() && $typenow == 'veiculo'){ ?>
       <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/select2.min.css">

        <style>
            .item-serie{
                margin: 8px;
                display: inline-block;
            }
            .item-detalhes{
                display: inline-block;
                margin-right: 15px;
            }
            #edit-slug-box{
            /*display: none;*/
            }
        </style>

        <script src="<?php bloginfo('template_directory') ?>/js/select2.min.js"></script>
        <script src="<?php bloginfo('template_directory') ?>/js/jquery.mask.min.js"></script>
        <script>
        jQuery(document).ready(function() {
            autoComplete();
            selectEstadoCidade();
            mask();

        });

        function mask(){
             jQuery('#ano').mask('0000');
        }

        function autoComplete(){
            //autocompletar os modelos de veículos
            <?php
                global $wpdb;
	            $modelo = $wpdb->get_col( "SELECT DISTINCT meta_value FROM $wpdb->postmeta WHERE meta_key = 'model'" );
	        ?>
            var modelo = <?= json_encode( $modelo ); ?>;
            var i;

            for(i=0;i<modelo.length;i++){
                if(modelo[i] == null){
                    modelo.splice(i,1);
                    i--;
                }
                console.log(modelo[i]);
            }
            jQuery("#modelo").autocomplete({source:modelo});
        }

        function selectEstadoCidade(){
           jQuery('.select-localizacao').select2();

             //jquery var do select dos estados
            var $selectUf = jQuery("#selectUf");

            //jquery var do select das cidades
            var $selectCidades = jQuery("#selectCidade");

            //será atribuido um valor nessa variável sempre que ele escolher um UF
            var estadoSelecionado;
            var cidadeSelecionada;

            //mesma ideia da função de cima porém nessa pegaremos a cidade de acordo com a UF escolhida
            var getCidades = function(estadoSelecionado,responseFunction){
              jQuery.ajax({
                method: "GET",
                url: "http://api.londrinaweb.com.br/PUC/Cidades/"+estadoSelecionado+"/BR/0/10000",
                dataType: "jsonp",
                success: responseFunction
              });
            };

            //essa função só é chamada quando escolhe algum estado da UF
            var populandoSelectCidades = function(response){
              //limpando o html do select
              $selectCidades.html("");
              jQuery.each(response,function(i,item){
                $selectCidades.append('<option value="'+item+'">'+item+'</option>')
              });
            };

            //sempre quando escolher uma UF coloca o valor selecionado na variavel estado selecionado
            //e depois disso lista as cidades correspodente a UF Escolhida
            $selectUf.change(function(){
              estadoSelecionado = jQuery(this).val();
                jQuery('.selecione-cidade').text('Carregando...');
              getCidades(estadoSelecionado,populandoSelectCidades);
            });

            $selectCidades.change(function(){
                 jQuery('.selecione-cidade').text('Carregando...');
              cidadeSelecionada = jQuery(this).val();
            });
        }


    </script>

<?php }
}
