var $ = jQuery;

jQuery('#estado').on('change', function () {
    jQuery('#cidade').html('').append('<option value="-1">Carregando...</option>');
    var state = jQuery('#estado').val();
    var data = {
        action: 'get_valid_cities_by_state_id',
        state_id: state
    };

    jQuery.ajax({
        url: ajaxurl,
        type: 'post',
        data: data,
        success: function (response) {
            console.log('SUCCESS');
            console.log(response);
            jQuery('#cidade').html('');
            jQuery('#cidade').append('<option value="-1">Selecione uma Cidade</option>');
            response = jQuery.parseJSON(response);

            var option = '';
            jQuery.each(response, function(index, data){
                option += '<option value="' + data+ '">'+ data + '</option>';
                jQuery('#cidade').append(option);


            });
        },
        error: function (response) {
            console.log('ERROR');
            console.log(response)
        }
    });
});


$('#fabricante').change(function () {
    console.log('changed');
    $('#modelo').empty().append('<option>Carregando...</option>');
    $.ajax({
        url: ajaxurl,
        type: 'post',
        data: {
            action: 'get_models_by_manufacturer',
            fabricante: $('#fabricante').val()
        },
        success: function (response) {
            console.log(response);
            $('#modelo').empty().append(response);
        }
    });
});
