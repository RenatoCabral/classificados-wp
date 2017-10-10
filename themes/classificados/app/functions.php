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
            mask();
            jQuery('.select-localizacao').select2();

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



    </script>

<?php }
}
//Paginacao
function post_pagination($pages = '', $range = 2) {
	$showitems = ($range * 2)+1;

	global $paged;
	if(empty($paged)) {$paged = 1;}

	if($pages == ''){
		global $wp_query;
		$pages = $wp_query->max_num_pages;

		if(!$pages){
			$pages = 1;
		}
	}

	if(1 != $pages){
		echo "<div class='row paginacao'>";
		if($paged > 2 && $paged > $range+1 && $showitems < $pages) {echo "<a href='".get_pagenum_link($paged - 1)."' class='current'>&laquo;</a>";}
		if($paged > 6 && $showitems < $pages) {echo "<a href='".get_pagenum_link(1)."'>1</a> <span class='current'>...</span>";}

		for ($i=1; $i <= $pages; $i++) {
			if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
				echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
			}
		}

		if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) {echo "<span class='current'>...</span> <a href='".get_pagenum_link($pages)."'>$pages</a>";}
		if ($paged < $pages && $showitems < $pages) {echo "<a href='".get_pagenum_link($paged + 1)."' class='current'>&raquo;</a>";}
		echo "</div>\n";
	}
}

