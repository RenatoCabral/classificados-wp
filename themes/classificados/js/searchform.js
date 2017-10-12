var $ = jQuery;
$('#conservacao').change(function () {

    switch ($(this).val()) {
        case 'Novo':
            retrievePrices(0, 100000, 1000000, '.price_min');
            retrievePrices(0, 100000, 9000000, '.price_max');
            break;
        case 'Seminovo':
            retrievePrices(0, 100000, 100000, '.price_min');
            retrievePrices(0, 100000, 8000000, '.price_max');
            break;
        case 'Usado':
            retrievePrices(0, 100000, 200000, '.price_min');
            retrievePrices(0, 100000, 7000000, '.price_max');
            break;
    }
});

/**
 * start, inc e end: controle do loop;
 * id:               indentificador do select a ser alterado;
 * ilimitado:        flag que define se existirá opcao.
 */
function retrievePrices(start, inc, end, id, ilimitado) {
    var i;
    start = parseInt(start);
    $(id).empty();
    var output = '<option value="-1">Valor Mínimo</option>';

    if (id === '.price_max') {
        output = '<option value="-1">Valor Máximo</option>'
    }

    $(id).append(output);

    for (i = start; i <= end; i += inc) {
        $(id).append('<option value="' + i + '">R$ ' + moneyFormat(i) + '</option>');
    }
    if (ilimitado) {
        $(id).append('<option value="9999999999"> Ilimitado </option>');
    }
}

$('.price_min').change(function () {
    $('.price_max').empty();
    if ($(this).val() !== '-1') {
        var next = '';
        switch ($('#conservacao').val()) {
            case 'Novo':
                next = parseInt($(this).val()) + 1000;
                retrievePrices(next, 100000, 9000000, '.price_max');
                break;
            case 'Seminovo':
                next = parseInt($(this).val()) + 100000;
                retrievePrices(next, 100000, 8000000, '.price_max', true);
                break;
            case 'Usado':
                next = parseInt($(this).val()) + 100000;
                retrievePrices(next, 100000, 7000000, '.price_max', true);
                break;
            default:
                next = parseInt($(this).val()) + 100000;
                retrievePrices(next, 100000, 11000000, '.price_max', true);
        }
    } else {
        retrievePrices(0, 100000, 11000000, '.price_max');
    }
});
retrievePrices(0, 100000, 12000000, '.price_min');
retrievePrices(0, 200000, 13000000, '.price_max', true);

function moneyFormat(value) {
    return value < 1000 ? value : (value / 1000).toFixed(3);
}